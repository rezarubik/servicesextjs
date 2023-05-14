<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function index_data()
    {
        $links = Link::orderBy('id', 'desc');
        return response()->json([
            'status' => true,
            'message' => 'Data founded!',
            'total' => $links->count(),
            'results' => $links->get()
        ]);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = [
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'tipe' => $request->tipe,
                'judul' => $request->judul,
                'url' => $request->url,
            ];
            Link::create($data);
            DB::commit();
            return response()->json([
                'status' => true,
                'message' => 'Data successfully saved!'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $link = Link::find($id);
            if (!$link) {
                DB::rollBack();
                return response()->json([
                    'status' => false,
                    'message' => 'Data not found!'
                ]);
            }
            $link->update([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'tipe' => $request->tipe,
                'judul' => $request->judul,
                'url' => $request->url,
            ]);
            DB::commit();
            return response()->json([
                'status' => true,
                'message' => 'Data successfully updated!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $link = Link::find($id);
            if (!$link) {
                DB::rollBack();
                return response()->json([
                    'status' => false,
                    'message' => 'Data not found!'
                ]);
            }
            $link->delete();
            DB::commit();
            return response()->json([
                'status' => true,
                'message' => 'Data successfully updated!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}

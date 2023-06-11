<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();

        return response()->json(
            [
                'success' => true,
                'message' => 'Data BERHASIL ditampilkan...',
                'data' => $mhs
            ],
            200
        );

        // http://127.0.0.1:8000/api/mahasiswa/read
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if ($mhs) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data BERHASIL ditambahkan...',
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data GAGAL ditambahkan...'
                ],
                400
            );
        }
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if ($mhs) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data BERHASIL diubah...',
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data GAGAL diubah...'
                ],
                400
            );
        }
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id)->delete();

        if ($mhs) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data BERHASIL dihapus...',
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data GAGAL dihapus...'
                ],
                400
            );
        }
    }
}
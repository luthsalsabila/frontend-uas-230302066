<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KajurController extends Controller
{
    private $apiUrl = 'http://localhost:8080/kajur';

    public function index()
    {
        $response = Http::get($this->apiUrl);

        if ($response->successful()) {
            $kajur = $response->json();
        } else {
            $kajur = [];
        }

        return view('kajur.index', compact('kajur'));
    }

    public function create()
    {
        return view('kajur.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_kajur'     => $request->input('id_kajur'),
            'nama_kajur'   => $request->input('nama_kajur'),
            'nidn'         => $request->input('nidn'),
            'nama_jurusan' => $request->input('nama_jurusan'),
            'id_user'      => $request->input('id_user'),
        ];

        $response = Http::post($this->apiUrl, $data);

        if ($response->successful()) {
            return redirect()->route('kajur.index')->with('success', 'Kajur berhasil ditambahkan!');
        } else {
            return back()->with('error', 'Gagal menambahkan kajur. ' . $response->body());
        }
    }

    public function edit($id_kajur)
    {
        $response = Http::get("{$this->apiUrl}/{$id_kajur}");

        if ($response->successful()) {
            $kajur = $response->json();
            return view('kajur.edit', compact('kajur'));
        } else {
            return redirect()->route('kajur.index')->with('error', 'Data tidak ditemukan.');
        }
    }

    public function update(Request $request, $id_kajur)
    {
        $data = [
            'id_kajur'     => $request->input('id_kajur'),
            'nama_kajur'   => $request->input('nama_kajur'),
            'nidn'         => $request->input('nidn'),
            'nama_jurusan' => $request->input('nama_jurusan'),
            'id_user'      => $request->input('id_user'),
        ];

        $response = Http::put("{$this->apiUrl}/{$id_kajur}", $data);

        if ($response->successful()) {
            return redirect()->route('kajur.index')->with('success', 'Data berhasil diperbarui.');
        } else {
            return back()->with('error', 'Gagal update. ' . $response->body());
        }
    }

    public function destroy($id_kajur)
    {
        $response = Http::delete("{$this->apiUrl}/{$id_kajur}");

        if ($response->successful()) {
            return redirect()->route('kajur.index')->with('success', 'Data berhasil dihapus.');
        } else {
            return back()->with('error', 'Gagal menghapus data.');
        }
    }
}

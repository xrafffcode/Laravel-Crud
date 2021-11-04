<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Models;
use App\Models\Siswa;

class SiswaController extends Controller
{
     public function index()
    {
        $data_siswa = Siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Input Data Berhasil');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }

    public function update(Request $request,$id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Update Data Berhasil');
    }

}


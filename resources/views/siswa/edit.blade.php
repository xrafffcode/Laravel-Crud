@extends('layouts.master')

@section('content')
            @if(session('sukses'))
                <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <h1>Edit Data Siswa</h1>
                    <form action="/siswa/{{$siswa->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                            </div>
                           <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama"  value="{{$siswa->agama}}">
                            </div>
                           
                            <button type="submit" class="btn btn-warning">Update</button>
                    </form>
            </div>
        </div>
        
@endsection
       

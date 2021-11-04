@extends('layouts.master')

@section('content')

            @if(session('sukses'))
                <div class="alert alert-primary alert-success" role="alert">
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <nav class="navbar navbar-light bg-white">
                    <div class="container-fluid">
                        <h1>Data Siswa</h1>
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data Siswa
                        </button>
                    </div>
                </nav>
                
                <table class="table table-hover">
                    <tr>    
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama<th>
                    </tr>
                    @foreach($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->nama_depan}}</td>
                        <td>{{$siswa->nama_belakang}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-tvitle" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/siswa/create" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                            </div>
                           <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
       


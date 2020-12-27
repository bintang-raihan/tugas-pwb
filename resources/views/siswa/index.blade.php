@extends('layout.main')

@section('title', 'Daftar Siswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Daftar Siswa</h1>  
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $siswa as $ssw )
                <tr>
                    <th scope=row>{{ $loop->iteration }}</th>
                    <td>{{ $ssw->nama }}</td>   
                    <td>{{ $ssw->nisn }}</td>
                    <td>{{ $ssw->email }}</td>
                    <td>{{ $ssw->jurusan }}</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
  </div>
@endsection
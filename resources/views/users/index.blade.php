@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </div>
        <form method="GET" action="{{url('search')}}">
            <div class="float-left my-1">
                <input type="text" name="nama" >
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif

 <table class="table table-bordered">
     <tr>
         <th>Nim</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Tanggal Lahir</th>
         <th>Kelas</th>
         <th>Jurusan</th>
         <th>No_Handphone</th>
         <th width="280px">Action</th>
    </tr>

    @foreach ($paginate as $mahasiswa)
    <tr>
        <td>{{ $mahasiswa->nim }}</td>
        <td>{{ $mahasiswa->nama }}</td>
        <td>{{ $mahasiswa->email}}</td>
        <td>{{ $mahasiswa->tanggal_lahir}}</td>
        <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
        <td>{{ $mahasiswa->jurusan }}</td>
        <td>{{ $mahasiswa->no_hp }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',$mahasiswa->nim) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mahasiswa->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mahasiswa->nim) }}">Edit</a>
                @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="{{ route('mahasiswa.nilai',$mahasiswa->nim)}}">Nilai</a>
            </form>
        </td>
    </tr>
    @endforeach
    </table>


    <div class="d-flex">
        {{$paginate->links()}}
    </div>
@endsection

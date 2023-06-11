@extends('layouts.main')
@section('title', 'eMaha - Student')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <a href="student/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square-fill"></i> Student</a>
            <form action="/student/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
            @if (session('flash'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('flash') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Minat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mhs as $idx => $m)
                        <tr>
                            <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->gender }}</td>
                            <td>{{ $m->prodi }}</td>
                            <td>{{ $m->minat }}</td>
                            <td><a href="/student/formedit/{{ $m->id }}" class="btn btn-success"><i
                                        class="bi bi-pen-fill"></i></a>
                                <a href="/student/delete/{{ $m->id }}" class="btn btn-danger"><i
                                        class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{ $mhs->links() }}</span>
        </div>
    </div>
@endsection

@extends('layouts.main')
@section('title', 'eMaha - Student Adds | Form')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Add a Student</strong></div>
        <div class="card-body">
            <form action="/student/save" method="POST">
                @csrf

                {{-- NIM --}}
                <div class="form-group">
                    <strong>NIM</strong>
                    <input type="number" name="nim" class="form-control" placeholder="Insert NIM" style="width: 125px">
                </div>

                {{-- Nama --}}
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Insert Name"
                        style="width: 750px">
                </div>

                {{-- Gender --}}
                <strong>Gender</strong>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Laki-laki">
                    <label>Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Perempuan">
                    <label>Perempuan</label>
                </div>

                {{-- Prodi --}}
                <strong>Program Studi</strong>
                <div class="form-group" style="width: 175px">
                    <select name="prodi" class="form-control">
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </div>

                {{-- Minat --}}
                <strong>Minat</strong>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI">
                    <label>Artificial Intelligence</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="WEB">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS">
                    <label>Database Engineer</label>
                </div>

                {{-- Button Submit --}}
                <div class="form-group mt-4"><button type="submit" role="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

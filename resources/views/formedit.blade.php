@extends('layouts.main')
@section('title', 'eMaha - Student Edits | Form')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Edit a Student</strong></div>
        <div class="card-body">
            @php
                $minat = explode(', ', $mhs->minat);
            @endphp
            <form action="/student/update/{{ $mhs->id }}" method="POST">
                @csrf
                @method('PUT')

                {{-- NIM --}}
                <div class="form-group">
                    <strong>NIM</strong>
                    <input type="number" name="nim" class="form-control" value="{{ $mhs->nim }}" readonly
                        style="width: 125px">
                </div>

                {{-- Nama --}}
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}"
                        style="width: 750px">
                </div>

                {{-- Gender --}}
                <strong>Gender</strong>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Laki-laki"
                        {{ $mhs->gender == 'Laki-laki' ? 'checked' : '' }}>
                    <label>Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Perempuan"
                        {{ $mhs->gender == 'Perempuan' ? 'checked' : '' }}>
                    <label>Perempuan</label>
                </div>

                {{-- Prodi --}}
                <strong>Program Studi</strong>
                <div class="form-group" style="width: 175px">
                    <select name="prodi" class="form-control">
                        <option value="Informatika" {{ $mhs->prodi == 'Informatika' ? 'selected' : '' }}>Informatika
                        </option>
                        <option value="Sistem Informasi" {{ $mhs->prodi == 'Sistem Informasi' ? 'selected' : '' }}>Sistem
                            Informasi</option>
                    </select>
                </div>

                {{-- Minat --}}
                <strong>Minat</strong>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI"
                        {{ in_array('AI', $minat) ? 'checked' : '' }}>
                    <label>Artificial Intelligence</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="WEB"
                        {{ in_array('WEB', $minat) ? 'checked' : '' }}>
                    <label>Web Engineer</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS"
                        {{ in_array('DBMS', $minat) ? 'checked' : '' }}>
                    <label>Database Engineer</label>
                </div>

                {{-- Button Submit --}}
                <div class="form-group mt-4"><button type="submit" role="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

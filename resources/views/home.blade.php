@extends('layouts.main')
@section('title', 'eMaha - Home')
@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <h5>Hi, {{ Auth::user()->nama }}!</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, debitis laboriosam molestias nihil expedita, laudantium ullam quae suscipit tempore perspiciatis est odio veniam voluptate maiores.</p>
        </div>
    </div>
@endsection

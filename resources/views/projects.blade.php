@extends('layouts.app')

@section('title', 'Projects - Portfolio')

@php
    $projects = ['Aplikasi CRUD Studiva', 'Website Navia',
                 'Website Upcons'];
@endphp

@section('content')
    <h1>Daftar Project</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project }}</li>
        @endforeach
    </ul>
@endsection

@push('scripts')
    <script>console.log('halaman projects dimuat');</script>
@endpush
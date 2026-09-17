@extends('layouts.app')

@section('title', 'Education - Portfolio')

@php
    $riwayat = [
        'D-IV Teknologi Rekayasa Perangkat Lunak - UGM (2025 - sekarang)',
        'SMA Negeri 2 Jakarta- Jakarta (2022 - 2025)',
    ];
@endphp

@section('content')
    <h1>Riwayat Pendidikan</h1>
    <ul>
        @forelse ($riwayat as $item)
            <li>{{ $item }}</li>
        @empty
            <p>Belum ada data riwayat pendidikan.</p>
        @endforelse
    </ul>
@endsection
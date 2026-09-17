<h2>Halo Blade</h2>
<p>Data: {{ $data }}</p>

@php
    $umur = 20;
    $projects = ['Aplikasi CRUD Buku', 'Website Portfolio'];
@endphp

@if ($umur >= 17)
    <p>Sudah dewasa</p>
@elseif ($umur >= 13)
    <p>Remaja</p>
@else
    <p>Anak-anak</p>
@endif

<ul>
@foreach ($projects as $project)
    <li>{{ $project }}</li>
@endforeach
</ul>

@forelse ($projects as $project)
    <li>{{ $project }}</li>
@empty
    <p>Belum ada data project.</p>
@endforelse

@isset($data)
    <p>Data tersedia: {{ $data }}</p>
@endisset




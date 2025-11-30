@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>🤖 AI Tools Directory</h1>
    <a href="{{ route('tools.create') }}" class="btn btn-primary">+ Tambah Baru</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">{{ $message }}</div>
@endif

<div class="row">
    @foreach ($tools as $tool)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $tool->nama_tool }}</h5>
                <span class="badge bg-secondary mb-2">{{ $tool->kategori }}</span>
                <p class="card-text text-muted">{{ $tool->deskripsi }}</p>
                <a href="{{ $tool->link_website }}" target="_blank" class="btn btn-sm btn-outline-primary">Kunjungi</a>
                
                <form action="{{ route('tools.destroy', $tool->id) }}" method="POST" class="d-inline float-end">
                    <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
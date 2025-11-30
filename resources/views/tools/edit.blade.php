@extends('layout')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-warning">Edit Tool</div>
    <div class="card-body">
        <form action="{{ route('tools.update', $tool->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Tool</label>
                <input type="text" name="nama_tool" value="{{ $tool->nama_tool }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori" class="form-select">
                    <option {{ $tool->kategori == 'Chatbot' ? 'selected' : '' }}>Chatbot</option>
                    <option {{ $tool->kategori == 'Image Generator' ? 'selected' : '' }}>Image Generator</option>
                    <option {{ $tool->kategori == 'Coding Assistant' ? 'selected' : '' }}>Coding Assistant</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $tool->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label>Link Website</label>
                <input type="url" name="link_website" value="{{ $tool->link_website }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection
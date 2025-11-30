@extends('layout')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">Tambah Tool Baru</div>
    <div class="card-body">
        <form action="{{ route('tools.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Tool</label>
                <input type="text" name="nama_tool" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori" class="form-select">
                    <option>Chatbot</option>
                    <option>Image Generator</option>
                    <option>Coding Assistant</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Link Website</label>
                <input type="url" name="link_website" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('tools.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
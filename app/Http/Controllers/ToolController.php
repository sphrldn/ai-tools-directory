<?php
namespace App\Http\Controllers;
use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    // Menampilkan halaman utama (READ)
    public function index() {
        $tools = Tool::latest()->get(); // Sama dengan SELECT * ORDER BY ...
        return view('tools.index', compact('tools'));
    }

    // Menampilkan form tambah
    public function create() {
        return view('tools.create');
    }

    // Proses simpan data (CREATE)
    public function store(Request $request) {
        // Validasi input (Fitur keren Laravel)
        $request->validate([
            'nama_tool' => 'required',
            'link_website' => 'required|url'
        ]);

        Tool::create($request->all()); // Simpan ke DB satu baris aja!
        return redirect()->route('tools.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit(Tool $tool) {
        return view('tools.edit', compact('tool'));
    }

    // Proses update data (UPDATE)
    public function update(Request $request, Tool $tool) {
        $tool->update($request->all());
        return redirect()->route('tools.index')->with('success', 'Data berhasil diupdate!');
    }

    // Proses hapus data (DELETE)
    public function destroy(Tool $tool) {
        $tool->delete();
        return redirect()->route('tools.index')->with('success', 'Data dihapus!');
    }
}
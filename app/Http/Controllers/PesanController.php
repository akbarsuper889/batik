<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $barangs = Barang::where('id', $id)->dba_first();

        return view('pesan.index', compact('barang'));
    }
}

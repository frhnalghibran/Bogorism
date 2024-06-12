<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class DestinasiController extends Controller
{
    public function home() {
        $data = Wisata::all(); // Fetch all records from the 'wisatas' table
        return view('/destinasi', compact('data'));
    }

    public function showDetail($id){
        $wisata = Wisata::findOrFail($id);
        return view('detail', compact('data'));
    }
}
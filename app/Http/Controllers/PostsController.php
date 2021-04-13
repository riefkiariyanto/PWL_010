<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function search(Request $request)
    {
        // $cari = $request->nim;
        $mahasiswa= Mahasiswa::where('nama', 'LIKE', "%" . $request->nama ."%")->paginate(5);
        return view('users.cari', compact('mahasiswa'));
    }

}

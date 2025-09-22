<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $produk = Produk::all();
        return view('dashboard', compact('user', 'produk'));
    }
}

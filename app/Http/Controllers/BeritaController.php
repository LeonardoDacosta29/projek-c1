<?php
namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
Class BeritaController extends Controller
{
    public function index()
    {
        return view('news' , [
            "title" => "News",
            "news" => Berita::all()
    ]);
    }
    public function show(Berita $news_detil)
    {
        return view('news_detil' , [
            "title" => "News Detil",
            "news_detil" => $news_detil
    ]);
    }
}
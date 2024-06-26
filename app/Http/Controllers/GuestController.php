<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class GuestController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('views')->paginate(8);
        return view('feed', compact('posts'));
    } 

    /**
     * 
     * halaman - halaman
     * 
     */
    public function portofolio()
    {
        return view('pages.portofolio-desain'); 
    }

    public function hargaJasaDesain()
    {
        return view('pages.harga-jasa-desain');
    }

    public function hargaJasaBangun()
    {
        return view('pages.harga-jasa-bangun');
    }

    public function karir()
    {
        return view('pages.karir');
    }

    public function contactUs()
    {
        return view('pages.kontak-kami');
    }

    public function layananArsitek()
    {
        return view('pages.layanan-jasa-arsitek');
    }

    public function layananBangun()
    {
        return view('pages.layanan-jasa-bangun');
    }

    //tambahan 3-4-2024
    public function tentangKami()
    {
        return view('pages.tentang-kami');
    }

    public function blog()
    {
        $posts = Post::with('views')->paginate(5);
        return view('pages.blog', compact('posts'));
    }

    public function testimoni()
    {
        return view('pages.testimoni');
    }

    public function projek()
    {
        return view('project.index');
    }

    public function projekAgung()
    {
        return view('project.agung-dau');
    }

    //tambahan 4-4-2024
    public function projekHusni()
    {
        return view('project.husni-malang');
    }

    public function palmerah()
    {
        return view('project.palmerah');
    }

    public function temasBatu()
    {
        return view('project.temas-batu');
    }

    public function wajak()
    {
        return view('project.wajak');
    }

    /**
     * 
     * halaman artikel show 
     * 
     */
    public function artikelShow(Request $request,string $id) 
    {
        // dd($request);
        $post = Post::findOrFail($id);
        views($post)->record(); //eloquent-viewable
        $postRecommendation = Post::paginate(9);

        return view('pages.artikel', compact('post', 'postRecommendation'));
    }

    /**
     * 
     * guest cari artikel
     * 
     */
    public function cariArtikel(Request $request)
    {
        // dd($request);
        $posts = Post::search($request->keyword)->get();
        return view('search.guest-search-artikel', compact('posts'));
    }

    /**
     * 
     * writer posts all
     * 
     */
    public function writerArtikel(string $id, Request $request)
    {
        // dd($request);
        $user = User::find($id);
        // $user = User::where('id', $id)->get();
        $posts = Post::where('user_id', $id)->get();

        return view('pages.writer', compact('posts', 'user')); 
    }
}

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// require __DIR__.'/auth.php';

// FRONTEND  END
//1. create login and register user (with email verif)
//2. Create Front End UI with Blade Templating , Bootstrap
//3. Create hero section carousel with owlcarousel & slick js, jquery
//4. Create greetings section
//5. Layanan jasa service carousel
//6. pricelist 
//7. calculator jasa desain
//8. proses kerja 
//9. add dependencies 
//10. insert real media form the client

//BACK END
// 1. Login Auth with Breeze
// 2. Multirole User 
// 3. Install ckeditor (WYSIWYG feature) , upload image
// 4. install sweet alert & now lets'create eloquent sluggable, after the configuration, let's create new post
// 5. fitur search 
// 6. Back-end ui & ux (admin dashboard)
// 7. Delete Login  wiht laravel breeze and install login auth with laravel ui (this vide we will try it in this project)
// 8. Make the dashboard fetch the database and updating the ui --done
// 9. Set timezone to localzone (indonesia) --done
// enjoy saturday !! let's evaluate this project!
// 10. CRUD post per user , then trying to paginate database, work so well, nice!
// whats next ? let me think, let's move to front end


Auth::routes();
Auth::routes(['verify' => true]);

// Route::get('/', function () {
//     return view('feed');
// })->name('feed.home'); 

Route::get('/', [GuestController::class, 'index'])->name('feed.home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//new landing ui
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//create multirole route for just auth 
Route::group(['middleware' => ['auth', 'verified']], function(){
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('post/checkSlug', [HomeController::class, 'checkSlug'])->name('post.check.slug'); //auto slug for post 
    Route::get('category/checkSlug', [HomeController::class, 'categorySlug'])->name('category.check.slug'); //auto slug for category
    Route::get('search-post', [HomeController::class, 'searchPost'])->name('search.post');  //search-post
    Route::get('search-user', [HomeController::class, 'searchUser'])->name('search.user'); //search-use
    Route::get('tulisan-saya/{id}', [HomeController::class, 'tulisanSaya'])->name('tulisan.saya'); //display user posts
    Route::get('my-profile', [HomeController::class, 'myProfile'])->name('my.profile');
    Route::post('my-profile', [HomeController::class, 'updateProfile'])->name('update.my.profile');
});  

//guest role 
// Route::get('feed', [GuestController::class, 'index'])->name('feed.home');
Route::get('portofolio-desain', [GuestController::class, 'portofolio'])->name('portofolio.desain');
Route::get('artikel/{id}', [GuestController::class, 'artikelShow'])->name('guest.artikel.show');
Route::get('cari-artikel', [GuestController::class, 'cariArtikel'])->name('guest.artikel.search');
Route::get('writer-artikel/{id}', [GuestController::class, 'writerArtikel'])->name('guest.writer.artikel'); 
Route::get('harga-jasa-desain', [GuestController::class, 'hargaJasaDesain'])->name('guest.harga.jasa.desain');
Route::get('harga-jasa-bangun', [GuestController::class, 'hargaJasaBangun'])->name('guest.harga.jasa.bangun');
Route::get('karir', [GuestController::class, 'karir'])->name('guest.karir');
Route::get('kontak-kami', [GuestController::class, 'contactUs'])->name('guest.kontak.kami');
Route::get('layanan-jasa-desain-arsitek', [GuestController::class, 'layananArsitek'])->name('guest.layanan.jasa.arsitek');
Route::get('layanan-jasa-bangun', [GuestController::class, 'layananBangun'])->name('guest.layanan.jasa.bangun');
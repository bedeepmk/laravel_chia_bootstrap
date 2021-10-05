<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MemberController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.index');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//단순페이지
// 회사소개
Route::get('/intro', [PageController::class, 'intro'])->name('intro');

//왜 마이닝랩인가
Route::get('/whyus', [PageController::class, 'whyus'])->name('whyus');

//채굴현장
Route::get('/miningsite', [PageController::class, 'miningsite'])->name('miningsite');

//채굴기구매
Route::get('/purchase', [PageController::class, 'purchase'])->name('purchase');

//FAQ
Route::get('/faq', [PageController::class, 'faq'])->name('faq');


//멤버관련 페이지(글쓰기 / 회원정보등 )=>미들웨어로 회원권한이 있는지 체킹할 것.
//Contact
Route::get('/contact', [MemberController::class, 'contact'])->name('contact');

Route::group(['prefix'=>'mypage'],function() {
    //mypage/dashboard
    Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('mypage.dashboard');
    //채굴내역
    Route::get('/mininglog', [MemberController::class, 'mininglog'])->name('mypage.mininglog');
    //플롯구매내역
    Route::get('/flotlog', [MemberController::class, 'flotlog'])->name('mypage.flotlog');
    //포인트내역
    Route::get('/pointlog', [MemberController::class, 'pointlog'])->name('mypage.pointlog');
    //치아코인출금
    Route::get('/withdraw', [MemberController::class, 'withdraw'])->name('mypage.withdraw');
    //나의정보
    Route::get('/myinfo', [MemberController::class, 'myinfo'])->name('mypage.myinfo');
});
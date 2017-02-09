<?php namespace App\Http\Controllers;

use DB;
use App\ProdukMasuk;
use App\User;
use App\ProdukKeluar;
use App\ProdukPinjaman;



class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = DB::table('users')->where('type','user')->count();
		$users2 = DB::table('users')->where('type','admin')->count();
		$produk_masuks = DB::table('produk_masuks')->count();
		$produk_pinjamen = DB::table('produk_pinjamen')->count();
		$produk_keluars = DB::table('produk_keluars')->count();
		return view('infoinven.home')->with('users', $users)->with('users2',$users2)->with('produk_masuks',$produk_masuks)->with('produk_pinjamen',$produk_pinjamen )->with('produk_keluars',$produk_keluars);
	}

	public function listprodukguest()
	{	
		$data = array('data'=>ProdukMasuk::all());
		return view('infoinven.listprodukguest')->with($data);
	}

	public function hubungiadmin()
	{
		$data = array('data'=>User::all()->where('type','admin'));
		return view('infoinven.hubungiadmin')->with($data);
	}

}

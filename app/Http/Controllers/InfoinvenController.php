<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App;
use DB;
use App\User;
use App\ProdukMasuk;
use App\ProdukKeluar;
use App\ProdukPinjaman;
use PDF;


class InfoinvenController extends Controller {
	

	public function __construct(){
		$this->middleware('auth');
	}

	public function listanggota()
	{
		if(\Auth::user()->type == 'admin'){
			$data = array('data'=>User::all()->where('type','user'));
		}
		else{
			abort(403);
		}
		return view('infoinven.anggota.listanggota')->with($data);
	}

	public function listanggotadetail($id)
	{
		if(\Auth::user()->type == 'admin'){
			$data = array('data'=>User::find($id));
		}
		else{
			abort(403);
		}
		return view('infoinven.anggota.listanggotadetail')->with($data);
	}

	public function listanggotadelete($id)
	{
		if(\Auth::user()->type == 'admin'){
			User::find($id)->delete();
		}
		else{
			abort(403);
		}
		return redirect(url('/list/anggota'));
	}

	public function listanggotaedit($id)
	{
		if(\Auth::user()->type == 'admin'){
			$data = array('data'=>User::find($id));
		}
		else{
			abort(403);
		}
		return view('infoinven.anggota.listanggotaedit')->with($data);
	}

	public function listanggotaupdate(Request $req)
	{
		$this->validate($req,[
			'name'=>'required|regex:/^[\pL\-]+$/u']);
		if(\Auth::user()->type == 'admin'){
			$data = array(
			'name' => \Input::get('name'),
			'jenisKelamin' => \Input::get('jeniskelamin'),
			'ttl' => \Input::get('ttl'),
			'alamat' => \Input::get('alamat'),
			'no_tlp' => \Input::get('no_tlp'),
		);
		\DB::table('users')->where('id', \Input::get('id'))->update($data);
		}
		else{
			abort(403);
		}
		return redirect(url('/list/anggota/'));
	}

	public function tambahanggota()
	{	
		if(\Auth::user()->type == 'admin'){
			return view('infoinven.anggota.tambahanggota');
		}
		else{
			abort(403);
		}
	}

	public function tambahanggotasave(Request $req)
	{
		$this->validate($req,[
			'username'=> 'required|unique:users',
			'name'=>'required|regex:/^[\pL\-]+$/u']);
		$post = new User;
		$post->name = \Input::get('name');
		$post->username = \Input::get('username');
		$post->password = \Hash::make(\Input::get('password'));
		$post->jeniskelamin = \Input::get('jeniskelamin');
		$post->ttl = \Input::get('ttl');
		$post->alamat = \Input::get('alamat');
		$post->no_tlp = \Input::get('no_tlp');

		$post->save();
		return redirect(url('/list/anggota'));
	}

	public function tambahprodukmasuk()
	{	
		$users = User::all();
		return view('infoinven.masuk.produkmasuk')->with('users',$users);
	}

	public function tambahprodukmasuksave()
	{
		$post = new ProdukMasuk;
		$post->kode = \Input::get('kode');
		$post->nama_produk = \Input::get('nama_produk');
		$post->info_produk = \Input::get('info_produk');
		$post->stok = \Input::get('stok');
		$post->harga_beli = \Input::get('harga_beli');
		$post->harga_jual = \Input::get('harga_jual');
		$post->username_pemasuk = \Input::get('username_pemasuk');

		$post->save();
		return redirect(url('/list/produk/masuk'));
	}

	public function listprodukmasuk(Request $r)
	{	
		if($r->input('cari')){
			$data = array('data'=>ProdukMasuk::where('kode','LIKE', '%'.$r->input('cari').'%')->orWhere('nama_produk','LIKE','%'.$r->input('cari').'%')->get());
		}
		else{
			$data = array('data'=>ProdukMasuk::all());

		}
		return view('infoinven.masuk.listprodukmasuk')->with($data);
	}

	public function listprodukmasukdetail($id)
	{	
		$data = array('data'=>ProdukMasuk::find($id));
		return view('infoinven.masuk.listprodukmasukdetail')->with($data);
	}

	public function listprodukmasukedit($id)
	{
		$data = array('data'=>ProdukMasuk::find($id));
		if($data['data']->username_pemasuk == \Auth::user()->username || \Auth::user()->type == 'admin'){
			return view('infoinven.masuk.listprodukmasukedit')->with($data);
		}
		else{
			abort(403);
		}
	}

	public function listprodukmasukupdate()
	{
		$data = array(
		'kode' => \Input::get('kode'),
		'nama_produk' => \Input::get('nama_produk'),
		'info_produk' => \Input::get('info_produk'),
		'stok' => \Input::get('stok'),
		'harga_beli' => \Input::get('harga_beli'),
		'harga_jual' => \Input::get('harga_jual'),
		);
		\DB::table('produk_masuks')->where('id', \Input::get('id'))->update($data);
		
		return redirect(url('/list/produk/masuk'));
	}

	public function listprodukmasukdelete($id)
	{
		$data = array('data'=>ProdukMasuk::find($id));
		if($data['data']->username_pemasuk == \Auth::user()->username || \Auth::user()->type == 'admin'){
			ProdukMasuk::find($id)->delete();
			return redirect(url('/list/produk/masuk'));
		}
		else{
			abort(403);
		}
	}



	//------
	public function tambahprodukkeluar()
	{	
		$users = User::all();
		if(\Auth::user()->type == 'admin'){
			$produkmasuks = ProdukMasuk::all();	
		}else{
			$produkmasuks = ProdukMasuk::where('username_pemasuk',\Auth::user()->username)->get();
		}
		return view('infoinven.keluar.produkkeluar')->with('users',$users)->with('produkmasuks',$produkmasuks);
	}

	public function tambahprodukkeluarsave()
	{
		$post = new ProdukKeluar;
		$post->kode = \Input::get('kode');
		$post->nama_produk = \Input::get('nama_produk');
		$post->info_produk = \Input::get('info_produk');
		$post->jumlah_keluar = \Input::get('jumlah_keluar');
		$post->username_pengeluar = \Input::get('username_pengeluar');

		$post->save();

		$post = ProdukMasuk::find(\Input::get('idProduk'));
		$post->stok = \Input::get('stok');
		$post->save();
		return redirect(url('/list/produk/keluar'));
	}


	public function listprodukkeluar(Request $k)
	{		
		if($k->input('cari')){
			$data = array('data'=>ProdukKeluar::where('kode','LIKE', '%'.$k->input('cari').'%')->orWhere('nama_produk','LIKE','%'.$k->input('cari').'%')->get());
		}
		else{
			$data = array('data'=>ProdukKeluar::all());

		}
		return view('infoinven.keluar.listprodukkeluar')->with($data);	
		
	


	}




//----pinjaman





public function tambahprodukpinjaman()
	{	
		$users = User::all();
		if(\Auth::user()){
			$produkmasuks = ProdukMasuk::all();	
		}else{
			$produkmasuks = ProdukMasuk::where('username_pemasuk',\Auth::user()->username)->get();
		}
		return view('infoinven.peminjaman.produkpinjaman')->with('users',$users)->with('produkmasuks',$produkmasuks);
	}
	public function tambahprodukpinjamansave()
	{
		$post = new ProdukPinjaman;
		$post->kode = \Input::get('kode');
		$post->nama_produk = \Input::get('nama_produk');
		$post->nama_peminjam = \Input::get('nama_peminjam');
		$post->info_produk = \Input::get('info_produk');
		$post->jumlah_pinjaman = \Input::get('jumlah_pinjaman');
	
		$post->username_pengeluar = \Input::get('username_pengeluar');

		$post->save();

		$post = ProdukMasuk::find(\Input::get('idProduk'));
		$post->stok = $post->stok-\Input::get('jumlah_pinjaman');
		$post->save();
		return redirect(url('/list/produk/pinjaman'));
	}	
		public function produkpinjamanupdate()
	{
		$data = array(
			'kode' => \Input::get('kode'),
			'nama_produk' => \Input::get('nama_produk'),
			'nama_peminjam' => \Input::get('nama_peminjam'),
			'info_produk' => \Input::get('info_produk'),		
			'jumlah_pinjaman' => \Input::get('jumlah_pinjaman'),
			'tanggal_pengembalian' => \Input::get('tanggal_pengembalian'),
			
		);
		\DB::table('produk_pinjamen')->where('id', \Input::get('id'))->update($data);
		return redirect(url('/list/produk/pinjaman'));
	}
	public function listprodukpinjamandelete($id)
	{
		$data = array('data'=>ProdukPinjaman::find($id));
		if($data['data']->username_pemasuk == \Auth::user()->username || \Auth::user()->type == 'admin'){
			ProdukPinjaman::find($id)->delete();
			return redirect(url('/list/produk/pinjaman'));
		}
		else{
			abort(403);
		}
	}


	public function listprodukdetail($id)
	{
		$data = array('data'=>ProdukPinjaman::find($id));
		return view('infoinven.peminjaman.listprodukpinjamdetail')->with($data);
	}
	public function listprodukpinjamedit($id)
	{
		$data = array('data'=>ProdukPinjaman::find($id));
		return view('infoinven.peminjaman.produkpinjamanedit')->with($data);
	}
	public function listprodukpinjaman(Request $p)
	{
				if($p->input('cari')){
			$data = array('data'=>ProdukPinjaman::where('kode','LIKE', '%'.$p->input('cari').'%')->orWhere('nama_produk','LIKE','%'.$p->input('cari').'%')->get());
		}
		else{
			$data = array('data'=>ProdukPinjaman::all());

		}
		return view('infoinven.peminjaman.listprodukpinjam')->with($data);	
		
	

		}
//-----

		//------ Report
		public function reportmasuk($id)
		{
			$data = array('data'=>ProdukMasuk::find($id));
			$pdf = PDF::loadView('infoinven.masuk.reportproduk', $data);
			return $pdf->download('invoice.pdf');
		}	
		// ---------







	public function profile()
	{
		return view('infoinven.profile');
	}

	public function profileedit($id)
	{
		$data = array('data'=>User::find($id));
		return view('infoinven.profileedit')->with($data);
	}

	public function profileupdate()
	{
		$data = array(
			'name' => \Input::get('name'),
			'jenisKelamin' => \Input::get('jeniskelamin'),
			'ttl' => \Input::get('ttl'),
			'alamat' => \Input::get('alamat'),
			'no_tlp' => \Input::get('no_tlp'),
		);
		\DB::table('users')->where('id', \Input::get('id'))->update($data);
		return redirect(url('/profile'));
	}

	public function ajaxprodukkeluar(Request $req){
		$produkkeluar = ProdukMasuk::find($req->id);
		return $produkkeluar;
	}

}

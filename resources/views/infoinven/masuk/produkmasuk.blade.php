@extends('infoinven.template')

@section('content')
@if(\Auth::check())
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Produk Masuk</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tambah Produk Masuk</div>
					<div class="panel-body">
						<div class="col-md-7">
							<form action="{{ url('tambah/produk/masuk/save') }}" method="POST" enctype="multipart/form-data">
                            <table class="table hovered" style="width: 100%">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <tr>
                                    <td>Kode</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="kode" id="kode" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="nama_produk" id="nama_produk" autocomplete="off" required>
                                            <input class="form-control" value="{{ Auth::user()->username }}" name="username_pemasuk" id="username_pemasuk" type="hidden" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                        <td>Jenis Produk</td>
                                    <td>                        
                                        <div class="input-control select">
                                            <select class="form-control" name="info_produk" id="info_produk"  required>
                                                <option>Baru</option>
                                                <option>Bekas</option>
                                                <option>Rusak</option>
                                                <option>Dll</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <input class="form-control" type="number" name="stok" id="stok" autocomplete="off" required>
                                            <span class="input-group-addon">Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input class="form-control" type="number" name="harga_beli" id="harga_beli" autocomplete="off" required>
                                            <span class="input-group-addon">/ Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga Jual</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input class="form-control" type="number" name="harga_jual" id="harga_jual" autocomplete="off"  required>
                                            <span class="input-group-addon">/ Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>Nama Pemasuk</td>
                                    <td>                        
                                        <div class="input-control select">
                                            <select class="form-control" name="nama_pemasuk" id="nama_pemasuk"  required>
                                                @foreach($users as $key => $user)
                                                    <option value="{{ $user->nama }}">{{ $user->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                </tr>  --> 
                            </table>
							<br>
                    		<div id="success"></div>
                    		<div class="row">
                        	<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
                   			</div>							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
@endif
@endsection
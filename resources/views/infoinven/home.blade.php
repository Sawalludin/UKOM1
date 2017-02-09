@extends('infoinven.template')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $produk_masuks }}</div>
							<div class="text-muted">Produk</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $users }}</div>
							<div class="text-muted">Anggota</div>
						</div>
					</div>
				</div>
			</div> 			
		 <div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked calendar blank"><use xlink:href="#stroked-calendar-blank"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $produk_pinjamen }}</div>
							<div class="text-muted">Peminjam</div>
						</div>
					</div>
				</div>
			</div> 
			 <div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $produk_keluars }}</div>
							<div class="text-muted">Produk Keluar</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

				<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Pengumuman</div>
					<div class="panel-body">
						<p>Bagi yang belum daftar dan mau minjam barang atau sebagainya harap hubungin admin  </p>
						<p>Terimakasih</p> <p>Salam : Admin</p>

</div>						
								</div>
							</fieldset>
						</form>
					</div>
				</div>
@if(Auth::check())

@endif
<!-- @if(\Auth::guest())
	<div class="row">
		<div class="col-md-8">
		<div class="panel panel-default">
			<div class="alert bg-primary" role="alert">
				<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg> Welcome to the Informasi Inventory</i></b> <a href="#" class="pull-right"></a>
			</div>
		</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-red">
				<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
				<div class="panel-body">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
@endif -->
	</div>	<!--/.main-->
@endsection
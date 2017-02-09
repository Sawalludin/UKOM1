<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Informasi Inventory</title>

<link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ url('/css/bootstrap-table.css') }}" rel="stylesheet">
<link href="{{ url('/css/styles.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<!--Icons-->
<script src="{{ url('/js/lumino.glyphs.js') }}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span>Informasi</span>Inventory</a>
				@if(Auth::check())
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						@if(Auth::user()->jeniskelamin=="Perempuan")
							<svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg>
						@else
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						@endif
								Welcome, {{ Auth::user()->name }}
							<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/profile">
									@if(Auth::user()->jeniskelamin=="Perempuan")
										<svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg>
									@else
										<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
									@endif
									Profile
								</a>
							</li>
							<li><a href="/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
				@endif
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<br><br>
		<ul class="nav menu">
			<li {{ Request::is('home') || Request::is('/') ? 'class=active' : '' }}><a href="/home"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Home</a></li>
			@if(\Auth::guest())
			<li {{ Request::is('list/produk') ? 'class=active' : '' }}>
				<a class="" href="/list/produk">
					<svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> List Produk 
				</a>
			</li>
			@endif
			<!-- <li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li> -->
			@if(\Auth::check())
			<li class="parent collapse {{ Request::is('tambah/produk/masuk') || Request::is('list/produk/masuk') ? 'active' : '' }}">
				<a data-toggle="collapse" href="#produkmasuk">
					<span><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Produk Masuk 
				</a>
				<ul class="children collapse" id="produkmasuk">
					<li>
						<a href="/tambah/produk/masuk">
							<svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Tambah Produk Masuk
						</a>
					</li>
					<li>
						<a class="" href="/list/produk/masuk">
							<svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> List Produk Masuk
						</a>
					</li>
				</ul>
			</li>


			<li class="parent collapse {{ Request::is('tambah/produk/keluar') || Request::is('list/produk/keluar') ? 'active' : '' }}">
				<a data-toggle="collapse" href="#produkkeluar">
					<span><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Produk Keluar 
				</a>
				<ul class="children collapse" id="produkkeluar">
					<li>
						<a href="/tambah/produk/keluar">
							<svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg> Tambah Produk Keluar
						</a>
					</li>
					<li>
						<a class="" href="/list/produk/keluar">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> List Produk Keluar
						</a>
					</li>
				</ul>
			</li>
						<li class="parent collapse {{ Request::is('tambah/produk/pinjaman') || Request::is('list/produk/pinjaman') ? 'active' : '' }}">
				<a data-toggle="collapse" href="#produkpinjaman">
					<span><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Produk Pinjaman 
				</a>
				<ul class="children collapse" id="produkpinjaman">
					<li>
						<a href="/tambah/produk/pinjaman">
							<svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Tambah Produk Pinjaman
						</a>
					</li>
					<li>
						<a class="" href="/list/produk/pinjaman">
							<svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> List Produk Pinjaman
						</a>
					</li>
				</ul>
			</li>
			
			@if(Auth::user()->type=="admin")
			<li class="parent collapse {{ Request::is('list/anggota') || Request::is('list/anggota/detail/{id}') || Request::is('tambah/anggota') ? 'active' : '' }}">
				<a data-toggle="collapse" href="#anggota">
					<span><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Anggota 
				</a>
				<ul class="children collapse" id="anggota">
					<li>
						<a class="" href="/tambah/anggota">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Anggota
						</a>
					</li>
					<li>
						<a href="/list/anggota">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> List Anggota
						</a>
					</li>
				</ul>
			</li>
			@endif
			@endif
			<li {{ Request::is('hubungi/admin') ? 'class=active' : '' }}>
				<a class="" href="/hubungi/admin">
					<svg class="glyph stroked mobile device"><use xlink:href="#stroked-mobile-device"/></svg> Hubungi Admin 
				</a>
			</li>
			@if(\Auth::guest())
			<li role="presentation" class="divider"></li>
			<li><a href="/login"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
			@endif
		</ul>

	</div><!--/.sidebar-->
		
	@yield('content')

	<script src="{{ url('/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('/js/chart.min.js') }}"></script>
	<script src="{{ url('/js/chart-data.js') }}"></script>
	<script src="{{ url('/js/easypiechart.js') }}"></script>
	<script src="{{ url('/js/easypiechart-data.js') }}"></script>
	<script src="{{ url('/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ url('/js/bootstrap-table.js') }}"></script>\
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
	@yield('script')
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

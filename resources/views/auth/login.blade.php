<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Informasi Inventory</title>

<link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ url('/css/styles.css') }}" rel="stylesheet">

<!--Icons-->
<script src="{{ url('/js/lumino.glyphs.js') }}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body style="background: url('/IMG_33228.png')">
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
				
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	
		
	<div class="col-sm-12 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		@if(null != $errors->all())
			<div id="errormsg" class="alert bg-danger col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" role="alert">
				<svg class="glyph stroked cancel" >
					<use xlink:href="#stroked-cancel"></use>
				</svg>
				@foreach($errors->all() as $error)
							{{$error}}
				@endforeach
				<a href="#" id="closeerror" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			</div>
		@endif


		
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
					<div class="panel-body" >
						<form role="form" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="username" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me">Remember Me
									</label>
								</div>
								<button class="btn btn-primary">Login</button>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>	<!--/.main-->

	<script src="{{ url('/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('/js/chart.min.js') }}"></script>
	<script src="{{ url('/js/chart-data.js') }}"></script>
	<script src="{{ url('/js/easypiechart.js') }}"></script>
	<script src="{{ url('/js/easypiechart-data.js') }}"></script>
	<script src="{{ url('/js/bootstrap-datepicker.js') }}"></script>
	<script>
		$('#calendar').datepicker({
		});

		$('#closeerror').click(function(e){
			e.preventDefault();
			$('#errormsg').hide();
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

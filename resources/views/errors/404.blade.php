<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Informasi Inventory - Error</title>

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
				
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-danger">
					<div class="panel-heading">
						404 Error
					</div>
					<div class="panel-body">
						<p><a href="/" class="btn btn-primary">Back To Home</a></p>
					</div>
				</div>
			</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
			
	

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

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
		
	@if(\Auth::check())
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Detail Produk Masuk</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
        </div><!--/.row-->
                
        
        
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $data->nama_produk }} - {{ $data->info_produk }}</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td>Kode</td><td>:</td>
                                    <td>{{ $data->kode }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Produk</td><td>:</td>
                                    <td>{{ $data->nama_produk }}</td>
                                </tr>
                                <tr>
                                    <td>Info Produk</td><td>:</td>
                                    <td>{{ $data->info_produk }}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td><td>:</td>
                                    <td>{{ $data->stok }} Pcs</td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td><td>:</td>
                                    <td>Rp. {{ number_format($data->harga_beli) }}/Pcs</td>
                                    
                                </tr>
                                <tr>
                                    <td>Harga Jual</td><td>:</td>
                                    <td>Rp. {{ number_format($data->harga_jual) }}/Pcs</td>
                                    
                                </tr>
                                <tr>
                                    <td>Username Pemasuk</td><td>:</td>
                                    <td>{{ $data->username_pemasuk }}</td>
                                </tr>
                            </table>
                            <br>
                            @if( $data->username_pemasuk == \Auth::user()->username || \Auth::user()->type == 'admin')
                                <a href="{{ url('/list/produk/masuk/edit/'.$data->id) }}"><div class="btn btn-primary">Edit</div></a>
                                <a href="{{ url('/list/produk/masuk/delete/'.$data->id) }}" onclick="return confirm('Yakin Hapus ?')"><div class="btn btn-default">Hapus</div></a>
                            @endif
                            <a href="{{ url('/list/produk/masuk/') }}"><div class="btn btn-primary">Back</div></a><br><br>
                        <script>
                            $(function () {
                                $('#hover, #striped, #condensed').click(function () {
                                    var classes = 'table';
                        
                                    if ($('#hover').prop('checked')) {
                                        classes += ' table-hover';
                                    }
                                    if ($('#condensed').prop('checked')) {
                                        classes += ' table-condensed';
                                    }
                                    $('#table-style').bootstrapTable('destroy')
                                        .bootstrapTable({
                                            classes: classes,
                                            striped: $('#striped').prop('checked')
                                        });
                                });
                            });
                        
                            function rowStyle(row, index) {
                                var classes = ['active', 'success', 'info', 'warning', 'danger'];
                        
                                if (index % 2 === 0 && index / 2 < classes.length) {
                                    return {
                                        classes: classes[index / 2]
                                    };
                                }
                                return {};
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->
@endif

	<script src="{{ url('/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('/js/chart.min.js') }}"></script>
	<script src="{{ url('/js/chart-data.js') }}"></script>
	<script src="{{ url('/js/easypiechart.js') }}"></script>
	<script src="{{ url('/js/easypiechart-data.js') }}"></script>
	<script src="{{ url('/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ url('/js/bootstrap-table.js') }}"></script>\
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>

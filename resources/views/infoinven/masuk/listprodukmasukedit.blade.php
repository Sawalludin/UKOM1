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
					<div class="panel-heading">Edit Produk Masuk</div>
					<div class="panel-body">
						<div class="col-md-7">
							<form action="{{ url('list/produk/masuk/edit/update') }}" method="POST" enctype="multipart/form-data">
                            <table class="table hovered" style="width: 100%">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <tr>
                                    <td>Kode</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="number" value="{{ $data->kode }}" name="kode">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="nama_produk" value="{{ $data->nama_produk }}">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Info Produk</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" name="info_produk" value="{{ $data->info_produk }}" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <input class="form-control" type="number" value="{{ $data->stok }}" name="stok">
                                            <span class="input-group-addon">Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input class="form-control" type="number" value="{{ $data->harga_beli }}" name="harga_beli">
                                            <span class="input-group-addon">/ Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga Jual</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input class="form-control" type="number" value="{{ $data->harga_jual }}" name="harga_jual">
                                            <span class="input-group-addon">/ Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>    
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ url('/list/produk/masuk/detail/'.$data->id) }}"><div class="btn btn-default" onclick="return confirm('Batal ?')">Batal</div></a>
                            </form>   
                            <br>   
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
@endsection
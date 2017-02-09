@extends('infoinven.template')

@section('content')
@if(\Auth::check())
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Produk Yang Dipinjam</li>
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
					<div class="panel-heading">Tambah Produk Yang Dipinjam</div>
					<div class="panel-body">
						<div class="col-md-9">
							<form action="{{ url('tambah/produk/pinjaman/save') }}" method="POST" enctype="multipart/form-data">
                            <table class="table hovered" style="width: 100%">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <tr>
                                    <td>Nama Produk</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <select class="form-control" id="pilihProduk" name="idProduk">
                                                <option disabled selected>Pilih Produk</option>
                                                @foreach($produkmasuks as $key => $produkmasuk)
                                                    <option value="{{ $produkmasuk->id }}">{{ $produkmasuk->nama_produk }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kode</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input id="kode" class="form-control" readonly type="text" name="kode" id="kode" autocomplete="off" required>
                                            <input id="namaproduk" class="form-control" readonly type="hidden" name="nama_produk" id="nama_produk" autocomplete="off" required>
                                            <input class="form-control" value="{{ Auth::user()->username }}" name="username_pengeluar" id="username_pengeluar" type="hidden" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                 <td>Nama Peminjam</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input id="nama_peminjam" class="form-control" type="text" name="nama_peminjam" id="nama_peminjam" autocomplete="off" required>
                                         
                                        </div>
                                    </td>
                                </tr>
                                
  
                                <tr>
                                    <td>Info Produk</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input id="info" class="form-control" name="info_produk" id="info_produk" type="text" autocomplete="off" required readonly>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <input id="stok" class="form-control"  readonly type="number" autocomplete="off" required>
                                            <span class="input-group-addon">Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Yang Dipinjam</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <input id="jumlah_pinjaman" class="form-control" type="number" name="jumlah_pinjaman" id="jumlah_pinjaman" autocomplete="off" required>
                                            <span class="input-group-addon">Pcs</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
 
                                            
                                      
                                <!-- <tr>
                                    <td>Nama Pengeluar</td>
                                    <td>                        
                                        <div class="input-control select">
                                            <select class="form-control" name="nama_pengeluar" id="nama_pengeluar"  required>
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

@section('script')
    <script type="text/javascript">

    $("#jumlahKeluar").keyup(function(){
        $("#stoksisa").val($("#stok").val() - $("#jumlahKeluar").val());
    });
    $("#pilihProduk").change(function(){
        $.ajax({
            'type': 'POST',
            'url': '/ajax/produk/keluar',
            'data': { id: $(this).val(), _token : '{{ csrf_token() }}' },
            success: function (data) {
                $("#kode").val(data.kode);
                $("#info").val(data.info_produk);
                $("#stok").val(data.stok);
                $("#namaproduk").val(data.nama_produk);
                $("#stoksisa").val($("#stok").val() - $("#jumlahKeluar").val());
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
    </script>
@endsection
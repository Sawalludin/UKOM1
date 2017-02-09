@extends('infoinven.template')

@section('content')
@if(Auth::user()->type=="admin")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tambah Anggota</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
                @if(count($errors->all()) > 0)
                <div class="alert bg-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <span>{{ $error }}</span><br>
                    @endforeach
                </div>
                @endif
				<div class="panel panel-default">
					<div class="panel-heading">Tambah Anggota</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="{{ url('tambah/anggota/save') }}" method="POST" enctype="multipart/form-data">
                            <table class="table hovered" style="width: 100%">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="name" id="name" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="username" name="username" id="username" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" name="password" id="password" type="password" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>                        
                                        <div class="input-control select">
                                            <select class="form-control" name="jeniskelamin" id="jeniskelamin"  required>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Tanggal Lahir</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="ttl" id="ttl" autocomplete="off" placeholder="Jakarta, 08 Agustus 1950" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat Lengkap</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <textarea class="form-control" type="text" name="alamat" id="alamat" autocomplete="off" required></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Telpon/HP</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="no_tlp" id="no_tlp" autocomplete="off"  required>
                                        </div>
                                    </td>
                                </tr>
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
@extends('infoinven.template')

@section('content')
@if(\Auth::check())
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Detail Produk Peminjaman</li>
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
                                    <td>Nama Peminjam</td><td>:</td>
                                    <td>{{ $data->nama_peminjam }}</td>
                                </tr>


                                <tr>
                                    <td>Info Produk</td><td>:</td>
                                    <td>{{ $data->info_produk }}</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Jumlah Yang Dipinjam</td><td>:</td>
                                    <td>{{ $data->jumlah_pinjaman }}/Pcs</td>
                                </tr>
                                 <tr>
                                    <td>Tanggal pengembalian</td><td>:</td>
                                    <td>{{ $data->tanggal_pengembalian }}</td>
                                </tr>
                                <tr>
                                    <td>Username Pengeluar</td><td>:</td>
                                    <td>{{ $data->username_pengeluar }}</td>
                                </tr>
                            </table>
                            <br>
                            @if( $data->username_pemasuk == \Auth::user()->username || \Auth::user()->type == 'admin')
                                <a href="{{ url('/list/produk/pinjam/edit/'.$data->id) }}"><div class="btn btn-primary">Edit</div></a>
                                <a href="{{ url('/list/produk/pinjam/delete/'.$data->id) }}" onclick="return confirm('Yakin Hapus ?')"><div class="btn btn-default">Hapus</div></a>
                            @endif
                            <a href="{{ url('/list/produk/pinjaman/') }}"><div class="btn btn-primary">Back</div></a><br><br>
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
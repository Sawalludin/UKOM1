@extends('infoinven.template')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Profile Anggota</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
        </div><!--/.row-->
                
        
        @if(Auth::check())
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }} Profile</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td>Nama</td><td>:</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Username</td><td>:</td>
                                    <td>{{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td><td>:</td>
                                    <td>{{ Auth::user()->jeniskelamin }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Tanggal Lahir</td><td>:</td>
                                    <td>{{ Auth::user()->ttl }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td><td>:</td>
                                    <td>{{ Auth::user()->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>No Telepon/HP</td><td>:</td>
                                    <td>{{ Auth::user()->no_tlp }}</td>
                                </tr>
                        </table>
                            <br>
                            <a href="{{ url('/profile/edit/'.Auth::user()->id) }}"><div class="btn btn-primary">Edit</div></a>
                            <a href="{{ url('/') }}"><div class="btn btn-default">Back</div></a><br><br>
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
        @endif
        
    </div><!--/.main-->
@endsection
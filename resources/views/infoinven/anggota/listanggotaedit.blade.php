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
                
        
        
        <div class="row">
            <div class="col-md-6">
            @if(count($errors->all()) > 0)
                <div class="alert bg-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <span>{{ $error }}</span><br>
                    @endforeach
                </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Edit {{ $data->name }} Profile</div>
                    <div class="panel-body">
                       <form action="{{ url('/list/anggota/edit/update') }}" method="POST">
                            <table class="table hovered" style="width: 100%">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                                <tr>
                                    <td>Nama Lengkap</td><td>:</td>
                                    <td><div class="input-control text full-size">
                                                <input class="form-control" type="text" value="{{ $data->name }}" name="name" autocomplete="off">
                                            </div></td>
                                </tr>
                                <tr>
                                    <td>Username</td><td>:</td>
                                    <td><div class="input-control text full-size">
                                                <input class="form-control" type="text" value="{{ $data->username }}" name="username" autocomplete="off" disabled>
                                            </div></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td><td>:</td>
                                    <td>
                                        <select class="form-control" name="jeniskelamin">
                                        @if($data->jeniskelamin=='Laki-laki')
                                            <option selected>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        @else
                                            <option>Laki-Laki</option>
                                            <option selected>Perempuan</option>
                                        @endif 
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Tanggal Lahir</td><td>:</td>
                                    <td><div class="input-control text" data-role="datepicker">
                                            <input class="form-control" type="text" name="ttl" value="{{ $data->ttl }}">                                                    
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td><td>:</td>
                                    <td><div class="input-control text" data-role="datepicker">
                                            <textarea class="form-control" type="text" name="alamat">{{ $data->alamat }}</textarea>                                                    
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Telepon/HP</td><td>:</td>
                                    <td><div class="input-control text" data-role="datepicker">
                                            <input class="form-control" type="text" name="no_tlp" value="{{ $data->no_tlp }}">                                                    
                                        </div>
                                    </td>
                                </tr>
                            </table>    
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ url('/list/anggota/detail/'.$data->id) }}"><div class="btn btn-default" onclick="return confirm('Batal ?')">Batal</div></a>
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
@endsection
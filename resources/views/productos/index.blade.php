@extends('layout.layout-admin')
@section('title', 'Licoreria')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Crear Productos</h3>
    </div>
    <form role="form">
        <div class="box-body">
            <div class="col-md-6">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="col-md-6">    
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="col-md-3 col-md-offset-4 col-xs-4 col-xs-offset-3">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div>
        </div>
    </form>
</div>
@endsection

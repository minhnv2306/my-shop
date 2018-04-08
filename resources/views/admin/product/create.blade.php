@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('contentheader_title', 'Create new product')
@section('here', 'Create new product')
@section('main-content')
    <div class="container-fluid spark-screen">
        {!! Form::open([
            'method' => 'POST',
            'route' => 'create-product',
            'enctype' => 'multipart/form-data'
         ]) !!}
        <div class="row">
            <!-- /.box -->

            <div class="col-xs-6">

                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <input type="file" name="file" style="padding-bottom: 30px">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </div><!--table-responsive-->

            </div>
        </div>
        <!-- /.box -->
        {!! Form::close() !!}
    </div>
@endsection
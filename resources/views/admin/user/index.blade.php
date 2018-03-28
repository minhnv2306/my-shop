@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Users manager')
@section('here', 'Users manager')
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">

                            <div class="pull-right" style="padding-right: 15px">
                                <a class="btn btn-primary" href="#">
                                    <i class="fa fa-plus"></i> {{trans('user.create')}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="list-cert"
                                   class="table no-margin data_table table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>{{trans('user.table.id')}}</th>
                                    <th>{{trans('user.table.name')}}</th>
                                    <th>{{trans('user.table.created_at')}}</th>
                                    <th>{{trans('user.table.action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->first_name . ' ' . $user->last_name}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="loading"></div>
                        </div><!--table-responsive-->

                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function () {
            $('#user-manager').addClass('active');
        })
    </script>
@endsection
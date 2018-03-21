@extends('layouts.admin')
@section('content')
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
                            <tr>
                                <td>1</td>
                                <td>minhnv</td>
                                <td>20-03-2018 15:08</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>dungdv</td>
                                <td>20-03-2018 15:08</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>minh1101@gmail.com</td>
                                <td>20-03-2018 15:08</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>minhnv1</td>
                                <td>20-03-2018 15:08</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
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
@endsection
@section('script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/plugins/datatables/jquery.dataTables.js"></script>

    <script>
        $('.data_table').DataTable();
    </script>
@endsection
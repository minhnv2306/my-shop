@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-info">
                <div class="box-header">
                    <div class="row">

                        <div class="pull-right" style="padding-right: 15px">
                            <a class="btn btn-primary" href="{{route('products.create')}}">
                                <i class="fa fa-plus"></i> {{trans('product.create')}}
                            </a>
                            <!-- Trigger the modal with a button -->

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Create product</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" >
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Price ($):</label>
                                                <input type="password" class="form-control" id="pwd">
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Color:</label>
                                                <br/>
                                                <label class="radio-inline"><input type="radio" name="optradio">Black</label>
                                                <label class="radio-inline"><input type="radio" name="optradio">White</label>
                                                <label class="radio-inline"><input type="radio" name="optradio">Red</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Size:</label>
                                                <br/>
                                                <label class="radio-inline"><input type="radio" name="optradio">S</label>
                                                <label class="radio-inline"><input type="radio" name="optradio">M</label>
                                                <label class="radio-inline"><input type="radio" name="optradio">L</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Fit type:</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Man</option>
                                                    <option>Women</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Avatar:</label>
                                                <input type="file" accept="image/*" onchange="preview_image(event)">
                                                <img id="output_image" width="140px"/>
                                                <script type='text/javascript'>
                                                    function preview_image(event)
                                                    {
                                                        var reader = new FileReader();
                                                        reader.onload = function()
                                                        {
                                                            var output = document.getElementById('output_image');
                                                            output.src = reader.result;
                                                        }
                                                        reader.readAsDataURL(event.target.files[0]);
                                                    }
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Image 1:</label>
                                                <input type="file" accept="image/*" onchange="preview_image1(event)">
                                                <img id="output_image1" width="140px"/>
                                                <script type='text/javascript'>
                                                    function preview_image1(event)
                                                    {
                                                        var reader = new FileReader();
                                                        reader.onload = function()
                                                        {
                                                            var output = document.getElementById('output_image1');
                                                            output.src = reader.result;
                                                        }
                                                        reader.readAsDataURL(event.target.files[0]);
                                                    }
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Image 2:</label>
                                                <input type="file" accept="image/*" onchange="preview_image2(event)">
                                                <img id="output_image2" width="140px"/>
                                                <script type='text/javascript'>
                                                    function preview_image2(event)
                                                    {
                                                        var reader = new FileReader();
                                                        reader.onload = function()
                                                        {
                                                            var output = document.getElementById('output_image2');
                                                            output.src = reader.result;
                                                        }
                                                        reader.readAsDataURL(event.target.files[0]);
                                                    }
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Image 3:</label>
                                                <input type="file" accept="image/*" onchange="preview_image3(event)">
                                                <img id="output_image3" width="140px"/>
                                                <script type='text/javascript'>
                                                    function preview_image3(event)
                                                    {
                                                        var reader = new FileReader();
                                                        reader.onload = function()
                                                        {
                                                            var output = document.getElementById('output_image3');
                                                            output.src = reader.result;
                                                        }
                                                        reader.readAsDataURL(event.target.files[0]);
                                                    }
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Image 4:</label>
                                                <input type="file" accept="image/*" onchange="preview_image4(event)">
                                                <img id="output_image4" width="140px"/>
                                                <script type='text/javascript'>
                                                    function preview_image4(event)
                                                    {
                                                        var reader = new FileReader();
                                                        reader.onload = function()
                                                        {
                                                            var output = document.getElementById('output_image4');
                                                            output.src = reader.result;
                                                        }
                                                        reader.readAsDataURL(event.target.files[0]);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Create</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
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

    <script>
        $('.data_table').DataTable();
    </script>
@endsection
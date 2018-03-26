@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('contentheader_title', 'Create new product')
@section('here', 'Create new product')
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'products.store',
                            'enctype' => 'multipart/form-data'
                        ]) !!}
                        <div class="table-responsive">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                            </div>

                            <div class="form-group" style="width: 20%">
                                <label for="price">Price ($):</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Color:</label>
                                <br/>
                                @foreach(\App\Models\Product::getColor() as $key=>$value)
                                    <label class="checkbox-inline"><input type="checkbox" name="color{{$key}}" value="{{$value}}"> {{$value}}</label>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="sel1">Size:</label>
                                <br/>
                                @foreach(\App\Models\Product::getSize() as $key=>$value)
                                    <label class="checkbox-inline"><input type="checkbox" name="size{{$key}}" value="{{$value}}"> {{$value}}</label>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="sel1">Type:</label>
                                <select class="form-control" id="sel1" name="made">
                                    <option value="Imported">Imported</option>
                                    <option value="Domestic">Domestic</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Cotton:</label>
                                <select class="form-control" id="sel1" name="cotton">
                                    <option value="100%">100%</option>
                                    <option value="80%">80%</option>
                                    <option value="50%">50%</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="comment">Machine:</label>
                                <textarea class="form-control" rows="5" id="comment" name="machine">{{old('machine')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Note 1:</label>
                                <textarea class="form-control" rows="5" id="comment" name="note_1">{{old('note_1')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Note 2:</label>
                                <textarea class="form-control" rows="5" id="comment" name="note_2">{{old('note_2')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Note 3:</label>
                                <textarea class="form-control" rows="5" id="comment" name="note_3">{{old('note_3')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Avatar:</label>
                                <input type="file" accept="image/*" onchange="preview_image(event)" name="avatar">
                                <img id="output_image" width="140px"/>
                                <script type='text/javascript'>
                                    function preview_image(event) {
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            var output = document.getElementById('output_image');
                                            output.src = reader.result;
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Image 1:</label>
                                <input type="file" accept="image/*" onchange="preview_image1(event)" name="image_1">
                                <img id="output_image1" width="140px"/>
                                <script type='text/javascript'>
                                    function preview_image1(event) {
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            var output = document.getElementById('output_image1');
                                            output.src = reader.result;
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Image 2:</label>
                                <input type="file" accept="image/*" onchange="preview_image2(event)" name="image_2">
                                <img id="output_image2" width="140px"/>
                                <script type='text/javascript'>
                                    function preview_image2(event) {
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            var output = document.getElementById('output_image2');
                                            output.src = reader.result;
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Image 3:</label>
                                <input type="file" accept="image/*" onchange="preview_image3(event)" name="image_3">
                                <img id="output_image3" width="140px"/>
                                <script type='text/javascript'>
                                    function preview_image3(event) {
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            var output = document.getElementById('output_image3');
                                            output.src = reader.result;
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Image 4:</label>
                                <input type="file" accept="image/*" onchange="preview_image4(event)" name="image_4">
                                <img id="output_image4" width="140px"/>
                                <script type='text/javascript'>
                                    function preview_image4(event) {
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            var output = document.getElementById('output_image4');
                                            output.src = reader.result;
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                        </div>
                        <button class="btn btn-primary">Create</button>
                        {!! Form::close() !!}
                    </div><!--table-responsive-->

                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
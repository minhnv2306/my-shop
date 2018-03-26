@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('contentheader_title', 'Show product')
@section('here', 'Show product')

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
                            'method' => 'PUT',
                            'route' => ['products.update', 'product' => $product->id],
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="table-responsive">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                            </div>

                            <div class="form-group" style="width: 20%">
                                <label for="price">Price ($):</label>
                                <input type="number" class="form-control" id="price" name="price"
                                       value="{{$product->price}}">
                            </div>
                            <div class="form-group" style="width: 20%">
                                <label for="price">Number:</label>
                                <input type="number" class="form-control" id="price" name="number"
                                       value="{{$product->number}}">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Color:</label>
                                <br/>

                                <label class="checkbox-inline"><input type="checkbox" name="color1" value="black"
                                            {{checkRadio('Black', $colors) }}>Black</label>
                                <label class="checkbox-inline"><input type="checkbox" name="color2" value="white"
                                            {{checkRadio('White', $colors)}}>White</label>
                                <label class="checkbox-inline"><input type="checkbox" name="color3" value="red"
                                            {{checkRadio('Red', $colors)}}>Red</label>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Size:</label>
                                <br/>
                                <label class="checkbox-inline"><input type="checkbox" name="size1" value="S"
                                            {{checkRadio('S', $sizes) }}>S</label>
                                <label class="checkbox-inline"><input type="checkbox" name="size2" value="M"
                                            {{checkRadio('M', $sizes) }}>M</label>
                                <label class="checkbox-inline"><input type="checkbox" name="size3" value="L"
                                            {{checkRadio('L', $sizes) }}>L</label>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Type:</label>
                                <select class="form-control" id="sel1" name="made">
                                    {!!  \App\Helper\DataHelper::genOptionValues(\App\Models\Product::getMade(), $product->made) !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Cotton:</label>
                                <select class="form-control" id="sel1" name="cotton">
                                    {!!  \App\Helper\DataHelper::genOptionValues(\App\Models\Product::getCotton(), $product->cotton) !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="comment">Machine:</label>
                                <textarea class="form-control" rows="5" id="comment"
                                          name="machine">{{$product->machine}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Note 1:</label>
                                <textarea class="form-control" rows="5" id="comment"
                                          name="note_1">{{$product->note_1}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Note 2:</label>
                                <textarea class="form-control" rows="5" id="comment"
                                          name="note_2">{{$product->note_2}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Note 3:</label>
                                <textarea class="form-control" rows="5" id="comment"
                                          name="note_3">{{$product->note_3}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Avatar:</label>
                                <img src="{{getLinkImage($product->avatar)}}" width="120px" height="120px">
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
                                @if(!empty($product->image_1))
                                    <img src="{{getLinkImage($product->image_1)}}" width="120px" height="120px">
                                @endif
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
                                @if(!empty($product->image_2))
                                    <img src="{{getLinkImage($product->image_2)}}" width="120px" height="120px">
                                @endif
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
                                @if(!empty($product->image_3))
                                    <img src="{{getLinkImage($product->image_3)}}" width="120px" height="120px">
                                @endif
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
                                @if(!empty($product->image_4))
                                    <img src="{{getLinkImage($product->image_4)}}" width="120px" height="120px">
                                @endif
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
                        <button class="btn btn-primary">Update</button>
                        {!! Form::close() !!}
                    </div><!--table-responsive-->

                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
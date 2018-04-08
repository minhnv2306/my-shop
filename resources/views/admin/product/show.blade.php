@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('contentheader_title', 'Show product')
@section('here', 'Show product')

@section('main-content')
    <div class="container-fluid spark-screen">
        {!! Form::open([
            'method' => 'PUT',
            'route' => ['products.update', 'product' => $product->id],
            'enctype' => 'multipart/form-data',
        ]) !!}
        <div class="row">
            <div class="col-xs-6">
                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
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
                            <div class="form-group">
                                <label for="comment">Description:</label>
                                <textarea class="form-control" rows="5" id="comment"
                                          name="description">{{$product->description}}</textarea>
                            </div>
                        </div>
                    </div><!--table-responsive-->

                </div>
            </div>
            <!-- /.box -->

            <div class="col-xs-6">

                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="sel1">Color for men:</label>
                            <br/>
                            @foreach(\App\Models\Product::getColor() as $key=>$value)
                                <label class="checkbox-inline" style="width: 120px; margin-left: 20px">
                                    <input type="checkbox" name="colors_men[]" value="{{$value}}" {{checkRadio($value, $colors_men)}}> {{$value}}
                                </label>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="sel1">Color for woman:</label>
                            <br/>
                            @foreach(\App\Models\Product::getColor() as $key=>$value)
                                <label class="checkbox-inline" style="width: 120px; margin-left: 20px">
                                    <input type="checkbox" name="colors_women[]" value="{{$value}}" {{checkRadio($value, $colors_women)}}> {{$value}}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div><!--table-responsive-->

            </div>
        </div>
        <!-- /.box -->
        <div class="row">

            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div class="form-group">
                                <label for="sel1">Image:</label>
                                <br/>
                                <img src="{{($product->avatar)}}" width="18%">
                                @if(!empty($product->image_1))
                                    <img src="{{($product->image_1)}}" width="18%">
                                @endif
                                @if(!empty($product->image_2))
                                    <img src="{{($product->image_2)}}" width="18%">
                                @endif
                                @if(!empty($product->image_3))
                                    <img src="{{($product->image_3)}}" width="18%">
                                @endif
                                @if(!empty($product->image_4))
                                    <img src="{{($product->image_4)}}" width="18%">
                                @endif
                            </div>
                        </div>
                    </div><!--table-responsive-->

                </div>
            </div>
        </div>
        <button class="btn btn-primary">Update</button>
        {!! Form::close() !!}
    </div>
@endsection
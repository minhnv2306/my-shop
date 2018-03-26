@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('contentheader_title', 'Product manager')
@section('here', 'Product manager')
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">

                            <div class="pull-right" style="padding-right: 15px">
                                <a class="btn btn-primary" href="{{route('products.create')}}">
                                    <i class="fa fa-plus"></i> {{trans('product.create')}}
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
                                    <th>{{trans('product.table.id')}}</th>
                                    <th>{{trans('product.table.name')}}</th>
                                    <th>{{trans('product.table.avatar')}}</th>
                                    <th>{{trans('product.table.price')}}</th>
                                    <th>{{trans('product.table.image')}}</th>
                                    <th>{{trans('product.table.color')}}</th>
                                    <th>{{trans('product.table.size')}}</th>
                                    <th>{{trans('product.table.action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>
                                            <img src="{{getLinkImage($product->avatar)}}" width="120px" height="120px">
                                        </td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            @for($i = 1; $i < 5; $i++)
                                                <?php $index = 'image_' . $i; ?>
                                                @if(!empty($product[$index]))
                                                    <img src="{{getLinkImage($product[$index])}}" width="120px"
                                                         height="120px">
                                                @endif
                                            @endfor

                                        </td>
                                        <td>
                                            <?php $colors = \App\Models\Product_color::where('product_id', $product->id)->get(['color_name'])?>
                                            @foreach($colors as $color)
                                                {{$color->color_name . ', '}}
                                            @endforeach
                                        </td>
                                        <td>
                                            <?php $colors = \App\Models\Product_size::where('product_id', $product->id)->get(['size'])?>
                                            @foreach($colors as $color)
                                                {{$color->size . ', '}}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{route('products.show', ['product' => $product->id])}}"
                                               class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
            $('#product-manager').addClass('active');
        })
    </script>
@endsection
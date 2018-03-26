@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Reviews manager')
@section('here', 'Review manager')
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
                        <div class="table-responsive">
                            <table id="list-cert"
                                   class="table no-margin data_table table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>{{trans('review.table.id')}}</th>
                                    <th>{{trans('review.table.rate')}}</th>
                                    <th>{{trans('review.table.comment')}}</th>
                                    <th>{{trans('review.table.product')}}</th>
                                    <th>{{trans('review.table.author')}}</th>
                                    <th>{{trans('review.table.email')}}</th>
                                    <th>{{trans('review.table.created_at')}}</th>
                                    <th>{{trans('review.table.action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reviews as $review)
                                    <tr>
                                        <td>{{$review->id}}</td>
                                        <td>
                                            @for($i = 0; $i < $review->rating; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </td>
                                        <td>{{$review->comment}}</td>
                                        <td>
                                            <!-- Trigger the modal with a button -->
                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#product{{$review->id}}">
                                                {{$review->product->name}}
                                            </button>

                                            <!-- Modal -->
                                            <div id="product{{$review->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Product Detail</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="usr">Name:</label>
                                                                <input type="text" class="form-control" id="usr" disabled value="{{$review->product->name}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <img src="{{getLinkImage($review->product->avatar)}}" width="20%">
                                                                @if (!empty($review->product->image_1))
                                                                    <img src="{{getLinkImage($review->product->image_1)}}" width="20%">
                                                                @endif
                                                                @if (!empty($review->product->image_2))
                                                                    <img src="{{getLinkImage($review->product->image_2)}}" width="20%">
                                                                @endif
                                                                @if (!empty($review->product->image_3))
                                                                    <img src="{{getLinkImage($review->product->image_3)}}" width="20%">
                                                                @endif
                                                                @if (!empty($review->product->image_4))
                                                                    <img src="{{getLinkImage($review->product->image_4)}}" width="20%">
                                                                @endif

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="usr">Price:</label>
                                                                <input type="text" class="form-control" id="usr" disabled value="{{$review->product->price . '$'}}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="{{route('products.show', ['product_id' => $review->product->id])}}" class="btn btn-primary">Detail</a>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$review->author}}</td>
                                        <td>{{$review->email}}</td>
                                        <td>{{$review->created_at}}</td>
                                        <td>
                                            @if($review->approved == 0)
                                                <a href="{{route('reviews.approved', ['review_id' => $review->id])}}"
                                                   class="btn btn-primary btn-xs">
                                                    <i class="fa fa-pencil"></i> Approved
                                                </a>
                                            @else
                                                <a href="{{route('reviews.hide', ['review_id' => $review->id])}}"
                                                   class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i> Hide
                                                </a>
                                            @endif
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
            $('#rate-manager').addClass('active');
        })
    </script>
@endsection
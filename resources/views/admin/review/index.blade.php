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
                                <th>{{trans('review.table.id')}}</th>
                                <th>{{trans('review.table.rate')}}</th>
                                <th>{{trans('review.table.comment')}}</th>
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
@endsection
@section('script')

@endsection
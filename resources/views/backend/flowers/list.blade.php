@extends('backend.layouts.master')
@section('title', "Flower list")
@section('content')
    <div class="content">
        <div class="row">
            @include('backend.layouts.search', ['queries' => $queries])
            @if (!count($flowers))
                <div class="alert alert-info m-auto w-100">Không có hoa nào trong cơ sở dữ liệu. <a href="{{route('admin.flowers.list')}}" class="text-light font-weight-bold">Quay lại trang chủ</a></div>
            @else
                <div class="col-md-12 row">
                    @foreach($flowers as $flower)
                        <div class="col-xl-4 col-lg-6 position-relative item-flower">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{str_limit($flower->name, $limit = 20, $end = '...')}}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul id="tabs" class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="tab"
                                                       href="#home{{$flower->id}}" role="tab" aria-expanded="true"
                                                       aria-selected="true">Tổng quan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile{{$flower->id}}"
                                                       role="tab" aria-expanded="false" aria-selected="false">Thông điệp</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#messages{{$flower->id}}"
                                                       role="tab" aria-expanded="false" aria-selected="false">Chi tiết</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="my-tab-content" class="tab-content text-center" style="height: 300px;">
                                        <div class="tab-pane active show" id="home{{$flower->id}}" role="tabpanel"
                                             aria-expanded="true">
                                            <div class=" position-relative">
                                                <img src="{{$flower->image?asset('images/'.$flower->image):asset('assets/admin/assets/img/image_placeholder.jpg')}}"
                                                     alt="" style="height: 250px;">
                                                {{--<div class="position-absolute w-100" style="bottom: 0px;left: 0px;">--}}
                                                {{--<div class="btn btn-danger w-100 m-0 rounded-bottom p-1"--}}
                                                {{--style="background-color: rgba(15,15,15,.5)">--}}
                                                {{--<div class="row">--}}
                                                {{--<div class="col-md-6 h5 m-0">{{number_format($flower->price)}}--}}
                                                {{--đ--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-6 h5 m-0">SL:--}}
                                                {{--<strong>{{$flower->quantity}}</strong>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                            {{--<p class="mt-2">{!! $flower->message?str_limit(strip_tags($flower->message), $limit = 50, $end = '...'):"Không có thông điệp." !!}</p>--}}
                                        </div>

                                        <div class="tab-pane" id="profile{{$flower->id}}" role="tabpanel"
                                             aria-expanded="false">
                                            <p>{!! $flower->message?:"Không có thông điệp." !!}</p>
                                        </div>
                                        <div class="tab-pane" id="messages{{$flower->id}}" role="tabpanel"
                                             aria-expanded="false">
                                            {{--<p>Thông tin chi tiết đang được cập nhật</p>--}}
                                            <p>Tên hoa: <strong>{{$flower->name}}</strong></p>
                                            <p>Giá: <strong>{{number_format($flower->price)}}đ</strong></p>
                                            <p>Số lượng: <strong>{{$flower->quantity}}</strong></p>
                                            <p>Thể loại:
                                                @foreach ($flower->categories->load('category') as $key => $category)
                                                    @if ($key)
                                                        ,
                                                    @endif
                                                    <strong>{{($category->category->cate_name)}}</strong>
                                                @endforeach
                                            </p>
                                            <p>Giảm giá: <strong>{{$flower->sale}} </strong></p>
                                            <p>Người đăng: <strong>{{$flower->admin->name}}</strong></p>
                                            <p>Ngày tạo: <strong>{{$flower->created_at}}</strong></p>
                                            <p>Ngày sửa: <strong>{{$flower->updated_at}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute" style="top: 0.2rem;right: 1.45rem;">

                                <button class="form-check btn {!! $flower->show?'btn-primary':'' !!} btn-icon btn-sm trigger-change-status">
                                    <i class="fa fa-check " {!! $flower->show?'':'style="display: none"' !!}></i>
                                    <input class="form-check-input change-show-status" type="checkbox"
                                           {{$flower->show?'checked':''}} data-id="{{$flower->id}}">
                                </button>

                                <a href="{{route('admin.flowers.edit', $flower->id)}}" rel="tooltip"
                                   class="btn btn-success btn-icon btn-sm btn-edit" data-original-title="" title="">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm btn-remove"
                                        data-id="{{$flower->id}}" title="">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="d-flex justify-content-center border-top pt-3">
            {{$flowers->appends($queries)->links()}}
        </div>
    </div>
@stop

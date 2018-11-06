@extends('backend.layouts.master')

@section('style')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@stop

@section('content')
    <div class="content">
        <form method="post" action="{{route('admin.flowers.update')}}" class="form-horizontal" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Chỉnh sửa hoa</h4>
                        </div>
                        <div class="card-body ">
                            @csrf()
                            <input type="text" name="id" class="form-control" value="{{$flower->id}}" hidden>
                            <div class="row">

                                @if ($errors->has('name'))
                                    <div class="text-danger col-md-12 offset-md-2">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                                <label class="col-sm-2 col-form-label">Tên hoa</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="{{old('name', $flower->name)}}">
                                        {{--<span class="form-text">A block of help text that breaks onto a new line.</span>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @if ($errors->has('message'))
                                    <div class="text-danger col-md-12 offset-md-2">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </div>
                                @endif
                                <label class="col-sm-2 col-form-label">Thông điệp</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <textarea type="text" name="message"
                                                  class="form-control">{{old('message', $flower->message)}}</textarea>
                                        {{--<span class="form-text">A block of help text that breaks onto a new line.</span>--}}
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('saleoff'))
                                <div class="text-danger col-md-12 offset-md-2 p-0">
                                    <strong>{{ $errors->first('saleoff') }}</strong>
                                </div>
                            @endif
                            @if ($errors->has('price'))
                                <div class="text-danger col-md-12 offset-md-2 p-0">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </div>
                            @endif
                            @if ($errors->has('quantity'))
                                <div class="text-danger col-md-12 offset-md-2 p-0">
                                    <strong>{{ $errors->first('quantity') }}</strong>
                                </div>
                            @endif
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Giảm giá</label>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="saleoff" class="form-control"
                                               value="{{old('saleoff', $flower->saleoff)}}" placeholder="VD: 0.1, 0.15,..." step="0.01">

                                    </div>
                                </div>
                                <label class="col-sm-2 col-form-label">Giá</label>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="price" class="form-control" value="{{old('price', $flower->price)}}">

                                    </div>
                                </div>
                                <label class="col-sm-2 col-form-label">Số lượng</label>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="quantity" class="form-control"
                                               value="{{old('quantity', $flower->quantity)}}">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10 checkbox-radios">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" name="show"
                                                   type="checkbox" {{$flower->show?'checked':''}}>
                                            <span class="form-check-sign"></span>
                                            Hiển thị
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Chỉnh sửa hoa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">Hình ảnh</h4>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-12 m-auto">
                                    @if ($errors->has('image'))
                                        <div class="text-danger col-md-12">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </div>
                                    @endif
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{$flower->image?asset('images/'.$flower->image):asset('assets/admin/assets/img/image_placeholder.jpg')}}" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                          <span class="fileinput-new">Chọn ảnh</span>
                                          <span class="fileinput-exists">Thay đổi</span>
                                          <input type="file" name="image" accept="image/*">
                                        </span>
                                            <a href="#" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> Loại bỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
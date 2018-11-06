@extends('backend.layouts.master')
@section('title', "Shippers")
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Danh sách shipper</h4>
                        <div class="row">
                            <div class="col-md-10 row no-gutters">
                                <form action="" class="m-0 d-flex justify-content-around align-items-center w-100">
                    <span class="btn-group bootstrap-select m-0 d-flex align-items-center col-md-3">
                       <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round"
                               title="Sắp xếp theo" tabindex="-98" id="paginate" name="paginate">
                          <option class="bs-title-option" value="">Phân trang</option>
                          <option value="1" {{isset($queries['paginate'])?$queries['paginate'] == '1'?'selected':'':''}}>1 item / page</option>
                          <option value="5" {{isset($queries['paginate'])?$queries['paginate'] == '5'?'selected':'':''}}>5 items / page</option>
                          <option value="5" {{isset($queries['paginate'])?$queries['paginate'] == '20'?'selected':'':''}}>20 items / page</option>
                          <option value="50" {{isset($queries['paginate'])?$queries['paginate'] == '50'?'selected':'':''}}>50 items / page</option>
                          <option value="100" {{isset($queries['paginate'])?$queries['paginate'] == '100'?'selected':'':''}}>100 items / page</option>
                       </select>
                    </span>
                    <span class="btn-group bootstrap-select m-0 d-flex align-items-center col-md-3">
                       <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round"
                               title="Sắp xếp theo" tabindex="-98" id="sort" name="sort">
                          <option class="bs-title-option" value="" >Sắp xếp theo</option>
                          <option value="id" {{isset($queries['sort'])?$queries['sort'] == 'id'?'selected':'':''}}>ID</option>
                          <option value="name" {{isset($queries['sort'])?$queries['sort'] == 'name'?'selected':'':''}}>Tên</option>
                          <option value="status" {{isset($queries['sort'])?$queries['sort'] == 'status'?'selected':'':''}}>Trạng thái</option>
                          <option value="email" {{isset($queries['sort'])?$queries['sort'] == 'email'?'selected':'':''}}>Email</option>
                          <option value="type" {{isset($queries['sort'])?$queries['sort'] == 'type'?'selected':'':''}}>Kiểu</option>
                          <option value="created_at" {{isset($queries['sort'])?$queries['sort'] == 'created_at'?'selected':'':''}}>Thời gian tạo</option>
                          <option value="updated_at" {{isset($queries['sort'])?$queries['sort'] == 'updated_at'?'selected':'':''}}>Thời gian sửa</option>
                       </select>
                    </span>
                    <span class="input-group no-border m-0 col-md-6">
                        <input type="text" value="{{isset($queries['search'])?$queries['search']:''}}"
                            class="form-control" placeholder="Search..." name="search">
                          <div class="input-group-append">
                             <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                             </div>
                          </div>
                        <button type="submit" hidden></button>
                    </span>
                        </form>
                    </div>
                        <div class="col-md-2 m-auto pr-5">
                            <a href="{{route('admin.shippers.add')}}" class="btn btn-success w-50 pull-right">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-hover" style="overflow: hidden;">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>
                                        Tên
                                    </th>
                                    <th>
                                        Số điện thoại
                                    </th>
                                    <th>
                                        Thời gian tạo
                                    </th>
                                    <th>
                                        Thời gian sửa
                                    </th>
                                    <th>
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (!count($shippers))
                                    <tr>
                                        <td class="text-center" colspan="10">Không có shipper nào trong cơ sở dữ
                                            liệu
                                        </td>
                                    </tr>
                                @endif
                                @foreach($shippers as $shipper)
                                    <tr>
                                        <td class="text-center">
                                            {{$shipper->id}}
                                        </td>
                                        <td>
                                            {{$shipper->shipper_name}}
                                        </td>
                                        <td>
                                            {{$shipper->shipper_phone}}
                                        </td>
                                        <td>
                                            {{$shipper->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            {{$shipper->updated_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <a href="#" rel="tooltip"
                                               class="btn btn-{{$shipper->status?'primary':'success'}} btn-icon btn-sm change-saler-status" data-id="{{$shipper->id}}">
                                                <i class="fa {{$shipper->status?'fa-minus':'fa-check'}}"></i>
                                            </a>
                                            <a href="{{route('admin.shippers.edit', $shipper->id)}}" rel="tooltip"
                                               class="btn btn-success btn-icon btn-sm btn-edit" data-original-title=""
                                               title="">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="button" rel="tooltip"
                                                    class="btn btn-danger btn-icon btn-sm btn-remove-shipper
"
                                                    data-id="{{$shipper->id}}" title="">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer m-auto">
                        {{$shippers->appends($queries)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
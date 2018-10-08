@extends('backend.layouts.master')
@section('title', "Salers")
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Danh sách saler</h4>
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
                                        Email
                                    </th>
                                    <th>
                                        Avatar
                                    </th>
                                    <th>
                                        Trạng thái
                                    </th>
                                    <th>
                                        Địa chỉ
                                    </th>
                                    <th>
                                        Kiểu tài khoản
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
                                @if (!count($salers))
                                    <tr>
                                        <td class="text-center" colspan="10">Không có tài khoản nào trong cơ sở dữ
                                            liệu
                                        </td>
                                    </tr>
                                @endif
                                @foreach($salers as $saler)
                                    <tr>
                                        <td class="text-center">
                                            {{$saler->id}}
                                        </td>
                                        <td>
                                            {{$saler->name}}
                                        </td>
                                        <td>
                                            {{$saler->email}}
                                        </td>
                                        <td width="5vw">
                                            <img src="{{asset('backend/img/faces/ayo-ogunseinde-2.jpg')}}"/>
                                        </td>
                                        <td style="width: 10%;" class="{{$saler->status?'text-success':'text-danger'}}" id="saler-status">
                                            {{$saler->name_status}}
                                        </td>
                                        <td style="width: 10%;">
                                            {{$saler->location ?? "Không có"}}
                                        </td>
                                        <td>
                                            {{$saler->name_type}}
                                        </td>
                                        <td>
                                            {{$saler->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            {{$saler->updated_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <a href="#" rel="tooltip"
                                               class="btn btn-{{$saler->status?'primary':'success'}} btn-icon btn-sm change-saler-status" data-id="{{$saler->id}}">
                                                <i class="fa {{$saler->status?'fa-minus':'fa-check'}}"></i>
                                            </a>
                                            <a href="{{route('admin.salers.edit', $saler->id)}}" rel="tooltip"
                                               class="btn btn-success btn-icon btn-sm btn-edit" data-original-title=""
                                               title="">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="button" rel="tooltip"
                                                    class="btn btn-danger btn-icon btn-sm btn-remove-saler"
                                                    data-id="{{$saler->id}}" title="">
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
                        {{$salers->appends($queries)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
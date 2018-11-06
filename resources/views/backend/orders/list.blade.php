@extends('backend.layouts.master')
@section('title', "Orders")
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Danh sách hóa đơn</h4>
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
                                        Người mua
                                    </th>
                                    <th>
                                        Thanh toán
                                    </th>
                                    <th>
                                        Tổng tiền
                                    </th>
                                    <th>
                                        Shipper
                                    </th>
                                    <th>
                                        Trạng thái
                                    </th>
                                    <th>
                                        Địa chỉ
                                    </th>
                                    <th>
                                        Ngày ship
                                    </th>
                                    <th>
                                        Ngày thanh toán
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
                                @if (!count($orders))
                                    <tr>
                                        <td class="text-center" colspan="10">Không có hóa đơn nào trong cơ sở dữ
                                            liệu
                                        </td>
                                    </tr>
                                @endif
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="text-center">
                                            {{$order->id}}
                                        </td>
                                        <td>
                                            {{$order->user->name}}
                                        </td>
                                        <td>
                                            {{$order->payment->payment_type}}
                                        </td>
                                        <td>
                                            {{number_format($order->total_price)}} VNĐ
                                        </td>
                                        <td>
                                            {{$order->shipper->shipper_name}}
                                        </td>
                                        <td>
                                            <div class="text-{{$order->status_text_color}}">{{$order->status}}</div>
                                        </td>
                                        <td>
                                            {{$order->address?:'Chưa có'}}
                                        </td>
                                        <td>
                                            {{$order->ship_date?:'Chưa có'}}
                                        </td>
                                        <td>
                                            {{$order->payment_date?:'Chưa có'}}
                                        </td>
                                        <td>
                                            {{$order->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            {{$order->updated_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            {{--<a href="#" rel="tooltip"--}}
                                               {{--class="btn btn-{{$order->status_text_color}} btn-icon btn-sm change-order-status" data-id="{{$order->id}}">--}}
                                                {{--<i class="fa {{$order->transaction_status?'fa-minus':'fa-check'}}"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="{{route('admin.orders.edit', $order->id)}}" rel="tooltip"--}}
                                               {{--class="btn btn-success btn-icon btn-sm btn-edit" data-original-title=""--}}
                                               {{--title="">--}}
                                                {{--<i class="fa fa-edit"></i>--}}
                                            {{--</a>--}}
                                            {{--<button type="button" rel="tooltip"--}}
                                                    {{--class="btn btn-danger btn-icon btn-sm btn-remove-saler"--}}
                                                    {{--data-id="{{$order->id}}" title="">--}}
                                                {{--<i class="fa fa-times"></i>--}}
                                            {{--</button>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer m-auto">
                        {{$orders->appends($queries)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
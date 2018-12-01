<tr>
    <td class="{{$link['name'] == 'Chưa có'? 'text-danger':''}}">
        {{$link['name']}}
    </td>
    <td>
        {{$link['link']}}
    </td>
    <td >
        {{$link['count']}}
    </td>
    <td>
        <a href="#" rel="tooltip"
           class="btn-lg btn-success btn-icon btn-sm btn-download" data-index="1"
           title="">
            <i class="fa fa-download"></i>
        </a>
    </td>
</tr>
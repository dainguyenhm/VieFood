<td>{{ $banner->id }}</td>
<td>
    <img src="images/uploads/banners/{{ $banner->image }}" width="200px" height="70px">
</td>
<td>
    @php
    switch ($banner->type) {
        case 1:
            echo 'Slide show';
            break;
        case 2:
            echo 'Banner dưới slide show';
            break;
        case 3:
            echo 'Banner bên menu trái';
            break;
        default:
            //code to be executed
    }
    @endphp
</td>
<td class="center">
    <span class="btn-edit" data-id="{{ $banner->id }}"><i class="fa fa-pencil fa-fw"></i></span>
    <span class="btn-delete" data-id="{{ $banner->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
</td>
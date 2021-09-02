<td>{{ $sub_category->id }}</td>
<td>{{ $sub_category->name }}</td>
<td>{{ $sub_category->category->name }}</td>
<td class="center">
    <span class="btn-edit" data-id="{{ $sub_category->id }}"><i class="fa fa-pencil fa-fw"></i></span>
    <span class="btn-delete" data-id="{{ $sub_category->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
</td>
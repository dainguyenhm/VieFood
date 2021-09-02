<td>{{ $category->id }}</td>
<td>{{ $category->name }}</td>
<td class="center">
    <span class="btn-edit" data-id="{{ $category->id }}"><i class="fa fa-pencil fa-fw"></i></span>
    <span class="btn-delete" data-id="{{ $category->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
</td>
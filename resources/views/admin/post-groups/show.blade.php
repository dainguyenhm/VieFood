<td>{{ $post_group->id }}</td>
<td>{{ $post_group->name }}</td>
<td class="center">
    <span class="btn-edit" data-id="{{ $post_group->id }}"><i class="fa fa-pencil fa-fw"></i></span>
    <span class="btn-delete" data-id="{{ $post_group->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
</td>
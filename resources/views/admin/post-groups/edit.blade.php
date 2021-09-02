<td>{{ $post_group->id }}</td>
<td class="name"><input type="text" name="name" value="{{ $post_group->name }}" class="form-control"></td>
<td class="center">
    <span class="btn-save" data-id="{{ $post_group->id }}"><i class="fa fa-floppy-o"></i></span>
    <span class="btn-cancel" data-id="{{ $post_group->id }}" style="color: red;"><i class="fa fa-times-circle"></i></span>
</td>
<td>{{ $category->id }}</td>
<td class="name"><input type="text" name="name" value="{{ $category->name }}" class="form-control"></td>
<td class="center">
    <span class="btn-save" data-id="{{ $category->id }}"><i class="fa fa-floppy-o"></i></span>
    <span class="btn-cancel" data-id="{{ $category->id }}" style="color: red;"><i class="fa fa-times-circle"></i></span>
</td>
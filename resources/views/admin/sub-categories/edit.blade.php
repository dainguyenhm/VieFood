<td>{{ $sub_category->id }}</td>
<td class="name"><input type="text" name="name" value="{{ $sub_category->name }}" class="form-control"></td>
<td class="category_id">
    <select name="category_id" class="form-control">
        <option value="{{ $old_category->id }}" checked="true">{{ $old_category->name }}</option>
        @foreach ($categories as $category)
            @if ($category->id != $old_category->id)
                <option value="{{ $category->id }}">{{ $category->name }}</option>    
            @endif
        @endforeach
    </select>
</td>
<td class="center">
    <span class="btn-save" data-id="{{ $sub_category->id }}"><i class="fa fa-floppy-o"></i></span>
    <span class="btn-cancel" data-id="{{ $sub_category->id }}" style="color: red;"><i class="fa fa-times-circle"></i></span>
</td>
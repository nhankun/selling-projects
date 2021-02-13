@if(isset($categories))
    @foreach($categories as $category)
    <tr>
        <td>{!! $category->id !!}.</td>
        <td>{!! $category->name !!}</td>
        <td><img src="{!! asset($category->icon) !!}" class="img-circle elevation-2 max90px" alt="{!! $category->name !!} icon"></td>
        <td>
            <button type="button" class="btn btn-block bg-gradient-danger"><i class="fas fa-ban"></i></button>
            <button type="button" class="btn btn-block bg-gradient-success"><i class="fas fa-check-circle"></i></button>
        </td>
        <td>Hành động</td>
    </tr>
    @endforeach
@endif

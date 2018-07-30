<table class="table table-responsive" id="shop-table">
    <thead>
        <th>Main Shop</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($shops as $shop)
        <tr>
            <td>{!! $shop->name !!}</td>
            <td>
                {!! Form::open(['route' => ['shop.destroy', $shop->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('shop.show', [$shop->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('shop.edit', [$shop->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<table class="table table-responsive" id="item-table">
    <thead>
        <th>Brand</th>
        <th>Model</th>
        <th>CPU</th>
        <th>Price</th>
        <th>Memory</th>
        <th>Hardisk</th>
        <th>Display</th>
        <th>Battery</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{!! $item->brand !!}</td>
            <td>{!! $item->model !!}</td>
            <td>{!! $item->cpu !!}</td>
            <td>{!! $item->price !!}</td>
            <td>{!! $item->memory !!}</td>
            <td>{!! $item->hardisk !!}</td>
            <td>{!! $item->display !!}</td>
            <td>{!! $item->battery !!}</td>
            <td>
                {!! Form::open(['route' => ['item.destroy', $item->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('item.show', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('item.edit', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<table class="table table-responsive" id="branch-table">
    <thead>
        <th>Location</th>
        <th>Phone</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($branches as $branch)
        <tr>
            <td>{!! $branch->location !!}</td>
            <td>{!! $branch->phone !!}</td>
            <td>{!! $branch->email !!}</td>
            <td>
                {!! Form::open(['route' => ['branch.destroy', $branch->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('branch.show', [$branch->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('branch.edit', [$branch->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
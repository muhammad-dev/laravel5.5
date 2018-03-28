<table class="table table-responsive" id="tellers-table">
    <thead>
        <tr>
            <th>Phone Number</th>
        <th>Name</th>
        <th>Location</th>
        <th>Status</th>
        <th>Store Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tellers as $teller)
        <tr>
            <td>{!! $teller->phone_number !!}</td>
            <td>{!! $teller->name !!}</td>
            <td>{!! $teller->location !!}</td>
            <td>{!! $teller->status !!}</td>
            <td>{!! $teller->store_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tellers.destroy', $teller->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tellers.show', [$teller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tellers.edit', [$teller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
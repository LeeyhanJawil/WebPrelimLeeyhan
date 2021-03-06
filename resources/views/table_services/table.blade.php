<div class="table-responsive">
    <table class="table" id="tableServices-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tableServices as $tableServices)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['tableServices.destroy', $tableServices->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tableServices.show', [$tableServices->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tableServices.edit', [$tableServices->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

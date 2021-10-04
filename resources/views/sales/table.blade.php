<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead>
            <tr>
                <th>Product</th>
        <th>Brand</th>
        <th>Number Of Items Sold</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sales as $sales)
            <tr>
                <td>{{ $sales->Product }}</td>
            <td>{{ $sales->Brand }}</td>
            <td>{{ $sales->Number_of_items_sold }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sales.destroy', $sales->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sales.show', [$sales->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sales.edit', [$sales->id]) }}" class='btn btn-default btn-xs'>
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
    <button class="container h5 d-flex justify-content-center align-items-center bg-primary p-2">
        <a href="{{url('chart-js')}}">show sales</a>
    </button>

</div>

<!-- Product Field -->
<div class="col-sm-12">
    {!! Form::label('Product', 'Product:') !!}
    <p>{{ $sales->Product }}</p>
</div>

<!-- Brand Field -->
<div class="col-sm-12">
    {!! Form::label('Brand', 'Brand:') !!}
    <p>{{ $sales->Brand }}</p>
</div>

<!-- Number Of Items Sold Field -->
<div class="col-sm-12">
    {!! Form::label('Number_of_items_sold', 'Number Of Items Sold:') !!}
    <p>{{ $sales->Number_of_items_sold }}</p>
</div>


<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('Product_name', 'Product Name:') !!}
    <p>{{ $pricing->Product_name }}</p>
</div>

<!-- Brand Field -->
<div class="col-sm-12">
    {!! Form::label('Brand', 'Brand:') !!}
    <p>{{ $pricing->Brand }}</p>
</div>

<!-- Supplier Field -->
<div class="col-sm-12">
    {!! Form::label('Supplier', 'Supplier:') !!}
    <p>{{ $pricing->Supplier }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $pricing->Price }}</p>
</div>


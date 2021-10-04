<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('Product_name', 'Product Name:') !!}
    <p>{{ $product->Product_name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $product->Description }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $product->Price }}</p>
</div>

<!-- Manufacturer Field -->
<div class="col-sm-12">
    {!! Form::label('Manufacturer', 'Manufacturer:') !!}
    <p>{{ $product->Manufacturer }}</p>
</div>

<!-- Date Manufactured Field -->
<div class="col-sm-12">
    {!! Form::label('Date_manufactured', 'Date Manufactured:') !!}
    <p>{{ $product->Date_manufactured }}</p>
</div>


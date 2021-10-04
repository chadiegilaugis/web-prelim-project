<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product', 'Product:') !!}
    {!! Form::text('Product', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Brand', 'Brand:') !!}
    {!! Form::text('Brand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Number Of Items Sold Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Number_of_items_sold', 'Number Of Items Sold:') !!}
    {!! Form::number('Number_of_items_sold', null, ['class' => 'form-control']) !!}
</div>
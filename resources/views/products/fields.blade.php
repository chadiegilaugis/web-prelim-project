<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_name', 'Product Name:') !!}
    {!! Form::text('Product_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>

<!-- Manufacturer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Manufacturer', 'Manufacturer:') !!}
    {!! Form::text('Manufacturer', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Manufactured Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date_manufactured', 'Date Manufactured:') !!}
    {!! Form::text('Date_manufactured', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

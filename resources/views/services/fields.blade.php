<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Message', 'Message:') !!}
    {!! Form::textarea('Message', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
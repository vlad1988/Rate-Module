@extends('app')

@section('content')
<div class="container">
    {!! Form::open(array('url' => 'update/worker', 'method' => 'POST')) !!}
    {!! Form::hidden('worker_id', $worker->id) !!}

    <div class="form-group">
        <label for='name'>Ім'я</label>
        <input type="text" name="name" value="{{ $worker->name }}" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for='patronymic'>По-батькові</label>
        <input type="text" name="patronymic" value="{{ $worker->patronymic }}" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for='surname'>Прізвище</label>
        <input type="text" name="surname" value="{{ $worker->surname }}" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for='place'>Посада</label>
        <input type="text" name="place" value="{{ $worker->surname }}" class="form-control" required/>
    </div>
    <div class="form-group">
        <input type="submit" value='Додати' class="form-control btn btn-primary" required/>
    </div>
    {!! Form::close() !!}

</div>
@endsection

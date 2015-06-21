@extends('app')

@section('content')
<div class="container">
    {!! Form::open(array('url' => 'create/report', 'method' => 'POST')) !!}
    {!! Form::hidden('worker_id', $id) !!}

    <div class="form-group">
        <label for='title'>Назва роботи</label>
        <input type="text" name="title" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for='direction'>Оберіть напрям роботи</label>
        <select name="direction" class="form-control" required>
            <option></option>
            <option value="science">Наукова робота</option>
            <option value="method">Методична робота</option>
            <option value="organization">Організаційна робота</option>
        </select>    
    </div>
    <div class="form-group" id='option-box'></div>
    <div class="form-group">
        <input type="date" class="form-control" name="expire_date"/>
    </div>
    <div class="form-group">
        <input type="submit" value='Додати' class="form-control btn btn-primary" required/>
    </div>
    {!! Form::close() !!}
</div>
@endsection

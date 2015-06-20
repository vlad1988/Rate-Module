@extends('app')

@section('content')
{{ $id }}
<div class="container">
    {!! Form::open(array('url' => 'create/block', 'method' => 'POST')) !!}
    {!! Form::hidden('worker_id', $id) !!}

    <div class="form-group">
        <label for='type'>Назва роботи</label>
        <input type="text" name="type" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for='direction'>Оберіть напрям роботи</label>
        <select name="direction" class="form-control">
            <option value="science">Наукова робота</option>
            <option value="method">Методична робота</option>
            <option value="organization">Організаційна робота</option>
        </select>    
    </div>
    <div class="form-group">
        <input type="submit" value='Додати' class="form-control btn btn-primary" required/>
    </div>
    {!! Form::close() !!}
</div>
@endsection

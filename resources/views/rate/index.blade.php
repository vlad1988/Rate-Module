@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

            {!! Form::open(array('url' => 'create/block', 'method' => 'POST')) !!}
            <div class="form-group">
                <label for='type'>Вкажіть тип</label>
                <input type="text" name="type" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for='unit'>К-ть балів</label>
                <input type="number" name="unit" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for='unit'>Оберіть напрям роботи</label>
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
    </div>
</div>
@endsection

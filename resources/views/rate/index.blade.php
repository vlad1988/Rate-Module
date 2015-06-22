@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">

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
        <div class="col-md-8">
            <h4>Наукова робота</h4>
            <table class="table table-hover">
                <tr>
                    <th>Вид</th>
                    <th>К-ть балів</th>
                    <th></th>
                </tr>
                @foreach ($sciences as $science)
                <tr >
                    <td>
                        {{ $science->type }}
                    </td>
                    <td>{{ $science->unit }}</td>
                    <td><a href="{{ url('science/delete/'. $science->id) }}" class="btn btn-default">Видалити</a></td>
                </tr>
                @endforeach
            </table>   
            <hr>

            <h4>Методична робота</h4>

            <table class="table table-hover">
                <tr>
                    <th>Вид</th>
                    <th>К-ть балів</th>
                    <th></th>
                </tr>
                @foreach ($methods as $method)
                <tr >
                    <td>
                        {{ $method->type }}
                    </td>
                    <td>{{ $method->unit }}</td>
                    <td><a href="{{ url('method/delete/'. $method->id) }}" class="btn btn-default">Видалити</a></td>
                </tr>
                @endforeach
            </table> 
            <hr>

            <h4>Організаційна робота</h4>
            <table class="table table-hover">
                <tr>
                    <th>Вид</th>
                    <th>К-ть балів</th>
                    <th></th>
                </tr>
                @foreach ($orgs as $org)
                <tr >
                    <td>
                        {{ $org->type }}
                    </td>
                    <td>{{ $org->unit }}</td>
                    <td><a href="{{ url('orgs/delete/'. $org->id) }}" class="btn btn-default">Видалити</a></td>
                </tr>
                @endforeach
            </table> 
            <hr>
        </div>
    </div>
</div>
@endsection

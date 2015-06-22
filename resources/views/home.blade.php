@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <a href="{{ url('create/form') }}"><i class="glyphicon glyphicon-user"></i> Додати працівника</a> <br/><br/>
                    <div class="row">
                        <div class="col-md-12">

                            <table class="table table-hover">
                                <tr>
                                    <th>ПІБ</th>
                                    <th>Посада</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($workers as $worker)
                                <tr >
                                    <td>
                                        <a href="{{ url('worker/'. $worker->id) }}"> 
                                            {{ $worker->name }}
                                            {{ $worker->patronymic }}
                                            {{ $worker->surname }}
                                        </a>
                                    </td>
                                    <td>{{ $worker->place }}</td>
                                    <td><a href="{{ url('create/report/'. $worker->id) }}" class="btn btn-default"> Додати</a></td>
                                    <td><a href="{{ url('edit/worker/'. $worker->id) }}" class="btn btn-warning"> Редагувати</a></td>
                                    <td><a href="{{ url('remove/worker/'. $worker->id) }}" class="btn btn-danger"> Видалити</a></td>
                                </tr>
                                @endforeach
                            </table>                            

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

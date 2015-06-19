@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <a href="{{ url('create/form') }}"><i class="glyphicon glyphicon-user"></i> Додати працівника</a>
                    <div class="row">
                        <div class="col-md-6">

                            <table class="table table-hover">
                                <tr>
                                    <th>ПІБ</th>
                                    <th>Посада</th>
                                </tr>
                                @foreach ($workers as $worker)
                                <tr >
                                    <td>
                                        {{ $worker->name }}
                                        {{ $worker->patronymic }}
                                        {{ $worker->surname }}
                                    </td>
                                    <td>{{ $worker->place }}</td>
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

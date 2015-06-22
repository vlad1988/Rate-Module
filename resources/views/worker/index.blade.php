@extends('app')

@section('content')
<div class="container">
    <h4>
        {{ $worker->name }} {{ $worker->patronymic }} {{ $worker->surname }} -
        {{ $worker->place }}
    </h4>
    <table class="table table-hover">
        <tr>
            <th>Назва</th>
            <th>Вид діяльності</th>
            <th>Статус</th>
            <th>Дата завершення</th>
            <th>К-ть балів</th>
            <th>Змінити статус</th>
        </tr>
        @foreach ($reports as $report)
        <tr >
            <td>
                {{ $report->title }}
            </td>
            <td>{{ $report->type }}</td>
            <td><span>{{ $report->status }}</span></td>
            <td>{{ $report->expire_date }}</td>
            <td><span id='rate'>{{ $report->rate }}</span></td>
            <td><a href="{{ url('edit/report/'. $report->id.'/'.$report->unit_store) }}" class="btn btn-default">Змінити</a></td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2"><strong>Сумарна к-ть балів: </strong><span id="sum"> </span></td>
        </tr>
    </table>
</div>
@endsection

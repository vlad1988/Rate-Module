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
        </tr>
        @foreach ($reports as $report)
        <tr >
            <td>
                {{ $report->title }}
            </td>
            <td>{{ $report->type }}</td>
            <td><span>{{ $report->status }}</span></td>
            <td>{{ $report->expire_date }}</td>
            <td>{{ $report->rate }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

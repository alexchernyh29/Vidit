@extends('welcome')

@section('content')

    <h3 class="title-z">Заявки на ремонт</h3>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Тип транспортного средства</th>
            <th scope="col">Марка</th>
            <th scope="col">Модель</th>
            <th scope="col">Поколение Авто</th>
            <th scope="col">Двигатель</th>
            <th scope="col">Коробка</th>
{{--            <th scope="col">Фамилия Имя Отчество</th>--}}
{{--            <th scope="col">Email</th>--}}
            <th scope="col">Телефон</th>
            <th scope="col">Гос.Номер</th>
            <th scope="col">Район поиска</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        @foreach ($app as $one_app)
            <tbody>
            <tr>
                <td>
                    {{$one_app->tip}}
                </td>
                <td>
                    {{$one_app->marka}}
                </td>
                <td>
                    {{$one_app->model}}
                </td>
                <td>
                    {{$one_app->pk}}
                </td>
                <td>
                    {{$one_app->dv}}
                </td>
                <td>
                    {{$one_app->korobka}}
                </td>
{{--                <td>--}}
{{--                    {{$one_app->fio}}--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    {{$one_app->email}}--}}
{{--                </td>--}}
                <td>
                    {{$one_app->mobile}}
                </td>
                <td>
                    {{$one_app->gos}}
                </td>
                <td>
                    {{$one_app->ra}}
                </td>
                <td>
                    {{$one_app->comment}}
                </td>
                <td>
                    <div class="btn-wrap">
                        <a href="{{route('app.destroy', ['id' => $one_app->id])}}" class="btn-clouse">Закрыть заявку!</a>
                        <a class="btn-edit" href="{{ route('app.edit' ,$one_app->id) }}">Просмотреть</a>
                    </div>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
{{--    <a href="{{ route('app.create') }}" class="btn btn-success">Создать заявку</a>--}}

@endsection

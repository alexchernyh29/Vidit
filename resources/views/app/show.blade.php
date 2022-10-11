@extends('welcome')

@section('content')

    <h3>Заявка</h3>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Тип транспортного средства</th>
            <th scope="col">Марка</th>
            <th scope="col">Модель</th>
            <th scope="col">Коробка</th>
            <th scope="col">ФИО</th>
            <th scope="col">Email</th>
            <th scope="col">Телефон</th>
            <th scope="col">Гос.Номер</th>
            <th scope="col">Степень застревания</th>
            <th scope="col">Комментарий</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td>
                    {{$myApp->tip}}
                </td>
                <td>
                    {{$myApp->marka}}
                </td>
                <td>
                    {{$myApp->model}}
                </td>
                <td>
                    {{$myApp->korobka}}
                </td>
                <td>
                    {{$myApp->fio}}
                </td>
                <td>
                    {{$myApp->email}}
                </td>
                <td>
                    {{$myApp->mobile}}
                </td>
                <td>
                    {{$myApp->gos}}
                </td>
                <td>
                    {{$myApp->st}}
                </td>
                <td>
                    {{$one_app->comment}}
                </td>
            </tr>
            </tbody>
    </table>

@endsection

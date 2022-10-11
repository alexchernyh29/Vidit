@extends('welcome')

@section('content')

    <h3>Заявка</h3>
    <p>{{$one_app->id}}</p>

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
                    {{$one_app->korobka}}
                </td>
                <td>
                    {{$one_app->fio}}
                </td>
                <td>
                    {{$one_app->email}}
                </td>
                <td>
                    {{$one_app->mobile}}
                </td>
                <td>
                    {{$one_app->gos}}
                </td>
                <td>
                    {{$one_app->st}}
                </td>
                <td>
                    {{$one_app->comment}}
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>

@endsection

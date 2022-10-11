@extends('welcome')

@section('content')
    <div class="container-e">
        <h3 class="title-z">Просмотр заявки № {{Form::label('id', $app->id)}}</h3>
        {!! Form::open(['route' => ['app.update']]) !!}
        {{Form::hidden('id', $app->id)}}
        <div class="edit-wrap">
            <div class="edit-up">
                <div class="form-group-e">
                    {{Form::label('tip', 'Тип транспортного средства')}}
                    {{Form::text('tip', $app->tip, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('marka', 'Марка авто')}}
                    {{Form::text('marka', $app->marka,['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('model', 'Модель')}}
                    {{Form::text('model', $app->model, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('pk', 'Поколение')}}
                    {{Form::text('pk', $app->pk, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('dv', 'Двигатель')}}
                    {{Form::text('dv', $app->dv, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('korobka', 'Коробка')}}
                    {{Form::text('korobka', $app->korobka, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>
            </div>
            <div class="edit-up">
                <div class="form-group">
                    {{Form::label('fio', 'ФИО')}}
                    {{Form::text('fio', $app->fio, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    {{Form::text('email', $app->email, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('mobile', 'Телефон')}}
                    {{Form::text('mobile', $app->mobile, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('gos', 'Гос.Номер')}}
                    {{Form::text('gos', $app->gos, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('ra', 'Район поиска')}}
                    {{Form::text('ra', $app->ra, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('comment', 'Kомментарий')}}
                    {{Form::text('comment', $app->comment, ['placeholder'=> '', 'class' => 'form-control'])}}
                </div>
            </div>
        </div>

{{--        {{Form::submit('Сохранить изменения', ['class' => 'btn btn-success'])}}--}}
        {!! Form::close() !!}
    </div>


@endsection

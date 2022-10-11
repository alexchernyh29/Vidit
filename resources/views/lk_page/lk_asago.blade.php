@extends('welcome')

@section('content')
    <div class="content-sput">
        <div class="sput_header">
            <div class="sput_left">
                <p class="sput_title">Контакты:</p>
                <p class="sput_text">Телефон: +7-999-999-99-99</p>
                <p class="sput_text">Телефон: +7-999-999-99-99</p>
            </div>
            <div class="sput_right">
                <p class="sput_title">Страховая компания</p>
                <p class="sput_subtitle">Асаго Страхование</p>
                <p class="sput_text">Время работы: ПН-ПТ с 11:00 до 17:00</p>
                <p class="sput_text">Адрес: Радищева д.75</p>
            </div>
        </div>
        <div class="sput_footer">
            <div class="sput_left_1">
                <img class="sput_img" src="/images/lk_img-1.png"/>
                <img class="sput_img" src="/images/lk_img-2.png"/>
            </div>
            <div class="sput_right_2">
                <a href="/shop" class="sput_btn">Перейти к товарам</a>
                <a href="/map" class="sput_btn">Показать на карте</a>
            </div>
        </div>
    </div>

@endsection

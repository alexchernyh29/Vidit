@extends('welcome')

@section('content')
    <div class="vol_main">
        <div class="vol_first">
            <h4 class="vol_title">Volkswagen<br>Auto<br>Group</h4>
            <p class="vol_text">Официальный Автосервис в Курске</p>
            <img class="vol-img" src="/images/vol.png"/>
        </div>
        <div class="vol_two">
            <p class="vol_text-1">Популярные услуги</p>
            <div class="vol_card">
                <img class="vol-img-1" src="/images/vol-card-1.png"/>
                <img class="vol-img-1" src="/images/vol-card-2.png"/>
                <img class="vol-img-1" src="/images/vol-card-3.png"/>
            </div>
        </div>
        <div class="vol_tree">
            <div class="vol_card">
                <img class="vol-img-2" src="/images/vol-card-4.png"/>
                <img class="vol-img-2" src="/images/vol-card-5.png"/>
            </div>
        </div>
        <div class="vol_four">
            <h4 class="vol_text-1">Контакты</h4>
            <p class="vol_text-1">Адрес: Энгельса д.175</p>
            <p class="vol_text-1">Телефон: +7(999)-999-99-99</p>
        </div>
    </div>
@endsection

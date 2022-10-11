@extends('welcome')

@section('content')
    <div class="map-service">
        <div class="map-a">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A996d2176001fead5bfbd3489f255d1ba4a53ddadc5de246e9134165580c11101&amp;width=80vh&amp;height=920&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="map-list">
            <div class="map-item">
                <div class="map-left">
                    <div class="map-img"><img class="map-img" src="/images/map_img-1.png"/></div>
                    <p class="map-time">Время работы:</p>
                    <p class="map-timeup">ПН-ПТ: c 10:00 - 17:00</p>
                </div>
                <div class="map-right">
                    <p class="map-title">VolkswagenAutoGroup</p>
                    <p class="map-text">Энгельса д.175</p>
                    <p class="map-text">+7(999)-999-99-99</p>
                    <p class="map-text">Рейтинг</p>
                    <div class="map-actions">
                        <div class="map-actions_left">
                            <p class="map-actions_left_estimation">10</p>
                            <p class="map-actions_left_feedback">3 отзыва</p>
                        </div>
                        <a href="/volkswagenauto" class="map-btn">Просмотреть</a>
                    </div>
                </div>
            </div>
            <div class="map-item">
                <div class="map-left">
                    <div class="map-img"><img class="map-img" src="/images/stonksvidit3.png"/></div>
                    <p class="map-time">Время работы:</p>
                    <p class="map-timeup">ПН-ПТ: c 10:00 - 17:00</p>
                </div>
                <div class="map-right">
                    <p class="map-title">Автоспутник</p>
                    <p class="map-text">проспект Победы, 5</p>
                    <p class="map-text">+7(999)-999-99-99</p>
                    <p class="map-text">Рейтинг</p>
                    <div class="map-actions">
                        <div class="map-actions_left">
                            <p class="map-actions_left_estimation">7</p>
                            <p class="map-actions_left_feedback">6 отзыва</p>
                        </div>
                        <a href="/sput" class="map-btn">Просмотреть</a>
                    </div>
                </div>
            </div>
            <div class="map-item">
                <div class="map-left">
                    <div class="map-img"><img class="map-img" src="/images/map-img-2.png"/></div>
                    <p class="map-time">Время работы:</p>
                    <p class="map-timeup">ПН-ПТ: c 10:00 - 17:00</p>
                </div>
                <div class="map-right">
                    <p class="map-title">6 колёс</p>
                    <p class="map-text">Сумская д.1</p>
                    <p class="map-text">+7(999)-999-99-99</p>
                    <p class="map-text">Рейтинг</p>
                    <div class="map-actions">
                        <div class="map-actions_left">
                            <p class="map-actions_left_estimation-1">5</p>
                            <p class="map-actions_left_feedback">3 отзыва</p>
                        </div>
                        <a href="/six" class="map-btn">Просмотреть</a>
                    </div>
                </div>
            </div>
            <div class="map-item">
                <div class="map-left">
                    <div class="map-img"><img class="map-img" src="/images/map-img-3.png"/></div>
                    <p class="map-time">Время работы:</p>
                    <p class="map-timeup">ПН-ПТ: c 10:00 - 17:00</p>
                </div>
                <div class="map-right">
                    <p class="map-title">Генераторы и стартеры</p>
                    <p class="map-text">50 лет Победы д.175</p>
                    <p class="map-text">+7(999)-999-99-99</p>
                    <p class="map-text">Рейтинг</p>
                    <div class="map-actions">
                        <div class="map-actions_left">
                            <p class="map-actions_left_estimation-1">6</p>
                            <p class="map-actions_left_feedback">3 отзыва</p>
                        </div>
                        <a href="/generat" class="map-btn">Просмотреть</a>
                    </div>
                </div>
            </div>
            <div class="map-item">
                <div class="map-left">
                    <div class="map-img"><img class="map-img" src="/images/stonksvidit2.png"/></div>
                    <p class="map-time">Время работы:</p>
                    <p class="map-timeup">ПН-ПТ: c 10:00 - 17:00</p>
                </div>
                <div class="map-right">
                    <p class="map-title">Good day</p>
                    <p class="map-text">Максима Горького д.50</p>
                    <p class="map-text">+7(999)-999-99-99</p>
                    <p class="map-text">Рейтинг</p>
                    <div class="map-actions">
                        <div class="map-actions_left">
                            <p class="map-actions_left_estimation-2">3</p>
                            <p class="map-actions_left_feedback">3 отзыва</p>
                        </div>
                        <a href="/good" class="map-btn">Просмотреть</a>
                    </div>
                </div>
            </div>
            <div class="map-item">
                <div class="map-left">
                    <div class="map-img"><img class="map-img" src="/images/stonksvidit1.png"/></div>
                    <p class="map-time">Время работы:</p>
                    <p class="map-timeup">ПН-ПТ: c 10:00 - 17:00</p>
                </div>
                <div class="map-right">
                    <p class="map-title">Асаго Страхование</p>
                    <p class="map-text">Радищева д.75</p>
                    <p class="map-text">+7(999)-999-99-99</p>
                    <p class="map-text">Рейтинг</p>
                    <div class="map-actions">
                        <div class="map-actions_left">
                            <p class="map-actions_left_estimation-2">1</p>
                            <p class="map-actions_left_feedback">3 отзыва</p>
                        </div>
                        <a href="/asago" class="map-btn">Просмотреть</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-product">
            <div class="map-product-list">
                <div class="map-product_list">
                    <div class="map-product_left">
                        <p class="map-product_left-text">Воздушные фильтры</p>
                        <a href="/shop" class="map-product_left-btn">Найти</a>
                    </div>
                    <div class="map-product_right">
                        <img class="map-img" src="/images/product-img-1.png"/>
                    </div>
                </div>
                <div class="map-product_list">
                    <div class="map-product_left">
                        <p class="map-product_left-text">Силовые агрегаты</p>
                        <a href="/shop" class="map-product_left-btn">Найти</a>
                    </div>
                    <div class="map-product_right">
                        <img class="map-img" src="/images/product_2.png"/>
                    </div>
                </div>
                <div class="map-product_list">
                    <div class="map-product_left">
                        <p class="map-product_left-text">Масла</p>
                        <a href="/shop" class="map-product_left-btn">Найти</a>
                    </div>
                    <div class="map-product_right">
                        <img class="map-img" src="/images/product_3.png"/>
                    </div>
                </div>
                <div class="map-product_list">
                    <div class="map-product_left">
                        <p class="map-product_left-text">Свечи</p>
                        <a href="/shop" class="map-product_left-btn">Найти</a>
                    </div>
                    <div class="map-product_right">
                        <img class="map-img" src="/images/product_4.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

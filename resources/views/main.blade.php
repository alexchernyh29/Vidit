@extends('welcome')

@section('content')
    <div class="content">
        <div class="promo_text">
            <p class="text">Обслуживание автомобилей больше не проблема<br> вместе с Vidit!</p>
            <p class="text-1">Мы помогаем людям найти качественное обслуживание в вашем городе</p>
            <select class="list-1">
                <option class="">Покраска авто</option>
                <option class="">Ремон авто</option>
                <option class="">Детйлинг</option>
                <option class="">Кузовной ремонт</option>
            </select>
            <a class="btn-1" href="{{route('app.create')}}">Создать заявку</a>
        </div>
    </div>
    <div class="container">
        <div class="card-row">
            <div class="card">
                <div class="card__info">
                    <p class="card__title">Автозапчасти</p>
                    <p class="card__subtitle">Найти и приобрести автозапчасти в несколько кликов</p><a class="card__link">Купить</a>
                </div>
                <div class="card__img"><img src="/images/card5vidit.png" /></div>
            </div>
            <div class="card">
                <div class="card__info">
                    <p class="card__title">Автосервисы</p>
                    <p class="card__subtitle">Отремантируйте свой авто</p>
                    <a class="card__link">Найти</a>
                </div>
                <div class="card__img"><img src="/images/card4vidit.png" /></div>
            </div>
            <div class="card">
                <div class="card__info">
                    <p class="card__title">Разборки запчастей</p>
                    <p class="card__subtitle">Найти Б/У детали на ваш авто</p>
                    <a class="card__link">Найти</a>
                </div>
                <div class="card__img"><img src="/images/card3vidit.png" /></div>
            </div>
        </div>
        <div class="card-row">
            <div class="card">
                <div class="card__info">
                    <p class="card__title">Страхование</p>
                    <p class="card__subtitle">Найти страховые компании в несколько кликов</p>
                    <a class="card__link">Купить</a>
                </div>
                <div class="card__img"><img src="/images/card2vidit.png" /></div>
            </div>
            <div class="card">
                <div class="card__info">
                    <p class="card__title">Детейлинг</p>
                    <p class="card__subtitle">Найти детейлинг сервисы в вашем городе</p>
                    <a class="card__link">Найти</a>
                </div>
                <div class="card__img"><img src="/images/card1vidit.png" /></div>
            </div>
            <div class="card">
                <div class="card__info">
                    <p class="card__title">Партнёрские программы</p>
                    <p class="card__subtitle">Получите скидки на любые виды услуг</p>
                    <a class="card__link">Подробнее</a>
                </div>
                <div class="card__img"><img src="/images/card6vidit.png" /></div>
            </div>
        </div>
    </div>
    <div class="info__container">
        <div class="info__left">
            <h4 class="info__title">
                <span>Vidit</span> — приложение для тех , кто ценит свое времят!</h4>
            <p class="info__text">
                <span>Vidit</span> — это агрегатор автосервисов, магазинов запчастей, детейлинг-сервисов.
                Веб-сайтом пользоваться легко: просто оформите заявку, опишите проблему и в течение 10 минут
                получите отклики от ближайших СТО. Вам останется выбрать автосервис, который максимально устроит
                вас по цене и дальности расположения.<br><br>Также через <span>Vidit</span> можно оформить полис
                ОСАГО и получить 30% от его стоимости.<br><br>Четкая система бонусов позволяет накапливать баллы
                за ремонт, а затем оплачивать ими до 30% стоимости услуг.<br><br>Начните пользоваться веб-сайтом
                <span>Vidit</span> уже сейчас, чтобы доверить своhе авто профессионалам и сэкономить на ремонте!
            </p>
        </div>
        <div class="info__right">
            <div class="info__img"><img src="/images/infovidit.png" /></div>
        </div>
    </div>
    <div class="services">
        <p class="services__title">Популярные услуги</p>
        <div class="services__list">
            <div class="services__slide">
                <div class="services__img"> <img src="/images/cardinfo1_vidit.png" /></div>
            </div>
            <div class="services__slide">
                <div class="services__img"> <img src="/images/cardinfo2_vidit.png" /></div>
            </div>
            <div class="services__slide">
                <div class="services__img"> <img src="/images/cardinfo3_vidit.png" /></div>
            </div>
        </div>
    </div>
    <div class="stonks__wrap">
        <div class="stonks__item">
            <div class="stonks__card"><img src="/images/stonksvidit1.png" /></div>
            <p class="stonks__title">Сделай репост и получи скидку</p>
            <p class="stonks__info">Сделайте репост, пост с описанием вашей истории взаимодействия и
                участвуйте в ежемесячном конкурсе призов и подарков</p>
            <a href="#" class="stonks__button">Переход к действию</a>
        </div>
        <div class="stonks__item">
            <div class="stonks__card"><img src="/images/stonksvidit2.png" /></div>
            <p class="stonks__title">Покупайте запчасти через наш сайт</p>
            <p class="stonks__info">Покупайте качественные автозапчасти, агрегаты и пользуйтесь услугами
                наших партнёров взамен вы получаете качественное и быстрое обслуживание.</p>
            <a href="/shop" class="stonks__button">Переход к действию</a>
        </div>
        <div class="stonks__item">
            <div class="stonks__card"><img src="/images/stonksvidit3.png" /></div>
            <p class="stonks__title">Специальные предложения наших партнёров</p>
            <p class="stonks__info">Каждый месяц мы выкладываем эксклюзивные предложения от наших
                партнёров. Скидки, подарочные сертификаты, специальные акции, конкурсы и многое другое.</p>
            <a href="/shop" class="stonks__button">Переход к действию</a>
        </div>
    </div>
    <div class="promob_text">
        <p class="promotext__title"> <span>Vidit</span> — приложение для тех , кто ценит свое время!</p>
        <p class="promotext__subtitle">Начните пользоваться уже сейчас!</p>
    </div>
    <div class="slider__wrap">
        <div class="slider__slider">
            <div class="slider__slide">
                <div class="slider__img"><img src="/images/slidervidit_1.png" /></div>
            </div>
        </div>
    </div>
    <div class="promob_text">
        <p class="promotext__title"> <span>Vidit</span> — всегда рад и готов сотрудничать с вашим бизнесом!</p>
        <p class="promotext__subtitle">Предложим взаимовыгодные условия для сотрудничества!</p>
    </div>
    <h4 class="business__title">Вашей компании ещё нет в <span>Vidit</span>?</h4>
    <p class="business__subtitle">Заполните форму обратной связи прямо сейчас!<br>Мы хотим предложить вам стать партнёром нашего веб-портала. </p>
    <div class="business__wrap">
        <form class="business__form">
            <p class="business__form-title">Форма обратной связи</p>
            <p class="business__form-info">Для создания заявки нам требуется ваша контактная информация</p>
            <div class="business__item">
                <p class="business__text">Ваши инициалы</p>
                <input placeholder="ФИО *" required="required" type="text" class="business__input business__input_fullname business__input_error"/>
                <div class="business__img"> <img src="/images/businessvidit.png" /></div>
                <p class="business__text">Ваша электронная почта</p>
                <input placeholder="Email *" required="required" type="email" class="business__input business__input_email"/>
                <p class="business__text">Ваш номер телефона</p>
                <input placeholder="Телефон *" required="required" type="tel" class="business__input business__input_phone"/>
            </div>
            <p class="business__text">Сфера вашей деятельности</p>
            <select class="business__list-1">
                <option class="">Покраска авто</option>
                <option class="">Ремон авто</option>
                <option class="">Детйлинг</option>
                <option class="">Кузовной ремонт</option>
                <option class="">Автомагазин</option>
            </select>
            <div class="business__mailing">
                <input type="checkbox" checked="checked" class="business__mailing-check" />
                <p class="business__mailing-info">Получать информационную рассылку о новостях и мероприятиях Vidit</p>
            </div>
            <div class="business__actions">
                <p class="business__agree">Нажимая кнопку &laquo;Отправить&raquo; вы&nbsp;соглашаетесь с&nbsp;<a href="/privacy">политикой конфиденциальности</a> и&nbsp;<a href="/privacy">соглашением об&nbsp;использовании сайта</a></p>
                <button type="submit" class="business__button">Отправить</button>
            </div>
        </form>
    </div>
    <div class="footer__wrap">
        <div class="footer__header">
            <div class="footer__item">
                <p class="footer__title">Наши сервисы</p>
                <p class="footer__text">Интерактивная карта </p>
                <p class="footer__text">Заявка на товар</p>
                <p class="footer__text">Калькулятор цен за ремонт</p>
                <p class="footer__text">Калькулятор цен за товар</p>
                <p class="footer__text">Информация</p>
            </div>
            <div class="footer__item">
                <p class="footer__title">Компания</p>
                <p class="footer__text">О нас</p>
                <p class="footer__text">Скидки и акции</p>
                <p class="footer__text">Команда</p>
            </div>
            <div class="footer__item">
                <p class="footer__title">Поддержка</p>
                <p class="footer__text">Контакты</p>
                <p class="footer__text">Служба поддержки</p>
                <p class="footer__text">Политика конфиденциальности</p>
                <p class="footer__text">Cookie Policy</p>
            </div>
        </div>
        <div class="footer__down">
            <p class="footer__text">Ленина 1а</p>
            <p class="footer__text">Курск, 2021</p>
            <p class="footer__text">Russia</p>
            <p class="footer__text">Остались вопросы? Обращайтесь! :)</p>
            <p class="footer__text">viditcompany@vidit.ru</p>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Practice</title>
</head>

<body>

<header id="header" class="header">
    <div class="container">
        <div class="header-info">
            <div class="header-l">
                <div class="city-select">
                    <div class="city-select__img">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="#7B94B0">
                            <use xlink:href="{{ asset('img/sprite.svg#icon-geo') }}" />
                        </svg>
                    </div>
                    <div class="city-select__group">
                        <select name="city" id="city">
                            <option value="Киев">Киев</option>
                            <option value="Харьков">Харьков</option>
                            <option value="Одесса">Одесса</option>
                            <option value="Херсон" selected>Херсон</option>
                        </select>
                    </div>
                </div>
                <ul class="info-menu">
                    <li class="info-menu__item">
                        <a href="#">Магазины</a>
                    </li>
                    <li class="info-menu__item">
                        <a href="#">Блог</a>
                    </li>
                    <li class="info-menu__item info-menu__dropdown">
                        <a href="#">Покупателям
                            <span class="info-menu__item-img">
                  <svg width="10" height="7" viewBox="0 0 10 7" stroke="#7B94B0" fill="none">
                    <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-header') }}" />
                  </svg>
                </span>
                        </a>
                        <ul class="info-menu__dropdown-group">
                            <li class="info-menu__dropdown-item">
                                <a href="#">О компании</a>
                            </li>
                            <li class="info-menu__dropdown-item">
                                <a href="#">Сотрудничество</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="header-r">
                <div class="callback">
                    <span>Консультация:</span>
                    <ul class="callback__group">
                        <li class="callback__item">
                            <a href="tel:+380444903100">(044) 490 31 00
                                <span class="callback__item-img">
                    <svg width="10" height="7" viewBox="0 0 10 7" stroke="#7B94B0" fill="none">
                      <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-header') }}" />
                    </svg>
                  </span>
                            </a>
                            <ul class="callback__dropdown">
                                <li class="callback__dropdown-item">
                                    <a href="tel:+380444903100">(044) 490 31 01</a>
                                </li>
                                <li class="callback__dropdown-item">
                                    <a href="tel:+380444903100">(044) 490 31 02</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="language">
                    <span class="language__item">
                      <a href="#" class="language__link">Укр</a>
                    </span>
                            <span class="language__item">
                      <a href="#" class="language__link language__link--active">Рус</a>
                    </span>
                            <span class="language__item">
                      <a href="#" class="language__link">Eng</a>
                    </span>
                </div>

            </div>
        </div>

        <div class="header-main">
            <div class="header-logo">
                <a href="#">
                    <svg width="114" height="41" viewBox="0 0 114 41" fill="#2C9323">
                        <use xlink:href="{{ asset('img/sprite.svg#icon-logo') }}" />
                    </svg>
                </a>
            </div>

            <div class="catalog">
                <div class="catalog-item">
                    <a href="#" class="catalog-item__link">Товары по питомцам</a>
                    <span class="catalog-item__arrow">
                        <svg width="12" height="8" viewBox="0 0 12 8" stroke="#7B94B0" fill="none">
                          <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-catalog') }}" />
                        </svg>
                    </span>
                    <div class="catalog-dropdown">
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Корм</a>
                        </div>
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Игрушки</a>
                        </div>
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Ошейники</a>
                        </div>
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Костюмы</a>
                        </div>
                    </div>
                </div>
                <div class="catalog-item">
                    <a href="#" class="catalog-item__link">Бренды</a>
                    <span class="catalog-item__arrow">
                        <svg width="12" height="8" viewBox="0 0 12 8" stroke="#7B94B0" fill="none">
                          <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-catalog') }}" />
                        </svg>
                    </span>
                    <div class="catalog-dropdown">
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Бренд #1</a>
                        </div>
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Бренд #2</a>
                        </div>
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Бренд #3</a>
                        </div>
                    </div>
                </div>
                <div class="catalog-item">
                    <a href="#" class="catalog-item__link">Ветаптека</a>
                    <span class="catalog-item__arrow">
                        <svg width="12" height="8" viewBox="0 0 12 8" stroke="#7B94B0" fill="none">
                          <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-catalog') }}" />
                        </svg>
                    </span>
                    <div class="catalog-dropdown">
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Таблетки</a>
                        </div>
                        <div class="catalog-dropdown__item">
                            <a href="#" class="catalog-dropdown__link">Витамины</a>
                        </div>
                    </div>
                </div>
                <div class="catalog-item">
                    <a href="#" class="catalog-item__link">Найди друга</a>
                </div>
                <div class="catalog-item">
                    <a href="#" class="catalog-item__link">Ветклиники</a>
                </div>
            </div>



            <div class="action">
                <div class="action-search">
                    <form action="URL" class="action-search-form">
                        <button type="submit" class="action-search-form__button">
                          <svg width="32" height="32" viewBox="0 0 32 32" stroke="#202454" fill="none">
                            <use xlink:href="{{ asset('img/sprite.svg#icon-search') }}" />
                          </svg>
                        </button>
                        <input type="text" class="action-search-form__input" placeholder="Поиск">
                    </form>
                </div>

                <div class="action-menu">
                    <span class="action-menu__item action-menu__item-profile">
                      <a href="#">
                        <svg width="22" height="26" viewBox="0 0 22 26" stroke="#202454" fill="none">
                          <use xlink:href="{{ asset('img/sprite.svg#icon-account') }}" />
                        </svg>
                      </a>
                    </span>
                    <span class="action-menu__item action-menu__item-favourite">
                      <a href="#">
                        <svg width="32" height="32" viewBox="0 0 32 32" stroke="#202454" fill="none">
                          <use xlink:href="{{ asset('img/sprite.svg#icon-favorite') }}" />
                        </svg>
                      </a>
                    </span>
                    <span class="action-menu__item action-menu__item-basket ">
              <a href="#">
                <svg width="30" height="30" viewBox="0 0 30 30" stroke="#202454" fill="none">
                  <use xlink:href="{{ asset('img/sprite.svg#icon-basket') }}" />
                </svg>
              </a>
              <span class="action-menu__basket-count">0</span>
            </span>
                </div>

            </div>

        </div>
    </div>
</header>

<div class="best-deals">
    <div class="container">
        <div class="row">
            <div class="col-xl-11 col-xxl-8 col-12">
                <div class="deals-head">
                    <div class="deals-head__title">Лучшие предложения недели</div>
                    <div class="deals-filter filter-js">
                            <button class="deals-filter__item filter-item-js active">Собакам</button>
                            <button class="deals-filter__item filter-item-js">Кошкам</button>
                            <button class="deals-filter__item filter-item-js">Птицам</button>
                            <button class="deals-filter__item filter-item-js">Грызунам</button>
                    </div>
                </div>
            </div>

            <div class="col-xl-1 col-xxl-1 col-12 offset-xxl-3">
                <div class="deals-filter-switch">
                    <div class="deals-filter-switch__item">
                        <button class="deals-filter-switch__button deals-filter-switch__button-prev filter-button-js prev">
                            <svg width="9" height="14" viewBox="0 0 9 14" stroke="white" fill="none">
                                <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-filter') }}" />
                            </svg>
                        </button>
                    </div>
                    <div class="deals-filter-switch__item">
                        <button class="deals-filter-switch__button deals-filter-switch__button-next filter-button-js next">
                            <svg width="9" height="14" viewBox="0 0 9 14" stroke="white" fill="none">
                                <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-filter') }}" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="deals-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="deals-slider__item">
                                    <div class="swiper-card">
                                        <a href="#" class="swiper-card-top">
                                            <div class="swiper-card-labels">
                                                <span class="swiper-card-labels__item swiper-card-labels__item-top">Топ продаж</span>
                                                <span class="swiper-card-labels__item swiper-card-labels__item-sale">Скидка -5%</span>
                                            </div>
                                            <div class="swiper-card-top__img">
                                                <img src="{{asset('img/deals-cards/1.jpg')}}" alt="Brit Premium (Брит Премиум)">
                                            </div>
                                        </a>
                                        <div class="swiper-card-info">
                                            <div class="swiper-card-info__title">Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с
                                                курицей, 4 кг
                                            </div>
                                            <div class="rating">
                                                <a href="#" class="rating-stars">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E0E0E0">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E0E0E0">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E0E0E0">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E0E0E0">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E0E0E0">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                </a>
                                                <span class="rating__reviews">(0)</span>
                                            </div>
                                            <div class="swiper-card-buy">
                                                <div class="swiper-card-wholesale">
                                                    <div class="swiper-card-wholesale__arrow">
                                                        <svg width="11" height="14" viewBox="0 0 11 14" fill="white">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-deal-card') }}" />
                                                        </svg>
                                                    </div>
                                                    <span class="swiper-card-wholesale__price">1 550,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-price">
                                                    <span class="swiper-card-price__old">1 700,22</span>
                                                    <span class="swiper-card-price__current">1 600,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-add">
                                                    <button class="swiper-card-add__button">
                                                        <svg width="21" height="20" viewBox="0 0 21 20" stroke="#3A9EFD" fill="none">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-basket-deal-card') }}" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="deals-slider__item">
                                    <div class="swiper-card">
                                        <a href="#" class="swiper-card-top">
                                            <div class="swiper-card-labels">
                                                <span class="swiper-card-labels__item swiper-card-labels__item-sale">Скидка -5%</span>
                                            </div>
                                            <div class="swiper-card__img">
                                                <img src="{{asset('img/deals-cards/2.jpg')}}" alt="Schesir Dog Small Adult Lamb">
                                            </div>
                                        </a>
                                        <div class="swiper-card-info">
                                            <div class="swiper-card-info__title">Schesir Dog Small Adult Lamb сухой монопротеиновый корм для
                                                собак
                                                малых
                                                пород</div>
                                            <div class="rating">
                                                <div class="rating-stars">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                </div>
                                                <span class="rating__reviews">(12)</span>
                                            </div>
                                            <div class="swiper-card-buy">
                                                <div class="swiper-card-wholesale">
                                                    <div class="swiper-card-wholesale__arrow">
                                                        <svg width="11" height="14" viewBox="0 0 11 14" fill="white">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-deal-card') }}" />
                                                        </svg>
                                                    </div>
                                                    <span class="swiper-card-wholesale__price">от 198,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-price">
                                                    <span class="swiper-card-price__old">от 260,22</span>
                                                    <span class="swiper-card-price__current">от 206,71 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-add">
                                                    <button class="swiper-card-add__button">
                                                        <svg width="21" height="20" viewBox="0 0 21 20" stroke="#3A9EFD" fill="none">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-basket-deal-card') }}" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="deals-slider__item">
                                    <div class="swiper-card">
                                        <a href="#" class="swiper-card-top">
                                            <div class="swiper-card-labels">
                                                <span class="swiper-card-labels__item swiper-card-labels__item-new">Новинка</span>
                                            </div>
                                            <div class="swiper-card__img">
                                                <img src="{{asset('img/deals-cards/3.jpg')}}" alt="Schesir Dog Small Adult Lamb">
                                            </div>
                                        </a>
                                        <div class="swiper-card-info">
                                            <div class="swiper-card-info__title">PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл</div>
                                            <div class="rating">
                                                <div class="rating-stars">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                </div>
                                                <span class="rating__reviews">(65)</span>
                                            </div>
                                            <div class="swiper-card-buy">
                                                <div class="swiper-card-wholesale">
                                                    <div class="swiper-card-wholesale__arrow">
                                                        <svg width="11" height="14" viewBox="0 0 11 14" fill="white">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-deal-card') }}" />
                                                        </svg>
                                                    </div>
                                                    <span class="swiper-card-wholesale__price">Автозаказ</span>
                                                </div>
                                                <div class="swiper-card-price">
                                                    <span class="swiper-card-price__current">1 600,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-add">
                                                    <button class="swiper-card-add__button">
                                                        <svg width="21" height="20" viewBox="0 0 21 20" stroke="#3A9EFD" fill="none">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-basket-deal-card') }}" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="deals-slider__item">
                                    <div class="swiper-card">
                                        <a href="#" class="swiper-card-top">
                                            <div class="swiper-card-labels">
                                                <span class="swiper-card-labels__item swiper-card-labels__item-top">Топ продаж</span>
                                                <span class="swiper-card-labels__item swiper-card-labels__item-sale">Скидка -5%</span>
                                            </div>
                                            <div class="swiper-card__img">
                                                <img src="{{asset('img/deals-cards/4.jpg')}}" alt="Schesir Dog Small Adult Lamb">
                                            </div>
                                        </a>
                                        <div class="swiper-card-info">
                                            <div class="swiper-card-info__title">Scalibor (Скалибор) ошейник 48 см</div>
                                            <div class="rating">
                                                <div class="rating-stars">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                </div>
                                                <span class="rating__reviews">(0)</span>
                                            </div>
                                            <div class="swiper-card-buy">
                                                <div class="swiper-card-wholesale">
                                                    <div class="swiper-card-wholesale__arrow">
                                                        <svg width="11" height="14" viewBox="0 0 11 14" fill="white">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-deal-card') }}" />
                                                        </svg>
                                                    </div>
                                                    <span class="swiper-card-wholesale__price">520,00 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-price">
                                                    <span class="swiper-card-price__old">640,22</span>
                                                    <span class="swiper-card-price__current">560,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-add">
                                                    <button class="swiper-card-add__button">
                                                        <svg width="21" height="20" viewBox="0 0 21 20" stroke="#3A9EFD" fill="none">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-basket-deal-card') }}" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="deals-slider__item">
                                    <div class="swiper-card">
                                        <a href="#" class="swiper-card-top">
                                            <div class="swiper-card-labels">
                                                <span class="swiper-card-labels__item swiper-card-labels__item-top">Топ продаж</span>
                                            </div>
                                            <div class="swiper-card__img">
                                                <img src="{{asset('img/deals-cards/5.jpg')}}" alt="Schesir Dog Small Adult Lamb">
                                            </div>
                                        </a>
                                        <div class="swiper-card-info">
                                            <div class="swiper-card-info__title">1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кгд</div>
                                            <div class="rating">
                                                <div class="rating-stars">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                </div>
                                                <span class="rating__reviews">(0)</span>
                                            </div>
                                            <div class="swiper-card-buy">
                                                <div class="swiper-card-wholesale">
                                                    <div class="swiper-card-wholesale__arrow">
                                                        <svg width="11" height="14" viewBox="0 0 11 14" fill="white">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-deal-card') }}" />
                                                        </svg>
                                                    </div>
                                                    <span class="swiper-card-wholesale__price">1 550,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-price">
                                                    <span class="swiper-card-price__current">1 600,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-add">
                                                    <button class="swiper-card-add__button">
                                                        <svg width="21" height="20" viewBox="0 0 21 20" stroke="#3A9EFD" fill="none">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-basket-deal-card') }}" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="deals-slider__item">
                                    <div class="swiper-card">
                                        <a href="#" class="swiper-card-top">
                                            <div class="swiper-card-labels">
                                                <span class="swiper-card-labels__item swiper-card-labels__item-sale">Скидка -5%</span>
                                            </div>
                                            <div class="swiper-card__img">
                                                <img src="{{asset('img/deals-cards/3.jpg')}}" alt="Schesir Dog Small Adult Lamb">
                                            </div>
                                        </a>
                                        <div class="swiper-card-info">
                                            <div class="swiper-card-info__title">Schesir Dog Small Adult Lamb сухой монопротеиновый корм для
                                                собак
                                                малых
                                                пород</div>
                                            <div class="rating">
                                                <div class="rating-stars">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="#E77E42">
                                                        <use xlink:href="img/sprite.svg#star" />
                                                    </svg>
                                                </div>
                                                <span class="rating__reviews">(12)</span>
                                            </div>
                                            <div class="swiper-card-buy">
                                                <div class="swiper-card-wholesale">
                                                    <div class="swiper-card-wholesale__arrow">
                                                        <svg width="11" height="14" viewBox="0 0 11 14" fill="white">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-deal-card') }}" />
                                                        </svg>
                                                    </div>
                                                    <span class="swiper-card-wholesale__price">от 198,22 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-price">
                                                    <span class="swiper-card-price__old">от 260,22</span>
                                                    <span class="swiper-card-price__current">от 206,71 &#8372;</span>
                                                </div>
                                                <div class="swiper-card-add">
                                                    <button class="swiper-card-add__button">
                                                        <svg width="21" height="20" viewBox="0 0 21 20" stroke="#3A9EFD" fill="none">
                                                            <use xlink:href="{{ asset('img/sprite.svg#icon-basket-deal-card') }}" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="useful-block">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1 col-xxl-4 offset-xxl-0">
                <div class="search-card">
                    <div class="container">
                        <div class="search-top">
                            <div class="row">
                                <div class="search-top__subtitle">
                                    <div class="col-12">
                                        <span>Объявления о продаже</span>
                                    </div>
                                </div>
                                <div class="search-top__logo">
                                    <div class="col-12">
                                        <img src="{{asset('img/search-card/paw.png')}}" alt="Paw">
                                    </div>
                                </div>
                                <div class="search-top__title">
                                    <div class="col-12">
                                        <span>Найди друга</span>
                                    </div>
                                </div>
                                <div class="search-top__text">
                                    <div class="col-12 px-2">
                                        <span>Ищете питомца? Посмотрите сотни объявлений от проверенных разводителей.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-tile">
                            <div class="row">
                                <div class="col-4 p-2">
                                    <div class="search-tile-item">
                                        <a href="#" class="search-tile-item__link">
                                            <img src="{{asset('img/search-card/1.jpg')}}" alt="Animals">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 p-2">
                                    <div class="search-tile-item">
                                        <a href="#" class="search-tile-item__link">
                                            <img src="{{asset('img/search-card/2.jpg')}}" alt="Animals">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 p-2">
                                    <div class="search-tile-item">
                                        <a href="#" class="search-tile-item__link">
                                            <img src="{{asset('img/search-card/3.jpg')}}" alt="Animals">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 p-2">
                                    <div class="search-tile-item">
                                        <a href="#" class="search-tile-item__link">
                                            <img src="{{asset('img/search-card/4.jpg')}}" alt="Animals">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 p-2">
                                    <div class="search-tile-item">
                                        <a href="#" class="search-tile-item__link">
                                            <img src="{{asset('img/search-card/5.jpg')}}" alt="Animals">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 p-2">
                                    <div class="search-tile-item">
                                        <a href="#" class="search-tile-item__link">
                                            <img src="{{asset('img/search-card/6.jpg')}}" alt="Animals">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-bottom">
                            <div class="row">
                                <div class="search-bottom-item">
                                    <div class="col-12">
                                        <a href="#" class="search-bottom-item__link">Все объявления
                                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" stroke="white">
                                                <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-search-card') }}" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-12 col-xxl-7 offset-xxl-1">
                <div class="blog">
                    <div class="blog__title">Полезные материалы</div>
                    <div class="blog-filter">
                        <div class="blog-filter__group">
                            <div class="blog-filter__item">
                                <button class="blog-filter__button">Новости</button>
                            </div>
                            <div class="blog-filter__item">
                                <button class="blog-filter__button">Полезные советы</button>
                            </div>
                            <div class="blog-filter__item">
                                <button class="blog-filter__button">Видео</button>
                            </div>
                            <div class="blog-filter__item">
                                <button class="blog-filter__button">Обзоры товаров</button>
                            </div>
                            <div class="blog-filter__item">
                                <button class="blog-filter__button">Лайфхаки</button>
                            </div>
                        </div>
                        <div class="blog-filter__follow">
                            <a href="#" class="blog-filter__link">Перейти в блог</a>
                        </div>
                    </div>

                    <div class="blog-tile">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-xs-12">
                                <div class="blog-card">
                                    <a href="#" class="blog-card__top">
                                        <div class="blog-card__labels">
                                            <div class="blog-card__label blog-card__label--useful">Полезные советы</div>
                                        </div>
                                        <div class="blog-card__img">
                                            <img src="{{asset('img/blog-card/1.jpg')}}" alt="Cat">
                                        </div>
                                    </a>
                                    <div class="blog-card__info">
                                        <div class="blog-card__date">
                                            <div class="blog-card__day">22</div>
                                            <div class="blog-card__month">сент</div>
                                        </div>
                                        <a href="#" class="blog-card__text">Как выбрать корм для питомца. Советы профессионалов. Выбираем
                                            корм
                                            для котов 7+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-xs-12">
                                <div class="blog-card">
                                    <a href="#" class="blog-card__top">
                                        <div class="blog-card__labels">
                                            <div class="blog-card__label blog-card__label--lifehack">Лайфхаки</div>
                                        </div>
                                        <div class="blog-card__img">
                                            <img src="{{asset('img/blog-card/2.jpg')}}" alt="Dog">
                                        </div>
                                    </a>
                                    <div class="blog-card__info">
                                        <div class="blog-card__date">
                                            <div class="blog-card__day">19</div>
                                            <div class="blog-card__month">сент</div>
                                        </div>
                                        <a href="#" class="blog-card__text">Как научить собаку команде "принеси тапочки" в домашних
                                            условиях</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-xs-12">
                                <div class="blog-card blog-card--video">
                                    <a href="#" class="blog-card__top">
                                        <div class="blog-card__labels">
                                            <div class="blog-card__label blog-card__label--video">Видео</div>
                                        </div>
                                        <div class="blog-card__img">
                                            <img src="{{asset('img/blog-card/3.jpg')}}" alt="Cat">
                                        </div>
                                        <div class="blog-card__play-img">
                                            <svg width="17" height="20" viewBox="0 0 17 20" fill="white">
                                                <use xlink:href="{{ asset('img/sprite.svg#icon-play-img') }}" />
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="blog-card__info">
                                        <div class="blog-card__date">
                                            <div class="blog-card__day">14</div>
                                            <div class="blog-card__month">сент</div>
                                        </div>
                                        <a href="#" class="blog-card__text">Обзор товаров. Выбираем лучшую когтеточку для вашего кота.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-xs-12">
                                <div class="blog-card">
                                    <a href="#" class="blog-card__top">
                                        <div class="blog-card__labels">
                                            <div class="blog-card__label blog-card__label--review">Обзоры товаров</div>
                                            <div class="blog-card__label blog-card__label--news">Новости</div>
                                        </div>
                                        <div class="blog-card__img">
                                            <img src="{{asset('img/blog-card/4.jpg')}}" alt="Dog">
                                        </div>
                                    </a>
                                    <div class="blog-card__info">
                                        <div class="blog-card__date">
                                            <div class="blog-card__day">09</div>
                                            <div class="blog-card__month">сент</div>
                                        </div>
                                        <a href="#" class="blog-card__text">Игрушка для собак Trixie Мяч светящийся с шипами</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="benefits">
    <div class="container">
        <div class="benefits__inner">
            <div class="row">
                <div class="col-6 col-lg-3 col-xl-2 offset-xl-2">
                    <div class="benefits-item">
                        <div class="benefits-item__img">
                            <svg width="45" height="32" viewBox="0 0 45 32" fill="#E9793A">
                                <use xlink:href="{{ asset('img/sprite.svg#icon-benefits-delivery') }}" />
                            </svg>
                        </div>
                        <div class="benefits-item__text">Бесплатная доставка при заказе от 300 грн</div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-xl-2">
                    <div class="benefits-item">
                        <div class="benefits-item__img">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="#E9793A">
                                <use xlink:href="{{ asset('img/sprite.svg#icon-benefits-sale') }}" />
                            </svg>
                        </div>
                        <div class="benefits-item__text">Акции и скидки среди 2400 товаров</div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-xl-2">
                    <div class="benefits-item">
                        <div class="benefits-item__img">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="#E9793A">
                                <use xlink:href="{{ asset('img/sprite.svg#icon-benefits-outlets') }}" />
                            </svg>
                        </div>
                        <div class="benefits-item__text">Более 100 магазинов по всей Украине</div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-xl-2">
                    <div class="benefits-item">
                        <div class="benefits-item__img">
                            <svg width="40" height="26" viewBox="0 0 40 26" fill="none" stroke="#E9793A">
                                <use xlink:href="{{ asset('img/sprite.svg#icon-benefits-discount') }}" />
                            </svg>
                        </div>
                        <div class="benefits-item__text">Дисконтная программа ZooBonus.ua</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="seo">
    <div class="container">
        <div class="seo__inner">
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <span class="seo__title">Зоомагазин для домашних питомцев</span>
                    <div class="seo__text">Любящие владельцы собак и кошек всегда хотят порадовать своих любимцев новыми
                        игрушками, приобрести качественную амуницию, обеспечить животному полноценное питание и отдых, заботятся
                        о
                        его здоровье. Зоомагазин — это любимое место для всех любителей животных.</div>
                    <span class="seo__subtitle">Каким должен быть хороший магазин товаров для животных</span>
                    <div class="seo__text seo__text--hidden">Многие владельцы животных часами просматривают адреса зоомагазинов
                        в
                        интернете, читают отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям,
                        важным для покупателя: <br>
                        Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают отзывы. Далеко не
                        каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя:</div>
                    <button class="seo__button">Показать все</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="involve">
    <div class="container">
        <div class="involve__inner">
            <div class="row">
                <div class=" col-12 col-xl-2 offset-lg-3 offset-xl-2">
                    <div class="involve__img">
                        <img class="involve__img-dog" src="{{asset('img/involve/dog.png')}}" alt="Dog">
                        <img class="involve__img-cat" src="{{asset('img/involve/cat.png')}}" alt="Cat">
                    </div>
                </div>
                <div class="col-12 col-xl-5 offset-xl-1">
                    <div class="involve-content">
                        <div class="involve-content__text">Акции, скидки и специальные предложения для зарегистрированных
                            пользователей</div>
                        <a href="#" class="involve-content__registration">зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-12 col-lg-3 col-xl-2">
                    <div class="footer-logo">
                        <div class="footer-logo__img">
                            <a href="#" class="footer-logo__link">
                                <svg width="114" height="41" viewBox="0 0 114 41" fill="#2C9323">
                                    <use xlink:href="{{ asset('img/sprite.svg#icon-logo') }}" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer-logo__caption">&#169; 2020 Интернет-магазин</div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-2 offset-xl-1">
                    <div class="footer-social">
                        <div class="footer-social__item">
                            <a href="#" class="footer-social__link">
                                <svg width="12" height="24" viewBox="0 0 12 24" fill="white">
                                    <use xlink:href="{{ asset('img/sprite.svg#icon-fb') }}" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer-social__item">
                            <a href="#" class="footer-social__link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                                    <use xlink:href="{{ asset('img/sprite.svg#icon-inst') }}" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer-social__item">
                            <a href="#" class="footer-social__link">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="white">
                                    <use xlink:href="{{ asset('img/sprite.svg#icon-viber') }}" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 offset-xl-1">
                    <div class="footer-communication">
                        <a href="#" class="footer-communication-chat" target="_blank">
                            <div class="footer-communication-chat__img">
                                <svg width="34" height="33" viewBox="0 0 34 33" fill="#E77E42">
                                    <use xlink:href="{{ asset('img/sprite.svg#icon-chat') }}" />
                                </svg>
                            </div>
                            <div class="footer-communication-chat__text">Чат онлайн</div>
                        </a>
                        <a href="mailto:info@wezom.com.ua" class="footer-communication-message" target="_blank">
                            <div class="footer-communication-message__img">
                                <svg width="27" height="24" viewBox="0 0 27 24" fill="#E77E42">
                                    <use xlink:href="{{ asset('img/sprite.svg#icon-mail') }}" />
                                </svg>
                            </div>
                            <div class="footer-communication-message__text">Написать нам</div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-1 col-xl-2 pe-xl-2">
                    <div class="to-top">
                        <a href="#header" class="to-top__link">
                            <span class="to-top__text">Вверх</span>
                            <span class="to-top__img">
                  <svg width="14" height="9" viewBox="0 0 14 9" stroke="white" fill="none">
                    <use xlink:href="{{ asset('img/sprite.svg#icon-arrow-to-top') }}" />
                  </svg>
                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-main">
            <div class="row">
                <div class="col-12 col-lg-3 col-xl-2">
                    <div class="footer-terms">
                        <ul class="footer-terms-list">
                            <li class="footer-terms-list__item">
                                <a href="#" class="footer-terms-list__link" target="_blank">Условия использования сайта</a>
                            </li>
                            <li class="footer-terms-list__item">
                                <a href="#" class="footer-terms-list__link" target="_blank">Защита персональных данных</a>
                            </li>
                            <li class="footer-terms-list__item">
                                <a href="#" class="footer-terms-list__link" target="_blank">Карта сайта</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-2 offset-xl-1">
                    <div class="footer-firm">
                        <ul class="footer-firm-list">
                            <li class="footer-firm-list__title footer-title-js">Компания
                                <ul class="footer-firm-list__group">
                                    <li class="footer-firm-list__item">
                                        <a href="#" class="footer-firm-list__link" target="_blank">О компании</a>
                                    </li>
                                    <li class="footer-firm-list__item">
                                        <a href="#" class="footer-firm-list__link" target="_blank">Адреса магазинов «ZooBonus»</a>
                                    </li>
                                    <li class="footer-firm-list__item">
                                        <a href="#" class="footer-firm-list__link" target="_blank">Вакансии</a>
                                    </li>
                                    <li class="footer-firm-list__item">
                                        <a href="#" class="footer-firm-list__link" target="_blank">Благотворительность</a>
                                    </li>
                                    <li class="footer-firm-list__item">
                                        <a href="#" class="footer-firm-list__link" target="_blank">Контакты</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3 offset-xl-1">
                    <div class="footer-customer">
                        <ul class="footer-customer-list">
                            <li class="footer-customer-list__title footer-title-js">Покупателям
                                <ul class="footer-customer-list__group">
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">Доставка и оплата</a>
                                    </li>
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">FAQ</a>
                                    </li>
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">Подарочные сертификаты</a>
                                    </li>
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">Акции </a>
                                    </li>
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">Породы животных</a>
                                    </li>
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">Дисконтная программа</a>
                                    </li>
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">Блог</a>
                                    </li>
                                    <li class="footer-customer-list__item">
                                        <a href="#" class="footer-customer-list__link" target="_blank">Фотогалерея</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3">
                    <div class="footer-contacts">
                        <div class="footer-contacts__title">Контакты</div>
                        <div class="footer-services">
                            <div class="footer-phone">
                                <span class="footer-phone__subtitle">Информационная служба: </span>
                                <a href="tel:+380444903100" class="footer-phone__link" target="_blank">(044) 490 31
                                    00</a>
                                <div class="footer-phone__text">Ежедневно с 08:30-21:00 </div>
                            </div>
                            <div class="footer-mail">
                                <span class="footer-mail__text">Email:</span>
                                <a href="mailto:info@wezom.com.ua" class="footer-mail__link" target="_blank">info@wezom.com.ua</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row">
                <div class="col-12 col-xl-9 offset-xl-3">
                    <div class="footer-bottom__inner">
                        <div class="footer-pay">
                            <div class="footer-pay__item">
                                <img src="{{asset('img/footer/pay-portmone.png')}}" alt="Portmone">
                            </div>
                            <div class="footer-pay__item">
                                <img src="{{asset('img/footer/pay-mc.png')}}" alt="Master Card">
                            </div>
                            <div class="footer-pay__item">
                                <img src="{{asset('img/footer/pay-visa.png')}}" alt="Visa">
                            </div>
                        </div>
                        <div class="footer-development">
                            <span class="footer-development__text">Разработано в</span>
                            <a href="#" class="footer-development__link" target="_blank">WEZOM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

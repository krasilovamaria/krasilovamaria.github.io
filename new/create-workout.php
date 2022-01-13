<!DOCTYPE php>
<php lang="ru">
  <head>
    <title>Создать тренировку - YogaApp</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description" content="YogaApp — тренировки"/>
    <meta name="format-detection" content="telephone=no"/>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png"/>
    <link rel="manifest" href="./favicon/site.webmanifest" crossorigin="use-credentials"/>
    <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#000000"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="preload" href="fonts/montserrat-regular.woff2" as="font" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.min.css"/>
  </head>
  <body>
    <div class="visually-hidden"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="icon-account" viewBox="0 0 50 50">
  <circle cx="25" cy="25" r="25" fill="black"/>
  <path d="M23.4023 17.7812V32H21.5273V19.3242H16.4297L16.1758 24.959C16.0781 26.847 15.8828 28.2663 15.5898 29.2168C15.3034 30.1673 14.8802 30.8672 14.3203 31.3164C13.7604 31.7591 13.0117 31.987 12.0742 32H11.459V30.4668L11.8496 30.4473C12.4551 30.4017 12.9206 30.2064 13.2461 29.8613C13.5716 29.5098 13.819 28.9531 13.9883 28.1914C14.1576 27.4297 14.278 26.2578 14.3496 24.6758L14.6426 17.7812H23.4023ZM30.502 25.6133H28.7734V32H26.8984V17.7812H28.7734V24.0508H30.2383L35.209 17.7812H37.543L32.1133 24.6758L37.9434 32H35.6484L30.502 25.6133Z" fill="white"/>
<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"/>

  <circle cx="25" cy="25" r="25" fill="black"/>
  <path d="M23.4023 17.7812V32H21.5273V19.3242H16.4297L16.1758 24.959C16.0781 26.847 15.8828 28.2663 15.5898 29.2168C15.3034 30.1673 14.8802 30.8672 14.3203 31.3164C13.7604 31.7591 13.0117 31.987 12.0742 32H11.459V30.4668L11.8496 30.4473C12.4551 30.4017 12.9206 30.2064 13.2461 29.8613C13.5716 29.5098 13.819 28.9531 13.9883 28.1914C14.1576 27.4297 14.278 26.2578 14.3496 24.6758L14.6426 17.7812H23.4023ZM30.502 25.6133H28.7734V32H26.8984V17.7812H28.7734V24.0508H30.2383L35.209 17.7812H37.543L32.1133 24.6758L37.9434 32H35.6484L30.502 25.6133Z" fill="white"/>
</symbol><symbol id="icon-arrow-dark" viewBox="0 0 50 50">
  <circle cx="25" cy="25" r="25" fill="#2C2727"/>
  <path d="M37.0607 26.0607C37.6464 25.4749 37.6464 24.5251 37.0607 23.9393L27.5147 14.3934C26.9289 13.8076 25.9792 13.8076 25.3934 14.3934C24.8076 14.9792 24.8076 15.9289 25.3934 16.5147L33.8787 25L25.3934 33.4853C24.8076 34.0711 24.8076 35.0208 25.3934 35.6066C25.9792 36.1924 26.9289 36.1924 27.5147 35.6066L37.0607 26.0607ZM14 26.5H36V23.5H14V26.5Z" fill="white"/>
</symbol><symbol id="icon-arrow" viewBox="0 0 50 50">
  <circle cx="25" cy="25" r="25" fill="currentColor"/>
  <path d="M37.0607 26.0607C37.6464 25.4749 37.6464 24.5251 37.0607 23.9393L27.5147 14.3934C26.9289 13.8076 25.9792 13.8076 25.3934 14.3934C24.8076 14.9792 24.8076 15.9289 25.3934 16.5147L33.8787 25L25.3934 33.4853C24.8076 34.0711 24.8076 35.0208 25.3934 35.6066C25.9792 36.1924 26.9289 36.1924 27.5147 35.6066L37.0607 26.0607ZM14 26.5H36V23.5H14V26.5Z" fill="white"/>
</symbol><symbol id="icon-burger" viewBox="0 0 40 23">
    <rect width="40" height="2" rx="2.5" fill="#e8eaed"/>
    <rect y="9" width="40" height="2" rx="2.5" fill="#e8eaed"/>
    <rect y="18" width="40" height="2" rx="2.5" fill="#e8eaed"/>
</symbol><symbol id="icon-close" viewBox="0 0 20 20">
    <path d="M.293 18.291a1 1 0 101.414 1.414L10 11.413l8.292 8.292a1 1 0 101.414-1.414l-8.292-8.292 8.292-8.292A1 1 0 1018.291.293L9.999 8.585 1.707.293A1 1 0 10.293 1.707L8.585 10 .293 18.291z"/>
</symbol><symbol id="icon-instagram" viewBox="0 0 80 80">
  <circle cx="40" cy="40" r="40" fill="white"/>
  <rect x="17" y="16" width="46" height="47" rx="15" fill="#000000"/>
  <circle cx="40" cy="40" r="10" fill="white"/>
  <circle cx="40" cy="40" r="8" fill="#000000"/>
  <circle cx="52.5" cy="25.5" r="2.5" fill="white"/>
</symbol></svg>
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="header__wrapper"><a class="header__logo" href="main.php" aria-label="Переход на главную"><svg width="282" height="140" viewBox="0 0 282 140" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M218.731 70.4087C236.533 70.4087 250.865 54.4532 250.865 34.8631C250.865 19.5759 242.136 6.5009 229.839 1.49603C259.163 7.29877 281.5 35.6519 281.5 69.9087C281.5 108.393 253.351 139.5 218.731 139.5C218.018 139.5 217.34 139.449 216.638 139.395C216.278 139.368 215.912 139.341 215.533 139.319C199.874 137.55 187.596 122.88 187.596 104.954C187.596 85.8178 201.575 70.4087 218.731 70.4087ZM207.686 104.954C207.686 111.63 212.586 117.136 218.731 117.136C224.876 117.136 229.776 111.63 229.776 104.954C229.776 98.2783 224.876 92.7725 218.731 92.7725C212.586 92.7725 207.686 98.2783 207.686 104.954Z" fill="white" stroke="black"/>
  <path d="M63.2692 69.5913C45.4675 69.5913 31.1346 85.5468 31.1346 105.137C31.1346 120.424 39.8639 133.499 52.1614 138.504C22.8375 132.701 0.5 104.348 0.5 70.0913C0.5 31.6066 28.6487 0.5 63.2692 0.5C63.9817 0.5 64.6605 0.551398 65.3622 0.604533C65.722 0.631781 66.0879 0.659485 66.4675 0.680949C82.1258 2.45028 94.4038 17.1201 94.4038 35.0456C94.4038 54.1822 80.4248 69.5913 63.2692 69.5913ZM74.3141 35.0456C74.3141 28.3695 69.414 22.8638 63.2692 22.8638C57.1245 22.8638 52.2244 28.3695 52.2244 35.0456C52.2244 41.7217 57.1245 47.2275 63.2692 47.2275C69.414 47.2275 74.3141 41.7217 74.3141 35.0456Z" fill="black" stroke="black"/>
  <path d="M134.221 138.5L131.962 138V137.5L134.221 136.5L134.673 135L135.577 117.5L132.413 111L131.962 94.5L130.154 88L117.048 71L115.24 63.5L112.077 57L108.913 46.5L106.202 42.5L104.846 36.5L103.038 35L100.779 33.5L100.327 30.5L100.779 27H102.135L108.462 39.5L110.269 41.5L112.529 46.5L115.24 51.5L118.856 56.5L120.663 60L122.019 63.5L124.279 65.5V63.5L122.471 58L119.76 53L115.24 45.5L112.981 42.5L110.269 36.5L102.135 26H108.462L108.913 30.5L112.077 32.5L112.981 35L114.337 38L120.663 44.5L124.279 49.5L131.51 57.5L134.221 61.5L136.029 66L139.192 70L140.548 79L143.712 82L151.846 90.5L155.913 88.5L164.952 88L168.567 86L176.25 85.5L178.51 85L179.865 83L183.933 82L186.644 83V85.5H184.837L178.058 88L170.375 91.5L161.788 94L153.654 98.5H147.327V100L150.038 102L149.587 106L145.971 110L142.356 109L140.548 106L140.096 104.5L139.192 108L140.096 109.5L139.192 119.5L138.288 135L140.548 136L141.452 138L139.644 139L138.288 140H136.481L134.221 138.5Z" fill="black"/>
  <ellipse cx="218.279" cy="104.5" rx="11.2981" ry="12.5" fill="black"/>
</svg>
</a>
          <nav class="main-nav">
            <button class="main-nav__toggle button" type="button" aria-label="Переключатель отображения меню" aria-pressed="false">
              <svg width="40" height="23" aria-hidden="true">
                <use xlink:href="#icon-burger"></use>
              </svg>
            </button>
            <div class="main-nav__wrapper">
              <div class="main-nav__list-menu">
                <button class="main-nav__close-button button" type="button" aria-label="Закрыть меню">
                  <svg width="40" height="23" aria-hidden="true">
                    <use xlink:href="#icon-close"></use>
                  </svg>
                </button>
                <ul class="main-nav__list">
                  <li class="main-nav__item"><a class="main-nav__link" href="workout-login.php">Тренировки</a>
                  </li>
                  <li class="main-nav__item"><a class="main-nav__link" href="business.php">Возможности</a>
                  </li>
                  <li class="main-nav__item"><a class="main-nav__link" href="contacts.php">Контакты</a>
                  </li>
                </ul>
              </div>
              <ul class="main-nav__list main-nav__list--buttons">
                <li class="main-nav__item main-nav__item--reg"><a class="button button--border-circle" href="account.php">Личный кабинет</a></li>
                <li class="main-nav__item main-nav__item--acc"><a class="button button--no-padding" href="account.php">
                    <svg width="50" height="50" aria-hidden="true">
                      <use xlink:href="#icon-account"></use>
                    </svg></a></li>
                <li class="main-nav__item"><a class="button button--circle" href="main.php">Выйти</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <main>
        <h1 class="visually-hidden">Создать тренировку</h1>
        <section class="exercises-container">
          <sidebar class="sidebar">
            <ul class="sidebar__list">
              <li class="sidebar__item"><a class="sidebar__link" href="workout.php">Все видео</a>
              </li>
              <li class="sidebar__item"><a class="sidebar__link" href="set-workout.php">Комплекс упражнений</a>
              </li>
              <li class="sidebar__item"><a class="sidebar__link sidebar__link--active">Создать тренировку</a>
              </li>
              <li class="sidebar__item"><a class="sidebar__link" href="my-workout-set.php">Мои тренировки</a>
              </li>
              <li class="sidebar__item"><a class="sidebar__link" href="favorites.php">Избранное</a>
              </li>
            </ul>
          </sidebar>
          <div class="workout">
            <div class="container">
              <div class="workout__wrapper">
                <form class="form" method="get" action="#">
                  <div class="form__col">
                    <div class="input input--select">
                      <select name="directed" data-select="directed">
                        <option selected="selected" disabled="disabled">Выберите направление</option>
                        <option value="Спина">Спина</option>
                        <option value="Ягодицы">Ягодицы</option>
                        <option value="Руки">Руки</option>
                      </select>
                    </div>
                  </div>
                  <div class="form__col">
                    <p>Установите уровень сложности:</p>
                    <div class="form__row">
                      <div class="input-radio">
                        <label for="level1">Легко</label>
                        <input name="level" id="level1" type="radio" value="Легко" checked="checked" data-name="level"/>
                      </div>
                      <div class="input-radio">
                        <label for="level2">Средне</label>
                        <input name="level" id="level2" type="radio" value="Средне" data-name="level"/>
                      </div>
                      <div class="input-radio">
                        <label for="level3">Сложно</label>
                        <input name="level" id="level3" type="radio" value="Сложно" data-name="level"/>
                      </div>
                    </div>
                  </div>
                  <div class="form__col">
                    <p>Выберите количество упражнений в комплексе:</p>
                    <div class="form__row">
                      <div class="input-radio">
                        <label for="amountEx5">5</label>
                        <input name="amountEx" id="amountEx5" type="radio" value="5" checked="checked" data-name="amountEx"/>
                      </div>
                      <div class="input-radio">
                        <label for="amountEx10">10</label>
                        <input name="amountEx" id="amountEx10" type="radio" value="10" data-name="amountEx"/>
                      </div>
                      <div class="input-radio">
                        <label for="amountEx15">15</label>
                        <input name="amountEx" id="amountEx15" type="radio" value="15" data-name="amountEx"/>
                      </div>
                    </div>
                  </div>
                  <div class="form__col">
                    <p>Установите количество повторений Вашей тренировки:</p>
                    <div class="form__row">
                      <div class="input-radio">
                        <label for="amount1">1</label>
                        <input name="amount" id="amount1" type="radio" value="1" checked="checked" data-name="amount"/>
                      </div>
                      <div class="input-radio">
                        <label for="amount2">2</label>
                        <input name="amount" id="amount2" type="radio" value="2" data-name="amount"/>
                      </div>
                      <div class="input-radio">
                        <label for="amount3">3</label>
                        <input name="amount" id="amount3" type="radio" value="3" data-name="amount"/>
                      </div>
                    </div>
                  </div>
                  <div class="form__col form__col--height">
                    <button class="button button--border-circle" type="button" data-modal="create-workout">Добавить упражнения</button>
                  </div>
                  <div class="form__col form__wrapper-video">
                    <div class="card-gif">
                      <video src="video/w_1.mp4" width="200" height="100" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                      <button class="button button--yellow card-gif__remove" type="button">
                        <svg width="20" height="20" aria-hidden="true">
                          <use xlink:href="#icon-close"></use>
                        </svg>
                      </button>
                    </div>
                    <div class="card-gif">
                      <video src="video/w_1.mp4" width="200" height="100" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                      <button class="button button--yellow card-gif__remove" type="button">
                        <svg width="20" height="20" aria-hidden="true">
                          <use xlink:href="#icon-close"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="form__col form__col--start">
                    <button class="button button--yellow" type="submit">Начать тренировку</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer class="footer">
        <div class="container">
          <div class="footer__wrapper"><a class="footer__logo" href="main.php" aria-label="Переход на главную"><svg width="282" height="140" viewBox="0 0 282 140" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M218.731 70.4087C236.533 70.4087 250.865 54.4532 250.865 34.8631C250.865 19.5759 242.136 6.5009 229.839 1.49603C259.163 7.29877 281.5 35.6519 281.5 69.9087C281.5 108.393 253.351 139.5 218.731 139.5C218.018 139.5 217.34 139.449 216.638 139.395C216.278 139.368 215.912 139.341 215.533 139.319C199.874 137.55 187.596 122.88 187.596 104.954C187.596 85.8178 201.575 70.4087 218.731 70.4087ZM207.686 104.954C207.686 111.63 212.586 117.136 218.731 117.136C224.876 117.136 229.776 111.63 229.776 104.954C229.776 98.2783 224.876 92.7725 218.731 92.7725C212.586 92.7725 207.686 98.2783 207.686 104.954Z" fill="white" stroke="black"/>
  <path d="M63.2692 69.5913C45.4675 69.5913 31.1346 85.5468 31.1346 105.137C31.1346 120.424 39.8639 133.499 52.1614 138.504C22.8375 132.701 0.5 104.348 0.5 70.0913C0.5 31.6066 28.6487 0.5 63.2692 0.5C63.9817 0.5 64.6605 0.551398 65.3622 0.604533C65.722 0.631781 66.0879 0.659485 66.4675 0.680949C82.1258 2.45028 94.4038 17.1201 94.4038 35.0456C94.4038 54.1822 80.4248 69.5913 63.2692 69.5913ZM74.3141 35.0456C74.3141 28.3695 69.414 22.8638 63.2692 22.8638C57.1245 22.8638 52.2244 28.3695 52.2244 35.0456C52.2244 41.7217 57.1245 47.2275 63.2692 47.2275C69.414 47.2275 74.3141 41.7217 74.3141 35.0456Z" fill="black" stroke="black"/>
  <path d="M134.221 138.5L131.962 138V137.5L134.221 136.5L134.673 135L135.577 117.5L132.413 111L131.962 94.5L130.154 88L117.048 71L115.24 63.5L112.077 57L108.913 46.5L106.202 42.5L104.846 36.5L103.038 35L100.779 33.5L100.327 30.5L100.779 27H102.135L108.462 39.5L110.269 41.5L112.529 46.5L115.24 51.5L118.856 56.5L120.663 60L122.019 63.5L124.279 65.5V63.5L122.471 58L119.76 53L115.24 45.5L112.981 42.5L110.269 36.5L102.135 26H108.462L108.913 30.5L112.077 32.5L112.981 35L114.337 38L120.663 44.5L124.279 49.5L131.51 57.5L134.221 61.5L136.029 66L139.192 70L140.548 79L143.712 82L151.846 90.5L155.913 88.5L164.952 88L168.567 86L176.25 85.5L178.51 85L179.865 83L183.933 82L186.644 83V85.5H184.837L178.058 88L170.375 91.5L161.788 94L153.654 98.5H147.327V100L150.038 102L149.587 106L145.971 110L142.356 109L140.548 106L140.096 104.5L139.192 108L140.096 109.5L139.192 119.5L138.288 135L140.548 136L141.452 138L139.644 139L138.288 140H136.481L134.221 138.5Z" fill="black"/>
  <ellipse cx="218.279" cy="104.5" rx="11.2981" ry="12.5" fill="black"/>
</svg>
</a>
            <div class="footer__box-text">
              <div class="footer__text">
                <p>ИП Дрон Александр</p>
                <p>ОГРНИП 000000000000000</p>
                <p>г.Красноярск</p>
              </div>
              <div class="footer__link"><a href="contacts.php">Контакты</a><a href="confidentiality.php">Политика конфиденциальности</a><a href="offer.php">Договор оферты</a></div>
            </div>
            <div class="footer__socials"><a href="https://www.instagram.com/aleks_dron/" aria-label="Ссылка на истаграм" target="_blank" rel="nofollow noopener noreferrer">
                <svg width="80" height="80" aria-hidden="true">
                  <use xlink:href="#icon-instagram"></use>
                </svg></a></div>
          </div>
        </div>
      </footer>
    </div>
    <div class="modal modal--preload modal--create-workout">
      <div class="modal__wrapper">
        <div class="modal__overlay"></div>
        <div class="modal__content">
          <div class="modal-create-workout">
            <div class="modal-create-workout__wrapper-desc">
              <div class="modal-create-workout__row">
                <p class="modal-create-workout__bold">Направление:</p>
                <p data-print="directed">Пожалуйста закройте данное модальное окно и выберите направление тренировки</p>
              </div>
              <div class="modal-create-workout__row">
                <p class="modal-create-workout__bold">Уровень сложности:</p>
                <p data-print="level">Легко</p>
              </div>
              <p>Отметьте <span data-print="amount-video"> 5 </span> видео, которые хотели бы для своей тренировки</p>
            </div>
            <div class="modal-create-workout__wrapper">
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--yellow" type="button">Добавить</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--green" type="button">Добавлено</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--yellow" type="button">Добавить</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--green" type="button">Добавлено</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--yellow" type="button">Добавить</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--yellow" type="button">Добавить</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--yellow" type="button">Добавить</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--yellow" type="button">Добавить</button>
              </div>
              <div class="card-video-create-workout">
                <p>Наклоны вперед</p>
                <video src="video/w_1.mp4" width="400" height="200" type="video/mp4" poster="img/content/poster/w_1.jpg" playsinline="playsinline" controls="controls" preload="preload"></video>
                <button class="button button--yellow" type="button">Добавить</button>
              </div>
            </div>
            <button class="button button--border-circle-black" type="button">Добавить выбранное в тренировку</button>
          </div>
          <button class="modal__close-btn" type="button" aria-label="Закрыть попап">
            <svg width="15" height="15" aria-hidden="true">
              <use xlink:href="#icon-close"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/main.min.js"></script>
  </body>
</php>
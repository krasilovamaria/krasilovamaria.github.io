<!DOCTYPE php>
<php lang="ru">
  <head>
    <title>Восстановление пароля - YogaApp</title>
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
        <div class="header__wrapper">
          <nav class="main-nav"><a class="button button--icon-left" href="main.php">
              <svg width="50" height="50" aria-hidden="true">
                <use xlink:href="#icon-arrow"></use>
              </svg></a>
          </nav>
        </div>
      </header>
      <main class="login">
        <h1 class="visually-hidden">Восстановление пароля</h1>
        <h2>Отправили Вам на почту пароль!</h2><a class="button button--no-padding" href="login.php">Попровать снова войти в аккаунт</a>
      </main>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/main.min.js"></script>
  </body>
</php>
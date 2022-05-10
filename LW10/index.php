<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Лабораторная 10</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <!-- <script src="../script/script.js"></script> -->
</head>
<body>
  <div class="popup__background"></div>
  <?php include 'src/form.php' ?>   
  <div class="header">
    <img class="header__logotype" src="images/logotype.svg" alt="logotype" />
    <div class="header__menu menu">
      <p class="menu__link link-about">Что будет на курсе?</p>
      <p class="menu__link link-question">Вопросы</p>
      <p class="menu__link link-author">Автор</p> 
      <a href="#" class="header__button button">Записаться на курс</a>
    </div>
    <!-- <button class="header__button button">Записаться на курс</button> -->
  </div>
   <div class="main">
    <div class="main__blurb blurb">
      <h1 class="blurb__title">Не <span class="span-color">делай</span> это</h1>
      <p class="blurb__subtitle">Онлайн-курс для творческих людей, о том, как управлять своим временем </p>
      <a href="#" class="blurb__button button">Записаться на курс</a>
    </div>
    <img class="blurb__image" src="images/Done.png" alt="done" />
  </div>
  <div class="row">
    <div class="row__panel">
      <div class="row__column column column_left">
        <img class="column__image image_left" src="images/Clock.svg" alt="clock" />
        <p class="column__text text_short">Для тех, у кого слишком много идей и слишком мало времени</p>
      </div> 
      <div class="row__column column_middle">
        <img class="column__image image_middle" src="images/Notebook.svg" alt="notebook" />
        <p class="column__text text_long">Метод «списка не дел», который позволит успевать и реализовывать</p>
      </div>
      <div class="row__column column_right">
        <img class="column__image image_right" src="images/target.svg" alt="target" />
        <p class="column__text text_long">Курс научит творческих людей сосредоточиваться</p>
      </div>
    </div>
  </div>
  <div class="subentry">
    <img class="subentry__image" src="images/Finances.png" alt="finances" />
    <div class="subentry__blog blog">
      <h2 class="blog__title title_text">Ты не уcпеешь</h2>
      <p class="blog__subtitle subtitle_text">Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</p>
    </div>
  </div>
  <div class="subentry-reverse">
    <img class="subentry-reverse__image" src="images/MindBlowing.png" alt="mind blowing" /> 
    <div class="subentry-reverse__blog blog">
      <h2 class="blog__title title_text">Опять дедлайн</h2>
      <p class="blog__subtitle subtitle_text">В мире, где столько всего интересного, когда же успевать жить?</p>
    </div>        
  </div>
  <div class="info">
    <h2 class="info__title title_text">На курсе ты <span class="span-color">сможешь</span></h2>
    <div class="info__row">
      <div class="row__block block">
        <img class="block__image" src="images/one.svg" alt="one" />
        <p class="block__text block__text_short">Понять, что нужно делать, а что делать не стоит.</p>
      </div>
      <div class="row__block block">
        <img class="block__image" src="images/two.svg" alt="two" />
        <p class="block__text block__text_short">Перестать себя искусственно ограничивать.</p>
      </div>
      <div class="row__block block">
        <img class="block__image" src="images/three.svg" alt="one" />
        <p class="block__text block__text_short">Определить сильные стороны и начать использовать слабые.</p>
      </div>
      <div class="row__block block">
        <img class="block__image" src="images/four.svg" alt="four" />
        <p class="block__text block__text_long">Научиться достигать любой цели в 3 понятных шага.</p>
      </div> 
      <div class="row__block block">
        <img class="block__image" src="images/five.svg" alt="five" />
        <p class="block__text block__text_shorter">Сотрудничать эффективно и с правильными людьми.</p>
      </div>
      <div class="row__block block">
        <img class="block__image" src="images/six.svg" alt="six" />
        <p class="block__text block__text_longer">Оптимизировать общение с клиентами и проведение совещаний.</p>
      </div>  
    </div>
  </div>
  <div class="footer">
    <img class="footer__logotype" src="images/footer_logotype.svg" alt="logotype" />
  </div>
  <script src="../script/script.js"></script> 
</body>
</html>

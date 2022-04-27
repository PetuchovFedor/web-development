<div class="registration">
  <img class="registration__image" src="images/welcome.png" alt="welcome">
  <h3 class="registration__title">Записаться на курс</h3>
  <form class="registration__form form" action="src/form__handler.php" method="POST">
    <input class="form__input input" type="text" placeholder="Ваше имя" name="first_name">
    <input class="form__input input" type="email" placeholder="Email" name="email">
    <select class="form__input_position input" name="activity">
      <option>Деятельность</option>
      <option>Программист</option>
      <option>Дизайнер</option>
      <option>Маркетолог</option>
    </select>
    <div class="form__checkbox">
      <input class="checkbox" id="check" type="checkbox" name="agreement">
      <label class="checkbox_text" for="check">Согласен получать информационные материалы о старте курса</label>
    </div>
    <input class="form__button" type="submit" value="Записаться на курс">
  </form>
</div>
<form method="POST" action="Main/check_reg" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите Ф.И.О</label>
    <input required type="text" name="fio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите адрес</label>
    <input required type="text" name="adres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите телефон</label>
    <input required type="text" name="phone" class="form-control" id="phoneInput" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите email</label>
    <input required type="email" name="email" class="form-control" id="phoneInput" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите логин</label>
    <input required type="text" name="login" class="form-control" id="login_input" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите пароль</label>
    <input required type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="reg" id="reg" class="btn btn-primary">Регистрация</button>
  <a href="Main/auto">Есть аккаунт.</a>
</form>
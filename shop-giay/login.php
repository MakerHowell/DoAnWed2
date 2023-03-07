

<style>
  .form-group label {
    font-weight: 500;
  }

  .form-group.invalid .form-control {
    border-color: #f33a58;
  }

  .form-group.invalid .form-message {
    color: #f33a58;
  }

  .convert-sign-up a:hover,
  .forgot-password:hover {
    color: crimson;
    text-decoration: none;
  }
</style>

<div id="content" class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 m-auto">
        <h1 class="text-center">Đăng nhập</h1>
        <form action="xuly-login.php" method="post" id="form-2">
          <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Tên đăng nhập" autocomplete="off" autofocus />
            <small class="form-message"></small>
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu" autocomplete="off" />
            <small class="form-message"></small>
          </div>
          <input type="submit" class="btn btn-info w-100 my-4" name="form-2" value="Đăng nhập">
          <a class="forgot-password" href="index.php?page=forgot-pass">Quên mật khẩu?</a>
          <div class="convert-sign-up">
            <span>Bạn chưa có tài khoản?</span>
            <a href="index.php?page=sign-up">Đăng ký</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/validator.js"></script>
<script>
  Validator({
    form: "#form-2",
    formGroupSelector: ".form-group",
    errorSelector: ".form-message",
    rules: [
      Validator.isRequired("#username"),
      Validator.minLength("#password", 3),
    ],
    // onSubmit: function (data) {
    //   // call API
    //   console.log(data);
    // },
  });
</script>
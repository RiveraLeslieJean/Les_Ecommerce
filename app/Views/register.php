<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Account</title>
  <style>
    body {
      background-color: #FF69B4;
      color: #000;
      font-family: 'Times New Roman', serif;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-wrapper {
      background-color: #FFC0CB;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
      font-family: 'Times New Roman', serif;
      font-weight: bold;
      width: 500px;
    }

    .btn-primary {
      background-color: #FF1493;
      border-color: #FF1493;
      color: #000;
      padding: 10px 10px;
      font-size: 18px;
      border-radius: 10px;
    }

    .btn-primary:hover {
      background-color: #FF6B98;
      border-color: #FF6B98;
    }

    .text-primary {
      color: black;
      font-family: 'Times New Roman', serif;
      font-weight: bold;
      font-size: 16px;
    }

    .text-center {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 2px solid #FF1493;
      border-radius: 5px;
      font-size: 16px;
    }

    label {
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="form-wrapper">
      <h3 class='text-center text-primary'>Register Account</h3>
      <hr>
      <?php if (isset($validation)): ?>
        <div class="col-12">
          <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
          </div>
        </div>
      <?php endif; ?>
      <form method="POST" action="/register">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="name" class="text-primary">Pangalan:</label>
              <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name') ?>">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="email" class="text-primary">Email:</label>
              <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password" class="text-primary">Password:</label>
              <input type="password" class="form-control" name="password" id="password" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password_confirm" class="text-primary">Confirm Password:</label>
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="col-12 col-sm-8 text-right">
            <a href="/" class="text-primary">Click here if you have an existing account.</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

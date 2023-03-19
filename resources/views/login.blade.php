<!DOCTYPE html>
<html>
  <head>
    <title>Cool Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
      body {
        background-color: #c9a435;
      }
      .card {
        margin-top: 100px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
      }
      .card-header {
        background-color: #333;
        color: #c9a435;
        text-align: center;
        border-radius: 10px 10px 0 0;
      }
      .form-group {
        margin: 20px;
      }
      input[type="text"], input[type="password"] {
        border-radius: 5px;
        border: none;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
        padding: 10px;
      }
      .btn-login {
        background-color: #333;
        color: #c9a435;
        border-radius: 5px;
        border: none;
        padding: 10px;
        width: 100%;
      }
      .btn-login:hover {
        background-color: #222;
        cursor: pointer;
      }
      .card-footer {
        background-color: #f2f2f2;
        border-radius: 0 0 10px 10px;
        text-align: center;
      }
      .card-footer a {
        color: #333;
        text-decoration: none;
      }
      .card-footer a:hover {
        color: #222;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Halaman Login</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-login">Login</button>
              </form>
            </div>
            <div class="card-footer">
              <a href="#">Forgot Password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

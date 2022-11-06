<?php //https://www.belajarwithib.my.id/2020/12/login-multi-user-php.html
require 'conf.php';
require 'lib/header.php';
?>
<style type="text/css">
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
<form action="p_login.php" method="POST">
            <p>
                <input type="text" placeholder="Masukkan email anda" name="username">
            </p>
            <p>
                <input type="password" placeholder="Masukkan password anda" name="password">
            </p>
            <p>
                <input type="submit" value="Login Now">
            </p>
        </form>

<?php
require 'lib/footer.php'; 
?>
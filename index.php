<?php
// (A) LOGIN CHECKS
require "check.php";
 
// (B) LOGIN PAGE HTML
if (isset($failed)) { ?>
<div id="login-bad">Invalid user or password.</div>
<?php } ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0.9">
</head>

<h2>Login</h2>
<form id="login-form" method="post" target="_self">
<p>
  <h5>username</h5>
  <input type="text" name="user" requiredstyle="
    height: 80px;
">
</p>
<p>
  <h5>password</h5>
  <input type="text" name="password" requiredstyle="
    height: 80px;
">
</p>
   <br><br/>
  <input type="submit" value="Sign In">
</form>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">



<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: /login");
  exit();
}

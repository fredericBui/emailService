<?php
include("mailer.php");
mailSend('admin@gmail.com', $_GET['email'], $_GET['subject'], $_GET['object']);
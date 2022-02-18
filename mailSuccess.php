<?php
include("mailer.php");
mailSend('admin@gmail.com', $_GET['email'], 'My subject', 'My message');
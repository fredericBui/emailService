<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    
    include("mailer.php");
    mailSend('admin@gmail.com','client@gmail.com','My subject','My message');

    ?> 
  </body>
</html>
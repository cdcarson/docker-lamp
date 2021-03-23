<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
      <h1>Hello, world!</h1>
      <?php
        // A sanity check to make sure the containers have started 
        // correctly and we can connect to the database.
      ?>
      <ul>
        <li>Apache: <?= apache_get_version(); ?></li>
        <li>PHP: <?= phpversion(); ?></li>
        <li>
          MySQL: 
          <?php
            $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);
            if (mysqli_connect_errno()) {
                printf("MySQL connecttion failed: %s", mysqli_connect_error());
            } else {
                /* print server version */
                printf("MySQL Server %s", mysqli_get_server_info($link));
            }
            /* close connection */
            mysqli_close($link);
          ?>
        </li>
      </ul>
    </div>
    
  </body>
</html>

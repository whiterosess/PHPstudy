<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
  
    $x = 1071;
    
    // Write the if-elseif-else statement below
    if ($x % 3 == 0 && $x % 7 == 0) {
      echo 'x is a multiple of 3 and a multiple of 7.';
    } elseif ($x % 3 == 0) {
      echo 'x is a multiple of 3 but not a multiple of 7.';
    } elseif ($x % 7 == 0) {
      echo 'x is a multiple of 7 but not a multiple of 3.';
    } else {
      echo 'x is neither a multiple of 7 nor a multiple of 3.';
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Assign a number to $num
    $num = 50;
    // Assign the remainder of $num divided by 3
    $remainder = $num % 3;
    
    switch ($remainder) {
      case 0:
        echo 'Very lucky!!';
        break;
        
      case 1:
        echo 'Lucky!';
        break;
      
      case 2:
        echo 'A little lucky.';
        break;
        
      default:
        echo 'Unlucky...';
        break;
    }
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Create the array below
    $colors = array ('Red', 'Blue', 'Yellow');
    
    echo $colors[0];
    
    $colors[] = 'White';
    
    echo $colors[3];
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Define the associative array below
    $scores = array('Math' => 70, 'Language' => 90, 'Science' => 80);
    
    $scores['Science'] += 5;
    
    echo $scores['Science'];
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Write the for loop below
    for ($i = 51; $i <= 100; $i++) {
      echo $i;
      echo '<br>';
    }

  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Declare the $i variable
    $i = 2;
    
    // Write the while loop below
    while ($i <= 100) {
      if ($i % 2 == 0) {
        echo $i;
        echo '<br>';
      }

      $i++;
    }

  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Write the for loop below
    for ($i = 1; $i <= 1000; $i++) {
      if ($i > 500) {
        break;
      }

      echo $i;
      echo '<br>';
    }

  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Write the for loop below
    for ($i = 1; $i <= 1000; $i++) {
      if ($i % 3 == 0) {
        continue;
      }

      echo $i;
      echo '<br>';
    }

  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $scores = array('Math' => 70, 'Language' => 90, 'Science' => 80);

    // Write the foreach loop below
    foreach ($scores as $key => $value) {
      echo $key.': '.$value.' ';
    }

  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $str = 'progate';

    // Print the length of $str using strlen
    echo strlen($str);
    echo '<br>';

    $array = array('HTML', 'CSS', 'PHP');

    // Print the number of elements in $array using count
    echo count($array);
    echo '<br>';

    // Print a random number between 10 and 15 using rand
    echo rand(10, 15);

  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Define the hello function
    function hello() {
      echo 'Hello, world!';
    }
    
    // Call the hello function
    hello();
    
    echo '<br>';
    // Define the printRectangleArea function
    function printRectangleArea($height, $width) {
      echo $height * $width;
    }
    
    // Call the printRectangleArea function with (5, 10) as the argument
    printRectangleArea(5, 10);
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Define the getCircleArea function
    function getCircleArea($radius) {
      return $radius * $radius * 3;
    }
    
    // Call the getCircleArea function and assign the return value to the $circleArea variable
    $circleArea = getCircleArea(5);
    
    // Print the $circleArea variable
    echo $circleArea;
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>About Progate</li>
        <li>Recruitment</li>
        <li class="selected">Contact</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">Contact</div>
      <!-- Write the <form> tag below -->
      <form action="sent.php" method="post"></form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>About Progate</li>
        <li>Recruitment</li>
        <li>Contact</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>About Progate</li>
        <li>Recruitment</li>
        <li class="selected">Contact</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">Contact</div>
      <form method="post" action="sent.php">
        <div class="form-item">Name</div>
        <input type="text" name="name">

        <div class="form-item">Message</div>
        <textarea name="body"></textarea>

        <!-- Create the submit button below -->
        <input type="submit" value="Submit">
        
      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>About Progate</li>
        <li>Recruitment</li>
        <li>Contact</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>


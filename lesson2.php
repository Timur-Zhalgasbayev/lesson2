<?php

    if(isset($_POST['submit']))
    {
        $comp_numb = 5;
        $user_numb = $_POST['guess'];
        if($user_numb > $comp_numb)
        {
            $h1 = "Много";
        }
        elseif($user_numb < $comp_numb)
        {
            $h1 = "Мало";
        }
        else
        {
            $h1 = "Вы угадали!";

        }
    }
    else
    {
        $h1 = "Угадай число от 1 до 10!";
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
     <title>Угадай число</title>
    </head>
     <body>
     <h1><?php echo $h1 ?></h1>
      <form action="index.php" method="post">
          <input type="text" value="<?php echo $user_numb ?>" name="guess"> <br/>
          <input type="submit" value="Я угадаю!" name="submit">
      </form>
     </body>
</html>
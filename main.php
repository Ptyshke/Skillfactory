<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика по PHP </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         <h1><?php echo $p; ?></h1>
        </div>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/img.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут: 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город:', ' ', $city; ?>  <br>                                    
                    <sub>Я обучаюсь на образовательной платформе №1</sub>
                    <a href="https://skillfactory.ru" target="_blank" title="SkillFactory — ваш прямой путь в IT-профессии"><?php echo $school ?></a></sub>
                </div>
                <div class="knowledge">
                    <h1><?php echo $knowledge ?></h1>
                    <p><select>
                        <option value="1">Начальные знания разметки HTML</option>
                        <option value="2">Начальные знания PHP</option>
                        <option value="3">Умение установить и запустить локальный WEB-сервер</option>
                        </select></p>
                </div>
            </div>

            <div class="knowledge">
                <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                    print("здесь выведен результат возможности PHP быть калькулятором:");
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>

            </div>
            <div class="article">
                <p class="text">
                    Здесь могла бы быть ваша реклама, но т.к. этот сайт локальный - это никому не нужно, поэтому пусть тут будет котик =)<img src="img/cat.jpg" alt="мяу" title="мяу" width="200" height="160">
                </p>
                div class="foother">
                <?php include 'footer.inc.php' ?>
            </div>
            </div>

    </div>


</body>
</html>

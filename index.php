<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link rel="stylesheet" href="./CSS/style.css" />
</head>
<body>
<div class="header">     
      <?php include 'logo.inc.php' ?>   
      <?php include 'menu.inc.php' ?>
        </div>  
<body>
         <h1>Работа с итераторами</h1>
         <div>
           <p>
              Работа по парсингу заголовков заданного HTML выполнена путем создания средствами PHP модели DOM.
              Посмотреть результаты расчета можно, выбрав пункт меню "ИтераторDOM".
              Дополнительно удалось посмотреть использование итераторов в JavaScript.
              Для просмотра необходимо открыть пункт меню "ИтераторJS". При этом откроется файл с
              с заданным для исследования файлом HTML. В окрывшемся окне следует найти в самом верху кнопку "Итератор" 
              и нажать ее. Результат нужно будет смотреть в консоли, не обращая внимания на многочисленные предупреждения браузера.
              
           </p>
</div>
         <!--   <form class ='iter' action ="collect.html">
          <button type='submit' id ='it' onclick =goIter()>Включить итератор</button>
</form>-->
<?php include 'footer.inc.php' ?>
<!--<script src ="index.js"></script>-->
</html>
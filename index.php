<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/header.css" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/left.css" />
    <link rel="stylesheet" href="CSS/right.css" />
    <link rel="stylesheet" href="CSS/footer.css" />
    <title>lr11</title>
  </head>
  <body>
    <?php
      include 'header.php';
      $type = '';
      if (isset($_GET['type'])) {
        $type = $_GET['type'];
      }
    ?>

    <main>
      <div class="left">
        <?php
        $buttonsText = ['Все таблицы умножения', ' Таблица умножения на 2', 'Таблица умножения на 3', 'Таблица умножения на 4', 'Таблица умножения на 5', 'Таблица умножения на 6', 'Таблица умножения на 7', 'Таблица умножения на 8', 'Таблица умножения на 9'];
        
        for($i = 0; $i <sizeof($buttonsText); $i++) {
          echo '
          <a href="index.php?num='.($i+1).'&type='.$type.'"><div class="'.(isset($_GET['num']) && $_GET['num']==($i+1)?'selected':'left-btn').'">
            '.$buttonsText[$i].'
          </div></a>
          ';
        }

        ?>
      </div>
      <div class="right">
        <?php
        if(!isset($_GET['type']) || ($_GET['type'] == 'table')){
          echo '<p>Табличная верстка</p>';
          include 'table.php';
        } 
        elseif ($_GET['type'] == 'block') {
          echo '<p>Блочная верстка</p>';
          include 'block.php';
        }
        ?>

      </div>

    </main>
        <?php include 'footer.php'; ?>
  </body>
</html>

<?php
date_default_timezone_set("Europe/Moscow");
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время
?>

<footer>
    <?php
    if ($type=='table') {
      echo' <p class="f-type">Тип: табличная верстка</p>';
    }
    else {
        echo'<p class="f-type">Тип: блочная верстка</p>';
    }
    ?>
    <div class="f-time">
        <?php echo 'Сформировано ',  $today, " в ", $time ?>
    </div>
</footer>

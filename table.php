<table>
    <?php 
      if ( !isset($_GET['num']) || $_GET['num']==1) {
        for($n = 1; $n <= 10; $n++) {
            echo '<tr>';// тег строки
            for($m = 2; $m<=9; $m++){
                echo'<td>';// тег ячейки
                echo '<a class="count" href="index.php?num='.$m.'&type='.$type.'">'.$m.'</a> * ';
                if($n<10 && $n>1){
                    echo '<a class="count" href="index.php?num='.$n.'&type='.$type.'">'.$n.'</a>';
                }  
                else{
                    echo $n;
                }
                if($n*$m < 10){
                    echo ' = <a class="count" href="index.php?num='.$m*$n.'&type='.$type.'">'.$m*$n.'</a>';
                }
                else{
                    echo ' = '.$m*$n;
                }
                echo '</td>';
            }
            echo '</tr>';
        }
      }  
      else {
        for($n = 1; $n <= 10; $n++) {
            echo '<tr>';
            echo'<td class="big-font">';

            if($n<10 && $n>1) {
                echo $_GET['num'].' * <a class="count" href="index.php?num='.$n.'&type='.$type.'">'.$n.'</a> = ';
            }
            else {
                echo $_GET['num'].' * '.$n.' = ';
            }
            if($n*$_GET['num']<10) {
                echo '<a class="count" href="index.php?num='.$_GET['num']*$n.'&type='.$type.'">'.$n*$_GET['num'].'</a>';
            }
            else {
                echo $n*$_GET['num'];
            }


            echo '</td>';
            echo '</tr>';
        }
      }

    ?>
</table>
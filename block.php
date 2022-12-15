<div class="block">
    <?php 
      if ( !isset($_GET['num']) || $_GET['num']==1) {
        for($n = 1; $n <= 10; $n++) {
            echo '<div class="string">';
            for($m = 2; $m<=9; $m++){
                echo'<div class="el">';
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
                echo '</div>';
            }
            echo '</div>';
        }
      }  
      else {
        echo '<div class="wrap-col">';
        for($n = 1; $n <= 10; $n++) {
            echo'<div class="big-font col">';

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


            echo '</div>';
        }
        echo '</div>';
      }

    ?>
</div>
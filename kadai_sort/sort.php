<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
        <?php
        
        function sort_2way($array,$order) {
          if($order == "true"){
            sort($array);
            echo "昇順にソートします。<br>";
            foreach($array as $value) {
              echo $value . "<br>";
            }
          
          } else {
            rsort($array);
            echo "降順にソートします。<br>";
            foreach($array as $value) {
                echo $value . "<br>";
            }

          } 

        }
        
        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums, "true");
        echo "<br>";
        sort_2way($nums, "false");
        ?>
</body>

</html>
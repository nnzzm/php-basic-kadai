<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
        <?php
        
        function sortArray($array,$order) {
          if($order == "昇順ソート"){
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
        sortArray($nums, "昇順ソート");
        echo "<br>";
        sortArray($nums, "降順ソート");
        ?>
</body>

</html>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>入力画面</title>

</head>
<body>
  <form action="input.php" method="post">
    <p>FizzNum<input type="text" name="fizz"
      placeholder="整数を入力してください"></p>
    <p>BuzzNum<input type="text" name="buzz"
      placeholder="整数を入力してください"></p>
    <input type="submit"value="実行">
      </form>
    <h3>【出力】</h3>
    <?php

     if((empty($_POST['fizz'])) || (empty($_POST['buzz']))){//何も入力されてなければメッセージを表示
     echo "未入力です。";
 }
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $num1 = $_POST["fizz"];
     $num2 = $_POST["buzz"];

 if(strval($num1) === strval(intval($num1)) && (strval($num2)==strval(intval($num2))))
 {



    $ans1 = 0;
    $ans2 = 0;
    $i = 1;
    $j = 1;
  while (($ans1 < 100) || ($ans2 < 100)){
    $ans1 = $num1 * $i;
    $ans2 = $num2 * $j;
    if(($ans1 >= 100 ) || ($ans2 >= 100 )) {
      break;}


      if($ans1 == $ans2) {
        echo "fizzBuzz".$ans1."<br>";
        $i++;
        $j++;
      }elseif($ans1 < $ans2) {
        echo "fizz".$ans1."<br>";
        $i++;
      }else{
        echo "Buzz".$ans2."<br>";
        $j++;
      }

    }

 }else{
   echo "整数を入力してください";
 }
}

?>
</body>
</html>

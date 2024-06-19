<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h3>Latihan Array Chaerin</h3>
    <?php
    //latihan soal no 1
    echo "<h2> Soal no 1 </h2>";
    //menentukan panjang string dan jumlah kta
    $first_sentence = "Hello PHP!";//panjang string:10,jumlah kata :2
    $second_sentence = "I'm ready for the challenges";//jumlah sttring:28,jumlah kta:5
    echo "panjang string".strlen($first_sentence). "jumlah kata" .str_word_count($first_sentence)."<br>";
    echo "panjang string".strlen($second_sentence). "jumlah kata". str_word_count($second_sentence)."<br>";
    //latihan soal no 2
    echo "<h2> soal no 2 </h2>";
    //mengambil nilai kata pada string
    $string2 = "I love PHP"; 
    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ;
    echo "Kata kedua: " . substr($string2,2,6)."<br>";
    echo "<br> Kata Ketiga: " . substr($string2,7,9)."<br>";
    //latihan soal no 3
    echo "<h3> Soal No 3 </h3>";
    // Mengubah karakter atau kata yang ada di dalam sebuah string
    $string3 = "PHP is old but sexy";
    echo "string:\"$string3\" <br>";
    //output "PHP is old but awesome"
    echo "<br> output: ".str_replace("sexy","awesome",$string3);
    ?>

    
</body>
</html>
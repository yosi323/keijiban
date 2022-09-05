<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");



?>

<header>
    <div class="logo"><img src="4eachblog_logo.jpg"></div>
    <div class="nav">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
</header>
<div class="left">
 
    <div class="pro"><b>プログラムに役立つ掲示板</b></div>
    <h1>お問合わせフォーム</h1>

    <form method="post" action="insert.php">
        <div>
            <lavel>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>


        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>
      

        <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>

    <div>
        <?php
            while ($row = $stmt->fetch()){
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>
</div>

<br>

<div class="right">
    <div class="bun1"><b>人気の記事</b></div>


   <ul>
    <li>PHPオススメ本</li>
    <li>PHP Myadminの使い方</li>
    <li> 今人気のエディタTop5</li>
    <li>HTMLの基礎</li>
    </ul>
<br>
<div class="bun1"><b>オススメリンク</b></div>

    <ul>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Brancketsのダウンロード</li>
    </ul>

    <div class="bun1"><b>カテゴリ</b></div>

    <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>Mysql</li>
    <li>Javascript</li>
    </ul>

</div>





    <footer>
        <div class="nav">
            <ul>
    
                copyright c internous 4each blog the which provides A to Z
                
            </ul>
            </div>

    </footer>










    
</body>


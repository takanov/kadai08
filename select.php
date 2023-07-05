<?php
//1.  DB接続します
try {
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=kadai8_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM kadai8_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status === false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= "<p>";
        $view .= $result['indate'] . $result['name'] . $result['tag'] . $result['content'];
        $view .= " 緯度: " . $result['lat'];
        $view .= " 経度: " . $result['lng']; 
        $view .= " 住所: " . $result['address'];
        $view .= "</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登録した情報を表示</title>

<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
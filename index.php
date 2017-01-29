<?php
require_once("Bbs.php");



$bbs = new Bbs();
$data = $bbs->getData();


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $bbs->writeData();
}


 ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>BBS</title>
  <style>
    .btn {
      background: #00aaff;
      width: 100px;
      text-align: center;
      margin-top: 10px;
      padding: 10px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>掲示板</h1>
    <form action="" method="post" name="bbs_form">
      <input type="text" name="title">
    </form>
    <div id="btn" class="btn" name="submit">送信</div>


    <ul class="bbs_area">
    </ul>
  </div>

  <script src="script.js"></script>
</body>
</html>

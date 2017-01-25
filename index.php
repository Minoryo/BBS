<?php
// require_once("Bbs.php");
//
// $bbs = new Bbs();
// if ($_POST['title']) {
//   $bbs->setTitle($_POST['title']);
// }
//
// var_dump($bbs->getTitle());


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
    <div id="btn" class="btn">送信</div>

    <ul class="bbs_area">

    </ul>
  </div>

  <script>
  (function() {

    let btn = document.getElementById('btn');
    btn.addEventListener('click', function() {
      let form = document.forms.bbs_form;
      let title = form.title.value;
      if (form_check(title.length)) {
        form.submit();
      } else {
        let err = "文字数を確認してください。";
        console.log(err);
      }

    });



    /*
    /form_check フォームの文字列をチェックする
     @return: true or err
    */

    function form_check(str_len) {

      if (str_len === 0 || str_len > 24) {
        return false;
      } else {
        return true;
      }
    }

  })();

  </script>
</body>
</html>

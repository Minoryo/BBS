(function() {

  let btn = document.getElementById('btn');
  btn.addEventListener('click', function() {
    let form = document.forms.bbs_form;
    let title = form.title.value;
    if (last_check() === false) {
      return;
    }
    if (form_check(title.length)) {
      form.submit();
    } else {
      let err = "文字数を確認してください。";
      console.log(err);
    }

  });

  function last_check() {
    let flg = confirm('送信してもいいですか？');
    return flg;
  }



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

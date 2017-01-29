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

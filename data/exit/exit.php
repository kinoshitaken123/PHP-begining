  <?php 
    $score = -100;
    // exit: 終了コードを返さない、またはステータスコードで返して終了したいときに使う
    // die: エラーメッセージを表示して終了したいときに使う
    if ($score < 0) {
      echo 'スコアは正の数でなければなりません。';
      exit(1); // 終了コード1を返して終了
    }
  ?>
  echo 'スコアは:', $score , '点です。'; //この命令は実行されない
</body>
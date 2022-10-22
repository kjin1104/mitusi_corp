

    <?php 
    function load_my_template($file, $attrs){
      ob_start();
      include $file; //テンプレートファイルのインクルード
      $html = ob_get_contents();
      ob_end_clean();
      echo $html; //出力
    }


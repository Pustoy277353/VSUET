<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <p>ссылка:</p>
        <input type="text" name="web">
        <input type="submit" name="post" value="Проверить">
    </form>
    
    <?php
    
    if (isset($_POST['post'])) {

        $page = $_POST["web"];

        $page_title = getTitle($page);

        if($page_title){ 
            echo "Страница работает";  
        } else {  
            echo "Страница не работает";        
        }

    }
    function getTitle($url) {
        if(!$url) return ;
        $title="";
        @$page=file_get_contents($url); 
        if ($page) {
          if (preg_match("~<title>(.*?)</title>~iu", $page, $out)) {
            $title = $out[1];   
          }
        }
        return $title;
      }
    
    ?>

</body>
</html>
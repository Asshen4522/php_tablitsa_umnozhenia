<?php
    if ($_SERVER['PATH_INFO']) {
        header("Location: {$_SERVER['SCRIPT_NAME']}?name=main");
        exit;
    }
    if( count($_GET)!=1 or !(((2<=($_GET['name']) and ($_GET['name'])<=9)) or $_GET['name']=='main')){ 
        header("Location: {$_SERVER['SCRIPT_NAME']}?name=main");
        exit;
    }
    
    function table(){
        $give='';
        if ($_GET['name'] and $_GET['name']!='main') {
            $first=$_GET['name'];
            $stop=$first;
        } else {
            $first=2;
            $stop=9;
        }
        
        for (; $first <= $stop; $first++) { 
            for ( $second = 1 ; $second <= 10 ; $second++ ) { 
                $result = $first * $second;
                switch ($first) {
                    case '2':
                        $firsta='<a href="http://localhost/index2.php?name=2">'.$first.'</a>';
                        break;
                    case '3':
                        $firsta='<a href="http://localhost/index2.php?name=3">'.$first.'</a>';
                        break;
                    case '4':
                        $firsta='<a href="http://localhost/index2.php?name=4">'.$first.'</a>';
                        break;
                    case '5':
                        $firsta='<a href="http://localhost/index2.php?name=5">'.$first.'</a>';
                        break;
                    case '6':
                        $firsta='<a href="http://localhost/index2.php?name=6">'.$first.'</a>';
                        break;
                    case '7':
                        $firsta='<a href="http://localhost/index2.php?name=7">'.$first.'</a>';
                        break;
                    case '8':
                        $firsta='<a href="http://localhost/index2.php?name=8">'.$first.'</a>';
                        break;
                    case '9':
                        $firsta='<a href="http://localhost/index2.php?name=9">'.$first.'</a>';
                        break;
                    default:
                        $firsta=$first;
                        break;
                };
                switch ($second) {
                    case '2':
                        $seconda='<a href="http://localhost/index2.php?name=2">'.$second.'</a>';
                        break;
                    case '3':
                        $seconda='<a href="http://localhost/index2.php?name=3">'.$second.'</a>';
                        break;
                    case '4':
                        $seconda='<a href="http://localhost/index2.php?name=4">'.$second.'</a>';
                        break;
                    case '5':
                        $seconda='<a href="http://localhost/index2.php?name=5">'.$second.'</a>';
                        break;
                    case '6':
                        $seconda='<a href="http://localhost/index2.php?name=6">'.$second.'</a>';
                        break;
                    case '7':
                        $seconda='<a href="http://localhost/index2.php?name=7">'.$second.'</a>';
                        break;
                    case '8':
                        $seconda='<a href="http://localhost/index2.php?name=8">'.$second.'</a>';
                        break;
                    case '9':
                        $seconda='<a href="http://localhost/index2.php?name=9">'.$second.'</a>';
                        break;
                    default:
                        $seconda=$second;
                        break;
                };
                switch ($result) {
                    case '2':
                        $resulta='<a href="http://localhost/index2.php?name=2">'.$result.'</a>';
                        break;
                    case '3':
                        $resulta='<a href="http://localhost/index2.php?name=3">'.$result.'</a>';
                        break;
                    case '4':
                        $resulta='<a href="http://localhost/index2.php?name=4">'.$result.'</a>';
                        break;
                    case '5':
                        $resulta='<a href="http://localhost/index2.php?name=5">'.$result.'</a>';
                        break;
                    case '6':
                        $resulta='<a href="http://localhost/index2.php?name=6">'.$result.'</a>';
                        break;
                    case '7':
                        $resulta='<a href="http://localhost/index2.php?name=7">'.$result.'</a>';
                        break;
                    case '8':
                        $resulta='<a href="http://localhost/index2.php?name=8">'.$result.'</a>';
                        break;
                    case '9':
                        $resulta='<a href="http://localhost/index2.php?name=9">'.$result.'</a>';
                        break;
                    default:
                        $resulta=$result;
                        break;
                };
                $give .= '<div>'.$firsta.' * '.$seconda.' = '.$resulta.'</div>';
            }
            
        }
        return $give;
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- <div class="table">
        <?php 
        $row = 0;
        for (; $row <10 ; $row++) { 
            for ($column = 0;$column<10 ;$column++) { 
                $result=($row+1)*($column+1);
                if ($column==$row) {
                    $class='main';
                } elseif($row>=$column and $result%2==1){
                    $class='lower';
                } elseif($row<=$column and $result%2==0){
                    $class='upper';
                }else{
                    $class='def';
                }
                echo '<div class="'.$class.'">'.$result.'</div>';

            };
        }; 
        ?>
    </div> -->
    <div class='gridnic'>
        <?= table() ;?>
        <a href="http://localhost/index2.php">Вся табличка</a>
        

    </div>
</body>
</html>
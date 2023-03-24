<?php
//echo '<br>';
//$d='dalia';
//$age=11;
//echo $d.' has '.$age;
//echo '<br>';
//echo !empty($d)? 'yes': "no";
//echo '<br>';

////single comment ^_^
////to print ---> echo
//echo 'bla bla bla';
///*
//...
//multi
//comments
//...
//*/
//echo '<br>';
//echo gettype(200);
//echo '<br>';
//echo 4 + true;
//echo '<br>';
////casting
//echo 7 +(int)'9 bla';
//echo '<br>';
//echo (int)(10.5+10.5);
//echo '<br>';
////convert to boolean
//var_dump(true);
//echo '<br>';
////escaping with \
//echo 'website \'bla\'';

////to print in multiple line
/*/echo nl2br("We
//Love
//Elzero
//Web
//School");*/
//echo '<br>';

//echo " Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
//echo '<br>';

// $name= 'amira';
////escaping with heredoc
//echo <<<here
//i use ''' without \\ by $name
//here;
//echo '<br>';
//
//////escaping with nowdoc
//echo <<<'now'
//i use ''' without \\ by $name
//now;

//$arr1=["A" => "Apple","B"=>"Banana"];
//echo '<pre>';
//print_r($arr1);
//$arr2=["Mariam","Habiba","Noureen"=>[1,2,3], 5=>"Dalia"];
//print_r($arr2);
//echo '</pre>';

//$name = "elzero";
//$$name = "Web";
//echo $$name;
//echo $elzero;
//echo "web";
//echo ${elzero};
//value by reference with &=o
//$a = 200;
//$b = &$a;
//$a = 100;
//
//echo $b; // 100
//
//<!--<!DOCTYPE html>-->
//<!--<html lang="en">-->
//<!--<head>-->
//<!--    <meta charset="UTF-8">-->
//<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
//<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
//<!--    <title> --><?//='score page'?><!--</title>-->
<!--</head>-->
<!--<body>-->
<!--<div>-->
<!--    --><?php
////    print 'welcome'." " .$name;
//    ?>
<!--</div>-->
<!--<div>-->
<!--    --><?php
//    echo 'you score 1000 points';
//    ?>
<!---->
<!--</div>-->
<!--<div>-->
<!--    --><?php //include("testtt.php") ?>
<!--</div>-->
<!--</body>-->
<!--</html>-->


<?php
//echo '<pre>';
//print_r($_SERVER);
//echo $_SERVER["HTTP_CONNECTION"];
//echo '</pre>';
//constants
//const num = "two";
//const name ='amira';
//pre-defined constants sens
//echo php_uname(); //info about OS
//echo '<br>';
//echo phpversion();
////magic constants insensitive
//echo '<br>';
//echo __line__;
//echo '<br>';
//echo __dir__;
//echo '<br>';
//echo __file__;
// Arithmetic Operators
//echo((((10 * (20 - 15)) * 3 )- 190) * 10) + 400 ; // 0
//unary op
//+$a = 100        ; //identify
//echo gettype(+"100"); //int
//-$a          ; //negation
//echo -"-100";
//echo gettype(-"-100");
//assignment op
//$a +=5; //a=a+5
//$a -=5; //a=a-5
//$a *=5; //a=a*5
//$a /=5; //a=a/5
//$a %=5; //a=a%5
//$a **=5; //a=a**5
//comparison op
// == , <>, != compare only value
//var_dump("100"==100);
////=== , !== compare value and type
//var_dump("100"===100);
// var_dump(100<=>50); //larger =>1 , smaller => -1 ,equal=>0

//$a++ //post increment
//++$a //pre increment
//$a-- //post increment
//--$a //pre increment
//$a=5;
//echo $a++;//5
//echo $a; //6

//var_dump(100>50 and 50>90);
//var_dump(100>50 && 50>90);
//var_dump(100>50 or 50>90);
//var_dump(100>50 || 50>90);
//var_dump(100>50 xor 50>90);
?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Demo</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<?php
//
//$books=[
//    [
//        'name' => 'Do Androids Dream of Electric Sheep',
//        'author' => 'Philip K. Dick',
//        'releaseYear' => 1968,
//        'purchaseUrl' => 'http://example.com'
//    ],
//    [
//        'name' => 'Project Hail Mary',
//        'author' => 'Andy Weir',
//        'releaseYear' => 2021,
//        'purchaseUrl' => 'http://example.com'
//    ],
//    [
//        'name' => 'The Martian',
//        'author' => 'Andy Weir',
//        'releaseYear' => 2011,
//        'purchaseUrl' => 'http://example.com'
//    ],
//];
//
//function filter($items,$fn){
//    $filtereditems=[];
//
//    foreach ($items as $item){
//        if($fn($item)){
//            $filtereditems[]=$item;
//        }
//    }
//    return $filtereditems;
//}
//
//$filteredBooks= array_filter($books,function($book){
//    return $book['author']==='Andy Weir';
//}
//);
//
//?>
<!---->
<!--<ul>-->
<!--    --><?php //foreach ($filteredBooks as $book) : ?>
<!--        <li>-->
<!--            <a href="--><?//= $book['purchaseUrl'] ?><!--">-->
<!--                --><?//= $book['name']; ?><!-- (--><?//= $book['releaseYear'] ?><!--) - By --><?//= $book['author'] ?>
<!--            </a>-->
<!--        </li>-->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!--</body>-->
<!--</html>-->



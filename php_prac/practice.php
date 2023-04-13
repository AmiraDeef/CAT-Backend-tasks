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




////concatenate string
//$n ="my ";
//$n .="name ";
//$n .="is ";
//$n .="amira";
//echo $n;

// //array op
//$a1=[1=>"a",2=>"b"];
//$a2=[1=>"d",2=>"e"];
//$a3= $a1 + $a2; //doesnt work -_-
//echo '<pre>';
//print_r($a3 );
//echo '</pre>';
//
//$n1=[1=>"5",2=>"3"];
//$n2=[2=>3,1=>5];
//var_dump($n1== $n2); //true "same key and same value
//var_dump($n1=== $n2);//false "different type and order however same key and value"

//error control op
//$a=10;
//$b=@$a; // @ to prevent and ignore the error
//$b=@$a or die("not found"); //use die() to alert error msg and stop script
//echo $b;

//file
//$f =@file("etesttt.php")or die("name isn't correct");//read file into array
//
//echo '<pre>';
//print_r($f );
//echo '</pre>';

//include
//(@include ("testtt.php"))or die('not found');


//op precedence
// "||" has a greater precedence than "or"
// "&&" has a greater precedence than "and"
//echo 10 ||false ; //true ==> 1
//echo '<br>';
//$a=10|| FALSE ; //==>1 -->(10||false) -->1
//echo $a;
//echo '<br>';
//$b = 10 or true; //==>10 -->10 or false
//echo $b;
//echo '<br>';


//if else with ternary conditional operator
//$a = 30;
//$b = 20;
//$c = 10;
//if ($a + $b === $c) {
//
//    echo "A + B = C";
//
//} elseif ($a + $c === $b) {
//
//    echo "A + C = B";
//
//} elseif ($b + $c === $a) {
//
//    echo "B + C = A";
//
//} else {
//
//    echo "The End";
//
//}
//echo '<br>';
//// Output
////"B + C = A"
/// same output in ternary conditional operator
//echo ($a + $b === $c) ? "A + B = C" :(($a + $c === $b) ? "A + C = B" :(($b + $c === $a) ? "B + C = A":"The End"));
//echo '<br>';

////support page
//if($_SERVER["REQUEST_METHOD"]==="POST") {
//    if($_POST['lang']=='ar'){
//        header("location:testtt.php");
//        exit();
//    }elseif($_POST['lang']=='en'){
//        header("location:about.php");
//        exit();
//    }elseif($_POST['lang']=='it'){
//        header("location:contact.php");
//        exit();
//    }
//
//
//}
//?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>support</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="" method="post">-->
<!--    <label>-->
<!--        <input type="text" name="username">-->
<!--    </label>-->
<!--    <label>-->
<!--        <select name="lang" >-->
<!--            <option value="ar">Arabic</option>-->
<!--            <option value="en">English</option>-->
<!--            <option value="it">Italy</option>-->
<!--        </select>-->
<!--    </label>-->
<!--    <input type="submit" value="GO">-->
<!---->
<!--</form>-->
<!--</body>-->
<!--</html>-->


<?php

//if(10>8) echo "good"; else echo " bad";//if in one line
//echo (10>8) ? "good" : "bad" ; //ternary
//
//?>
<!--//alternative syntax for conditions-->
<?php //if(10>8) : ?>

<?php //endif ;?>

<?php
//$data=['name'=>'harry',
//    'is_student'=>true,
//    'is_orphan'=> true,
//    'country'=> "Egypt",
//    'country_discount'=>50,
//    'price'=>100,
//    'stud_dis'=> 10,
//    'orphan_dis'=> 20
//    ];
//
//
//if ($data['country']=="Egypt") {
//    if ($data['is_student']) {
//        if ($data['is_orphan']) {
//            $total_price = $data['price'] - ($data['orphan_dis'] + $data['stud_dis'] + $data['country_discount']);
//            echo $data['name'] . '<br>' . "you  have 3 discounts" . " " . 'the final price ' .$total_price;
//        } else {
//            $total_price = $data['price'] - ($data['stud_dis'] + $data['country_discount']);
//            echo $data['name'] . '<br>' . "you  have 2 discounts" . " " . 'the final price ' . $total_price;
//        }
//    } else{
//        $total_price = $data['price'] - ($data['country_discount']);
//        echo $data['name'] . '<br>' . "you  have a discount" . " " . 'the final price ' . $total_price;
//    }
//
//
//}
//else {
//echo $data['name'].'<br>'."you don't have any discount"." ".'the final price '.$data['price'];
//
//}
//switch syntax
//$a=5;
//switch ($a){
//    case 10:
//        echo "10";
//        break;
//    case 5:
//        echo "5";
//        break;
//    case 2:
//        echo "2";
//        break;
//    default:
//        echo "unknown";}

//loop with while
//$i=0;
//$count=0;
//    while($i<=4){
//    $count+=1;
//    echo $count .'<br>';
//    $i++;
//    }
//loop with do while
//do{
//    $count+=1;
//    echo $count .'<br>';
//    $i++;
//}while($i<=4);
//loop with for
//for (;$i<=4;$i++){
//    $count+=1;
//    echo $count .'<br>';
//}
//loop wih foreach
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
//foreach ($books as $book){
//
//
//    if($book['name']=="Project Hail Mary"){
//        continue;
//    }
//    echo $book['name'] ."<br>";
//
//}

////include and require
//include ("tessttt.php");
//echo "include continue run script even if there are an error";
//
//require "tessttt.php";
//echo "show fatal error and stop the script";//if part of code must run
//include_once ("testtt.php");
//echo $s;
//$s=5;
//include_once ("testtt.php");//the same if it require_once
//echo $s;
////output >>>>20 5

///function
//function greeting($name){
//    echo 'hello ' .$name .'<br>';
//}
//
//greeting("Yaya");
//greeting("Lily");

//$prices=['chips','lollipop','cookies'];
//function get_num($n1,$n2){
//
//    return $n1 +$n2; //anything after ret doesn't run
//    //here
//}
//var_dump(get_num(2,5)); //return but if it /echo it ;ll be null

//function get_data($name='private',$country='private',$address='private'): string
//{
//
//    $l1="your name is $name and your country is $country ".'<br>';
//    $l2="your address is $address";
//    return $l1 . $l2;
//}
//echo get_data (name:"yaya");


//function calc(...$nums)
//{
//   echo func_num_args() . '<br>';//num of arg
//   echo func_get_arg(1) .'<br>';//index of num
//    print_r(func_get_args());//show args
//    //purpose of function
//    $result=0;
//    foreach (func_get_args()as $argu){
//        $result+=$argu;
//    } return $result;
    //spread fn
//    print_r($nums);
//    $result=0;
//    foreach ($nums as $num){
//        $result+=$num;
//    } return $result;
//}
//
//
//echo calc(2,5,3);

//function get_data($name,$country,$age,...$skills)///...ia splat op
//{
//    echo "hello ".$name .'<br>'." your country is ".$country.'<br>'.'your skills'.'<br>';
//    foreach ($skills as $skill){
//        echo "--$skill ".'<br>';
//    }
//}
//
//get_data('lala',"Egypt",20,'php','testing');

////variable function
//function one(){
//    return "blalalalala";
//
//}
//$fn1="one";
//echo $fn1();
////function_exists
//if(function_exists(one())){
//    echo "found";
//}else{
//    echo "not found";
//}
//// length of string
//echo strlen("amira");
//$num=15;
//function add_five(&$num)///& pass arg by reference
//{
//    return $num+=5;
//
//}
//echo add_five($num).'<br>';//20
//echo $num;//20
////anonymous function
//$AddingTen=function ($item){return $item+10; };
//
//echo '<pre>';
//print_r($AddingTen(10)) ;
//echo '</pre>';
////array_map()
////arrow function (lambda)
//$nums=[20,50,80];
//$AddingFive=array_map(fn($item)=>$item+5,$nums);
//echo '<pre>';
//print_r($AddingFive);
//echo '</pre>';
$str="AMIRA";
echo "the 3rd letter is $str[2]"."<br>";
echo "the num of letters is ". strlen($str)."<br>";
echo $str ."<br>";
//update
$str[3]="E";
echo $str ."<br>";
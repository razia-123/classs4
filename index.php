<?php
echo "<h2> Home Work 3 </h2> ";
echo "<u><b> switch </b></u><br> ";
$fevdish ="rice";

switch ($fevdish){
case"rice":
echo"your favourite dish is rice";
echo"<br>";
break;

case"fish":
    echo"your favourite dish is fish";
    break;
    case"chicken":
        echo"your favourite dish is chicken";
        break;
        default:
        echo "Invalid";
}

// index array

echo "<u><b>  Index Array Rules1 </b></u><br> ";

$student1 =["Razia","razia@gamil.com",12345,"AB+",true];
echo "<pre>";
var_dump($student1);
echo"</pre>";
echo"<br>";


echo "<u><b> Index Array Rules2 </b></u><br> ";
$student1 =["Razia","razia@gamil.com",12345,"AB+",true];
echo "<pre>";
print_r($student1[1]);
echo"</pre>";
echo"<br>";


// associative array
echo "<u><b> AssociativeArray Rules1 </b></u><br> ";

$student1=[
    'name'=>"Razia",
    'email'=>"razia@gmail.com",
    'number'=>"12345",
    'bloodgroup'=>"AB+",
    'status'=>"true",
];
echo "<pre>";
print_r($student1);
echo"</pre>";
echo"<br>";

echo "<u><b>AssociativeArray Rules2 </b></u><br> ";
$student1=[
    'name'=>"Razia",
    'email'=>"razia@gmail.com",
    'number'=>"12345",
    'bloodgroup'=>"AB+",
    'status'=>"true",
];
echo $student1["number"];
echo"<br>";



// multidemensional array
echo "<u><b> Multidemensional Array Rules1 </b></u><br> ";
$student1=[
    'user1'=>[
    'id'=> 01,
    'name'=>'razia',
    'email'=>'razia@gmail.com',
    'social_links'=>[
        'facebook'=>'www.facebook.com',
        'twitter'=>'www.twitter.com',
    ]
    ],
    'user2'=> [
        'id'=> 02,
        'name'=>'mazia',
        'email'=>'mazia@gmail.com',
        ],
        'user2'=>[
            'id'=> 03,
            'name'=>'sazia',
            'email'=>'sazia@gmail.com',
            ],
        ];
        echo "<pre>";
print_r($student1["user1"]["social_links"]['facebook']);
echo"</pre>";

echo "<u><b>  Multidemensional Array Rules2 </b></u><br> ";

    $user1=[
    'id'=> 01,
    'name'=>'RAZIA',
    'email'=>'razia@gmail.com',
  
    ];
    echo strtolower($user1['name']); 

    echo"<br>";
    echo "<u><b>  Multidemensional Array Rules3</b></u><br> ";
    $user1=[
        'id'=> 01,
        'name'=>'razia sultana',
        'email'=>'razia@gmail.com',
      
        ];
        echo ucwords($user1['name']); 
        echo"<br>";


        echo "<u><b>  Multidemensional Array Rules4</b></u><br> ";

    $user1=[
        'id'=> 01,
        'name'=>'razia sultana',
        'email'=>'razia@gmail.com',
      
        ];
        echo ucfirst($user1['name']); 
        echo"<br>";

        // php string


        $user2=[
            'id'=>01,
            'name'=>'razia',
        ];
        echo ucwords($user2['name']);

        echo"<br>";
        echo "<u><b> Php String rules1</b></u><br> ";
        
          $user2=[
            'id'=>01,
            'name'=>'razia',
        ];
        echo strrev($user2['name']);

          $user2=[
            'id'=>01,
            'name'=>'razia',
        ];
        echo ucwords($user2['name']);
        echo"<br>";


    echo "<u><b>   Php String rules2</b></u><br> ";


$captcha ='Hello ghh World';
echo strpos($captcha,'World');
echo"<br>";

echo "<u><b>  Php String rules3</b></u><br> ";

$captcha ='Hello ghh World';
var_dump( stripos($captcha,'world'));
echo"<br>";


echo "<u><b> Php String rules4</b></u><br> ";
$captcha ='Hello ghh World';
var_dump(stripos($captcha,'world')) ;
echo"<br>";


echo "<u><b> Php String rules5</b></u><br> ";
$captcha ='Hello World';

$url =  strtolower(str_replace(' ','-',$captcha)) ;
echo $url;
echo"<br>";

echo "<u><b>  Php String rules6</b></u><br> ";

$text="Realme GT5 launched with 6.74-inch 1.5K 144Hz OLED display, Snapdragon 8 Gen 2 SoC, up to 24GB RAM, up to 240W fast charging";
$title =  substr($text,0,15).'...<a href= "#"> read more </a>';
echo $title;
echo"<br>";


echo "<u><b> Php String rules7</b></u><br> ";
$text ="razia@gmail.com";
var_dump(trim($text));
echo"<br>";

echo "<u><b>  Php String rules8</b></u><br> ";
$text ="razia@gmail.com";
echo(strlen($text));
echo"<br>";


echo "<u><b>  Php String rules9</b></u><br> ";
$userPassword="razia123";
$dbPassword= password_hash($userPassword , PASSWORD_BCRYPT);
echo $userPassword;
echo "<br>";
echo $dbPassword;
echo "<br>";
var_dump(password_verify($userPassword , $dbPassword));



// if($userPassword == $dbPassword){
// echo'Success';
// }
// else{
//     echo'Failed';
// }
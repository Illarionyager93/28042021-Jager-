<?php

$MySite2 = [
    ['title' => 'index', 'link' => [
        ['title' => 'account', 'link' =>
            ['title' => 'SingIn', 'link' => '/SingIn-link'],
            ['title' => 'Register', 'link' => '/Register-link'],
            ['title' => 'ForgetPassword', 'link' => '/ForgetPassword-link'],
        ],
        ['title' => 'search', 'link' =>
            ['title' => 'BasicSearch', 'link' => '/BasicSearch-link'],
            ['title' => 'AdvancedSearch', 'link' => '/AdvancedSearch-link'],
        ],
        ['title' => 'catalog', 'link' =>
            ['title' => 'SubCategory', 'link' => '/SubCategory-link'],
            ['title' => 'product', 'link' => '/product-link'],
        ],
    ]],
];

/*
 * Your PHP - code here
 */
var_dump($MySite2);
foreach ($MySite2 as $lvl2) {
    echo $lvl2['title'];
    foreach ($MySite2[$lvl2['title']] as $lvl3){
        echo $lvl3['title'];
    }
//    echo $lvl2['title'], $lvl2['link'],'<br>';
}



//function arrprint ($arr) {
//        foreach($arr as $key => $v) {
////            print $key . '$v '.'<br>';
//        if (is_array($v)) {//если значение = массив то
//            print '<br>'; //пустая строчка
//            arrprint($v);//рекусия функции/углубляемся
//        } else {
//            print $v .'<br>';//вывод значения
//
//        }
//        }
//
//}

//arrprint($MySite2);




/*
<ul>
    <li><a href="/link">TITLE</a></li>
    <li><a href="/link2">TITLE2</a></li>
    <li>
PARENT 1
<ul>
            <li><a href="/child-link">CHILD</a></li>
            <li><a href="/child-link2">CHILD2</a></li>
        </ul>
    </li>
</ul>
*/


//
//$a1 = [
//    'name' => 'Dmytro',
//    'lastName' => 'Dmytro',
//    'age' => 32,
//    'skills' => [
//        'PHP',
//        'JS'
//    ],
//];
//
//foreach ($a1 as $key => $value) {
//    if (is_array($value)) {
//        $value = serialize($value);
//    }
//    echo "{$key}: {$value}<br>";
//}
//
//
//
//
//
//var_dump($MySite2);
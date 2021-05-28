<?php

$index = [
    ['title' => 'account', 'SubLink1' =>[
        ['title' => 'SingIn', 'link' => '/SingIn-link'],
        ['title' => 'Register', 'link' => '/Register-link'],
        ['title' => 'ForgetPassword', 'link' => '/ForgetPassword-link'],
    ]],
    ['title' => 'search', 'SubLink1' =>[
        ['title' => 'BasicSearch', 'link' => '/BasicSearch-link'],
        ['title' => 'AdvancedSearch', 'link' => '/AdvancedSearch-link'],
    ]],
    ['title' => 'catalog', 'SubLink1' =>[
        ['title' => 'SubCategory', 'link' => '/SubCategory-link'],
        ['title' => 'product', 'link' => '/product-link'],
    ]],
];


$html = '<ul>';
foreach ($index as $item) {
    if (array_key_exists('link', $item)) {
        $html .= "<li><a href='{$item['link']}'>{$item['title']}</a></li>";
    } elseif (array_key_exists('SubLink1', $item)) {
        $childrenHTML = '';
        foreach ($item['SubLink1'] as $child) {
            $childrenHTML .= "<li><a href='{$child['link']}'>{$child['title']}</a></li>";
        }
        $html .= "<li>{$item['title']}<ul>{$childrenHTML}</ul></li>";
    }
}
$html .= '</ul>';

echo $html;
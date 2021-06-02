<?php

$data = [
    ['title' => 'TITLE', 'link' => '/link'],
    ['title' => 'PARENT 1', 'children' => [
        ['title' => 'CHILD', 'link' => '/child-link'],
        ['title' => 'CHILD2', 'link' => '/child-link2'],
    ]],
    ['title' => 'TITLE2', 'link' => '/link2'],
    ['title' => 'TITLE3', 'link' => '/link3'],
    ['title' => 'PARENT 2', 'children' => [
        ['title' => 'CHILD3', 'link' => '/child-link3'],
        ['title' => 'CHILD4', 'link' => '/child-link4'],
    ]],
    ['title' => 'PARENT 3', 'children' => [
        ['title' => 'CHILD5', 'link' => '/child-link5'],
        ['title' => 'CHILD6', 'link' => '/child-link6'],
    ]],
];

/*$html = '<ul>';
foreach ($data as $item) {
    if (array_key_exists('link', $item)) {
        $html .= "<li><a href='{$item['link']}'>{$item['title']}</a></li>";
    } elseif (array_key_exists('children', $item)) {
        $childrenHTML = '';
        foreach ($item['children'] as $child) {
            $childrenHTML .= "<li><a href='{$child['link']}'>{$child['title']}</a></li>";
        }
        $html .= "<li>{$item['title']}<ul>{$childrenHTML}</ul></li>";
    }
}
$html .= '</ul>';*/


function getMenuHtml(array $data): string
{
    $html = '<ul>';
    foreach ($data as $row) {
        if (array_key_exists('children', $row)) {
            $html .= '<li>';
            $html .= $row['title'];
            $html .= getMenuHtml($row['children']);
            $html .= '</li>';
        } else {
            $html .= "<li><a href='{$row['link']}'>{$row['title']}</a></li>";
        }
    }
    $html .= '</ul>';

    return $html;
}
echo getMenuHtml($data);



//echo $html;


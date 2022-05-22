<?php

$users = [
    [
        "name" => "Pera",
        "last_name" => "Miric",
        "img" =>'...'
    ],
    [
        "name" => "Mitar",
        "last_name" => "Miric",
        "img" =>'...'
    ],
    [
        "name" => "Bosko",
        "last_name" => "Buha",
        "img" =>'...'
    ],
    [
        "name" => "Lemy",
        "last_name" => "Killmister",
        "img" =>'...'
    ],
    [
        "name" => "Vinnie",
        "last_name" => "Paul",
        "img" =>'...'
    ]
    ];

    function search_users ($users, $searchContent = "") {
        $filtrirani_niz = array();
        foreach ($users as $user) {
            if (str_contains($user["name"], $searchContent) || str_contains($user["last_name"], $searchContent)){
                $filtrirani_niz[]=$user;
             }
        }
        return $filtrirani_niz;
    }

echo "<pre>";
echo print_r(search_users($users, "ic"));
echo "</pre>";

    
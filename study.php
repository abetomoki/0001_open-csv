<?php
    $foods = file('seven.csv');

    foreach ($foods  as $food) {
        $foods_infos[] = explode(',', $food);
    }
    foreach ($foods_infos as $infos) {
        foreach ($infos as $info) {
            var_dump($info);
        }
    }

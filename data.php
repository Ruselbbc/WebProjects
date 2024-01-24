<?php
$show_complete_tasks = rand(0, 1);

$user_name = 'Руслан'; // укажите здесь ваше имя

// массив для показа проектов
$projectArr = array("Входящие", "Учеба", "Работа", "Домашние дела", "Авто");

// массив для наполнения задач дашборда
$taskArr = [
    [
        "task" => "Собеседование в IT компанию",
        "deadline" => "01.12.2019",
        "category" => "Работа",
        "task_finished" => false
    ],
    [
        "task" => "Выполнить тестовое задание",
        "deadline" => "25.12.2019",
        "category" => "Работа",
        "task_finished" => false
    ],
    [
        "task" => "Сделать задание первого раздела",
        "deadline" => "21.12.2019",
        "category" => "Учеба",
        "task_finished" => true
    ],
    [
        "task" => "Встреча с другом",
        "deadline" => "22.12.2019",
        "category" => "Входящие",
        "task_finished" => false
    ],
    [
        "task" => "Купить корм для кота",
        "deadline" => null,
        "category" => "Домашние дела",
        "task_finished" => false
    ],
    [
        "task" => "Заказать пиццу",
        "deadline" => null,
        "category" => "Домашние дела",
        "finished" => false
    ]
];

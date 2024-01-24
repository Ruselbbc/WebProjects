<?php
require_once ('helpers.php');
require_once ('functions.php');
require_once ('data.php');

/**
 * @var array $projectArr берётся из data.php и хранит в себе список проектов.
 * @var array-key $taskArr берётся из data.php и хранит в себе список заданий, статус выполнения и т.д.
 * @var bool $show_complete_tasks берётся из data.php и хранит в себе случайное число от 0 до 1.
 * Задействуется в условии на проверку выполнения заданий в main.php.
 * @var string $user_name берётся из data.php и хранит в себе имя пользователя, который залогинен на сайте.
 */

$page_content = include_template('main.php', [
    "projectArr" => $projectArr,
    "taskArr" => $taskArr,
    "show_complete_tasks" => $show_complete_tasks
]);

$layout_content = include_template('layout.php', [
    "content" => $page_content,
    "user_name" => $user_name,
    "title" => "Главная"
]);

print($layout_content);

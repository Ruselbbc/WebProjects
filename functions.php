<?php
// функция для подсчета количества задач категорий проекта

function takeProjectCount (array $taskArray, $projectName): int
{
    $countTask = 0;
    foreach ($taskArray as $task) {
        foreach ($task as $elem) {
            if ($projectName === $elem) {
                $countTask += 1;
            }
        }
    } return $countTask;
};

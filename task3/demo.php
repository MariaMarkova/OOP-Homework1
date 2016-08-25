<?php

require_once 'autoload.php';

$task1 = new Task('PHP Problem', 10);
$task2 = new Task('Java Problem', 22);
$task3 = new Task('JS Problem', 5);

$employee1 = new Employee('Gosho');
$employee2 = new Employee('Pesho');
$employee3 = new Employee('Valio');

$employee1->setCurrentTask($task1);
$employee1->setHoursLeft(8);
$employee1->work();


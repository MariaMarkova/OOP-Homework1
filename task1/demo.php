<?php

require_once 'autoload.php';

$comp1 = new Computer(2016, 2500, false, 1000, 500, 'Linux');
echo 'Info comp1 before change: ' . $comp1->printInfo();

$comp1->useMemory(200);
echo 'Info comp1 after change: ' . $comp1->printInfo();

$comp2 = new Computer(2015, 1800, true, 800, 200, 'Windows');
echo 'Info comp2 before change: ' . $comp2->printInfo();

$comp2->changeOperationSystem('Linux');
echo 'Info comp2 after change: ' . $comp2->printInfo();
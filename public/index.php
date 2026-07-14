<?php
// CS 85 Module 6, Assignment 6A by Gregory Hagen 7/12/26
// https://github.com/Greg01001000/cs85-module6b-mvcapp.git
// public\index.php


require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BudgetController;

// Instantiate the Controller and call its method
$controller = new BudgetController();
$controller->showReport();
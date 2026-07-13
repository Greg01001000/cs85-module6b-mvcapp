<?php
// CS 85 Module 6, Assignment 6A by Gregory Hagen 7/12/26
// https://github.com/Greg01001000/module6a_mvc_project-.git
// src\Controllers\BudgetController.php


namespace App\Controllers;

use App\Models\Budget;

class BudgetController
{
    public function __construct($category,$limit)
    {
        $this->category = $category;
        $this->limit = $limit;
    }

    public function showCategory($category)
    {

    }

    $budget = new Budget('Groceries',400);
}
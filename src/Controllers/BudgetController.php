<?php
// CS 85 Module 6, Assignment 6A by Gregory Hagen 7/12/26
// https://github.com/Greg01001000/module6a_mvc_project-.git
// src\Controllers\BudgetController.php


namespace App\Controllers;

use App\Models\Budget;

class BudgetController
{
    public function showReport()
    {
        $budgetData = [
            ['Groceries',    400.00,  287.50],
            ['Rent',        1500.00, 1500.00],
            ['Dining Out',   200.00,  143.75],
            ['Transport',    150.00,  162.00],
            ['Entertainment',100.00,   45.00],
        ];

        $budgets = [];
        foreach ($budgetData as $item) {
            [$category, $limit, $spent] = $item;
            if (empty($category) || !is_string($category)) {
                continue;
            }
            if (!is_numeric($limit) || $limit < 0 || !is_numeric($spent) || $spent < 0) {
                continue;
            }
            $budgets[] = new Budget($category, (float)$limit, (float)$spent);
        }
        require __DIR__ . '/../../views/BudgetReport.php';
    }
}
<?php
// CS 85 Module 6, Assignment 6A by Gregory Hagen 7/12/26
// https://github.com/Greg01001000/module6a_mvc_project-.git
// src\Models\Budget.php


namespace App\Models;

class Budget
{
    private string $category;   // e.g., 'Groceries'
    private float $limit;       // e.g., 400.00
    private float $spent;       // e.g., 117.25

    public function __construct(string $category, float $limit, float $spent)
    {
        $this->category = $category;
        $this->limit = $limit;
        $this->spent = $spent;
    }

    public function getCategory(): string { return $this->category; }
    public function getLimit(): float { return $this->limit; }
    public function getSpent(): float { return $this->spent; }
    public function isOverBudget(): bool { return $this->spent > $this->limit; }

    public function remaining(): float {
        $remain = $this->limit - $this->spent;
        return $remain >= 0 ? $remain : 0;
    }

    public function percentSpent(): float {
    if ($this->limit <= 0) {
        return 0;
    }
    return ($this->spent / $this->limit) * 100;
    }
}
<!--CS 85 Module 6, Assignment 6A by Gregory Hagen 7/12/26-->
<!--https://github.com/Greg01001000/module6a_mvc_project-.git -->
<!--Test URL:  -->
<!--views\BudgetReport.php -->
<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Budget Report</title>
    </head>
<body>
    <h2>Budget Report</h2>
    <table border='1' cellpadding='8'>
        <tr>
            <th>Category</th>
            <th>Limit</th>
            <th>Spent so far</th>
            <th>Remaining available</th>
            <th>% Spent</th>
            <th>Status</th>
        </tr>
        <?php foreach ($budgets as $budget): ?>
            <tr>
                <td><?php echo htmlspecialchars($budget->getCategory()); ?></td>
                <td>$<?php echo number_format($budget->getLimit(), 2); ?></td>
                <td>$<?php echo number_format($budget->getSpent(), 2); ?></td>
                <td>$<?php echo number_format($budget->remaining(), 2); ?></td>
                <td><?php echo number_format($budget->percentSpent(), 1); ?>%</td>
                <td><?php echo $budget->isOverBudget() ? 'OVER BUDGET' : 'OK'; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
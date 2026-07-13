<!--CS 85 Module 6, Assignment 6A by Gregory Hagen 7/12/26-->
<!--https://github.com/Greg01001000/module6a_mvc_project-.git -->
<!--Test URL:  -->
<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Budget Report</title>
    </head>
<body>
    <h2>Budget Report</h2>
    Category: <?php echo htmlspecialchars($category->getCategory()); ?>
    Limit: <?php echo number_format($category->getLimit(), 2); ?>
    Spent so far: <?php echo number_format($category->getSpent(), 2); ?>
    Remaining available: <?php echo number_format($category->remaining(), 2); ?>
</body>
</html>
## CS 85 Module 6, Assignment 6A by Gregory Hagen 7/12/26

GitHub URL: https://github.com/Greg01001000/cs85-module6b-mvcapp/

### Why I chose this topic
We're practicing OOP and MVC; so I wanted an app centered on a class with multiple properties and methods, which makes sense for making and displaying multiple objects with different properties. Our assignment instructions said to choose something from our daily lives, and a budget fits all those criteria (each category, e.g., groceries or rent, can be an object with properties like *limit* and *spent*).

### What the app does
This app instantiates 5 objects representing budget categories, with properties for the category name, limit, and spent so far. It then shows all the budget properties in a table, also calculating and showing, for each category, the remaining funds available, percentage spent, and status (Ok or over budget). The app follows MVC principles, keeping the Model, View, and Controller code in separate files.

### The hardest part
The hardest part was figuring out how to load the web page in my browser using Laravel Herd. The assignment instructions confused me regarding which folder to put the project in and which URL to put in the browser to load the page. Besides that, it took some time to understand which code goes in which file, to keep MVC separation. But now that I've worked through both those issues, I expect they will both be much easier for me in the future.

### What I learned about MVC
I learned that MVC principles keep projects (apps) more organized, compared to having all code in one big file, or multiple files with no constraints on which type of code goes where. Trying to modify disorganized code means having to search through **all** the code just to find the small part we want to edit, or the place that it makes some sense to add what we want to. On the other hand, MVC means separating code that obtains and stores data from code that formats and outputs the data, and keeping both of those separate from code that controls what happens in what order. So finding code that does any particular task is much easier, and finding the best place to add new code is much easier, because the overall code is more organized.

### The AI-generated code
***The exact prompt I gave to Claude.ai was:***
Attached are my files for a Laravel Herd app using Composer autoload. Please write code to add a column to the output showing the percentage of each budget item spent so far. The app follows MVC separation principles; so the calculation method belongs in the model file (Budget.php), and the display code belongs in the view file, BudgetReport.php.

***The raw AI-generated code had two sections. First, it correctly said to add this code to Budget.php:***
```
public function percentSpent(): float {
    if ($this->limit <= 0) {
        return 0;
    }
    return ($this->spent / $this->limit) * 100;
}
```

***Second, it correctly said to add two lines in this section of BudgetReport.php--the "th>% Spent</th" line and the "td><?php echo number_format($budget->percentSpent(), 1); ?>%</td" line:***
```
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
```

## My Critique of the AI-generated code
The AI-generated code was perfect in style and function. The only thing I can think of to complain about is that, for BudgetReport.php, Claude didn't make it obvious which two lines I needed to add, out of the 18-line block that it provided for context. But it wasn't difficult to find the two new lines. Come to think of it, it did a similar thing with the new method for Budget.php--it provided the new method in a code block that included the previous, existing method, which made it clear where I should add the new method, once I distinguised the new code from the existing code (which was very easy in that case). While writing this, I got curious and gave Claude another prompt (in the same chat, right after the response I've been discussing). The 2nd prompt is:<br>
*The code blocks you just showed are mostly already existing--please clarify which parts need to be changed or added.*<br>
Claude's response was excellent--three code blocks showing only the new code, no existing code, with clear, unambiguous explanations of exactly where to add them. It added that nothing else needed to be changed, including in the other app files. So now I know how to get such clarification if needed, and I think I know how to craft a first prompt to get that type of response initially, if I want to. Which I think I do, because Claude's 2nd response would have been quicker to implement than the 1st response.

## Setup instructions
- Make sure Laravel Herd is installed (it includes PHP and Composer which is also required for this app).
- In your command-line shell, navigate to your Herd directory (e.g., C:\Users\yourname\Herd\) and run this line:<br> ```git clone https://github.com/Greg01001000/cs85-module6b-mvcapp.git```
- Enter ```cd cs85-module6b-mvcapp```
- Enter ```composer dump-autoload```
- Visit ```http://cs85-module6b-mvcapp.test``` in your browser

Author's footnote: My local URL for this app is http://cs85_projects.test/cs85/module6a_mvc_project/public/index.php
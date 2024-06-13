<?php
$pageTitle = 'PHP COURSE CHALLENGES';
include_once('templates/header.php');
?>
<div class="container mx-auto mt-5 rounded-3 h-75 border shadow p-5">
    <h1 class="fs-3 text-center">Select a Challenge</h1>
    <div class="body-challenges">
        <button class="btn w-100" type="button" data-bs-toggle="collapse" data-bs-target="#Challenge1" aria-expanded="false" aria-controls="Challenge1">
            Variables Challenge
        </button>
        <div class="collapse" id="Challenge1">
            <div class="card card-body">
                <div class="card-tittle text-center">Instructions</div>
                <div class="card-text">
                    <p> You will have some HTML in the starter code for this lesson. It contains a blog post with a title, author, and body. Your job is to add a few variables to the file and use them to display the blog post. You can use the same text/content or add new content. Define your variables at the top of the file and use them in the HTML below.</p>
                    - Add a variable called `$title` and set it to the title of the blog post and part of the title of the page.<br>
                    - Add a variable called `$author` and set it to the author of the blog post.<br>
                    - Add a variable called `$body` and set it to the body of the blog post.<br>
                    - Add a variable called `$pageTitle` with the string "Brad's PHP Blog | and the title of the blog post.
                    <br>You can use concatenation or interpolation to combine the two strings. If you use concatenation, be sure to escape the apostrophe/single quote in "Brad's".
                </div>
                <a href="VariableChallenge/index.php " class="card-link mt-2">Check Result</a>
            </div>
        </div>
        <button class="btn w-100" type="button" data-bs-toggle="collapse" data-bs-target="#Challenge2" aria-expanded="false" aria-controls="Challenge2">
            Array and Loop Challenge
        </button>
        <div class="collapse" id="Challenge2">
            <div class="card card-body">
                <div class="card-tittle text-center">Instructions</div>
                <div class="card-text">
                    <h4 class="fs-4"># Challenge 1: Multiplication Table</h4>
                    <p>Create a multiplication table using a nested `for` loop</p>
                    <h4 class="fs-4"># Challenge 2: Get The Sum Of An Array</h4>
                    <p>In this challenge, I want you to use a `foreach` loop.</p>
                    <h4 class="fs-4"># Challenge 3: Student Average Grade</h4>
                    <p>1. Create a multidimensional array called $students that contains associative arrays for each student.<br>
                        2. Each student's associative array should have keys for 'name' and 'grades'.<br>
                        3. The 'grades' key should have an array of numeric grades for that student.<br>
                        4. Use a foreach loop to iterate over each student in the $students array.<br>
                        5. Calculate the average grade for each student and display their name and average grade.</p>
                </div>
                <a href="ArrayChallenge/index.php" class="card-link mt-2">Check Result</a>
            </div>
        </div>
    </div>
</div>
<?php include_once('templates/footer.php') ?>;
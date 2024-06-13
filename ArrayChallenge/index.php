<?php
$pageTitle = "Array and Loop Challenge";
include_once('../templates/header.php');
?>
<!--First Challenge-->
<div class="container mx-auto bg-primary-subtle p-0 mt-5">
    <h1 class="bg-primary text-white text-center" style="margin: 0;padding: 0;">## Challenge 1: Multiplication Table</h1>
    <div class="d-flex justify-content-evenly">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="multiplication-block text-center p-3 ">
                <h2 class="fs-6"><?php echo "Table of $i"; ?></h2>
                <ul class="list-unstyled">
                    <?php for ($j = 1; $j <= 10; $j++) : ?>
                        <li><?php echo $i . ' x ' . $j . ' = ' . $i * $j; ?></li>
                    <?php endfor; ?>
                </ul>
            </div>
        <?php endfor; ?>
    </div>
</div>
<!--Second Challenge-->
<div class="container mx-auto bg-info-subtle p-0 mt-5 text-center">
    <h1 class="bg-info text-white text-center">## Challenge 2: Get The Sum Of An Array</h1>
    <div class="chall-body p-3">
        <?php
        $arr = [];
        for ($i = 1; $i <= rand(5, 20); $i++) {
            $arr[$i] = rand(1, 100);
        }
        $total_sum = 0;
        foreach ($arr as $each) {
            echo $total_sum . ' + ' . $each . ' = ' . $total_sum += $each;
            echo "</br>";
        }
        ?>
    </div>
</div>
<!--Third Challenge-->
<div class="container mx-auto bg-warning-subtle p-0 mt-5 text-center mb-5">
    <h1 class="bg-warning text-white text-center">## ## Challenge 3: Student Average Grade</h1>
    <div class="chall-body p-3">
        <?php
        $students = [
            [
                'name' => 'Ricardo Cerna',
                'grades' => [85, 81, 98]
            ],
            [
                'name' => 'Linda Moran de Cerna',
                'grades' => [95, 71, 92]
            ],
            [
                'name' => 'Noa Tusy',
                'grades' => [81, 87, 98]
            ]
        ]
        ?>
        <div class="d-flex justify-content-evenly">
            <?php foreach ($students as $student) : ?>
                <div class="card " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $student['name']; ?></h5>
                        <ul class="list-unstyled">
                            <?php foreach ($student['grades'] as $grades) : ?>
                                <li class="text-secondary">Grades: <?php echo $grades ?></li>
                            <?php endforeach ?>
                        </ul>
                        <h5 class="text-dark fw-bold">Average = <?php echo number_format(array_sum($student['grades']) / count($student['grades']), 2); ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
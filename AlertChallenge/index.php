<?php
include_once('../templates/header.php');
$message = "";
$empty;
$submited = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])) {
    $submited = true;
    $title = isset($_POST['tittle']) ? htmlspecialchars($_POST['tittle']) : "";
    $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : "";
    if (empty($title) || empty($description)) {
        $message = "<p class='text-white bg-danger px-5 text-center mt-3'>PLS FILL ME</p>";
    }
    $file = $_FILES['archivo'];
    if ($file['error'] == UPLOAD_ERR_OK) {
        $uploadDir = '/var/www/html/php_course/AlertChallenge/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $filename = uniqid() . '_' . $file['name'];
        if (move_uploaded_file($file['tmp_name'], $uploadDir . $filename)) {
            $message = "<p class='text-white bg-success px-5 text-center mt-3'>SUCCESS</p>";
        }
    } else {
        $message = "<p class='text-white bg-danger px-5 text-center mt-3'>PROBLEMS WITH THE FILE</p>";
    }
}
?>
<div class="container mx-auto w-25 mt-5 border p-5 bg-primary-subtle">
    <h1 class="fs-1 text-center ">Submit a File </h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3 mt-4">
            <input type="text" class="form-control" name="tittle" placeholder="tittle">
        </div>
        <div class="form-group mb-3 mt-4">
            <input type="text" class="form-control" name="description" placeholder="description">
        </div>
        <div class="form-group mb-3 mt-4">
            <input type="file" class="form-control" name="archivo">
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-3 w-25 d-block mx-auto mt-5 text-center">
    </form>
    <?php if ($submited) : ?>
        <div id="message-box" class="container">
            <?= $message; ?>
        </div>
    <?php endif; ?>
</div>
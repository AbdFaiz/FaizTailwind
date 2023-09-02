<?php

include_once("./Models/Student.php");

$id = $_GET['id'];
$student = Student::show($id);

?>

<?php include('./layouts/top.php'); ?>
<?php include('./layouts/header.php'); ?>

<!-- Content -->
    <div class="container mx-auto my-5">
        <div class="bg-slate-300 rounded-xl shadow-md p-6 w-2/3 mx-auto">
            <div class="flex items-center mb-6 bg-slate-400 rounded-xl p-3">
                <div class="w-1/5">
                    <p class="font-bold text-gray-700">Nama :</p>
                    <p class="font-bold text-gray-700">NIS :</p>
                </div>
                <div class="w-4/5">
                    <p class="text-gray-800"><?= $student['name'] ?></p>
                    <p class="text-gray-800"><?= $student['nis'] ?></p>
                </div>
            </div>

            <div class="text-center">
                <a href="index.php" class="bg-teal-400 hover:bg-teal-600 hover:shadow-sm shadow-slate-700 text-white py-2 px-4 rounded-full inline-block transition-all duration-200">Back</a>
            </div>
        </div>
    </div>

<!-- Content End -->
<?php include('./layouts/footer.php'); ?>
<?php include('./layouts/bottom.php'); ?>
<?php

include_once("./Models/Student.php");

$student = Student::show($_GET['id']);

if(isset($_POST['submit'])){
    $response = Student::update([
        'id' => $_GET['id'],
        'name' => $_POST['name'],
        'nis' => $_POST['nis'],
    ]);

    setcookie('message', $response, time() + 10);

    header('Location: index.php');
}
?>


<?php include('./layouts/top.php'); ?>
<?php include('./layouts/header.php'); ?>

<!-- content -->
  <div class="basis-1/4 p-3">
    <div class="bg rounded-xl p-3 bg-slate-700 hover:drop-shadow-xl  transition-all duration-300">
        <h1 class="text-white text-center text-2xl mb-2 font-semibold">Form Edit Nilai</h1>
          <input type="hidden" name="id" value="<?=$student['id']?>">
            <form action="" method="POST">
              <div class="mb-3">
                <label class="text-white font-semibold" for="nama">Nama</label>
                <input class="rounded-xl p-1.5 block w-full border-1 transition duration-300 ease-in-out border-gray-300 focus:outline-none focus:border-teal-500 focus:ring focus:ring-emerald-200 glowing-border" type="text" id="nama" name="name" value="<?=$student['name'] ?>" placeholder="Enter Name"  />
              </div>
              <div class="mb-3">
                <label class="text-white font-semibold" for="nis">NIS</label>
                <input class="rounded-xl p-1.5 block w-full border-1 transition duration-300 ease-in-out border-gray-300 focus:outline-none focus:border-teal-500 focus:ring focus:ring-emerald-200 glowing-border" type="number" id="nis" name="nis" value="<?=$student['nis'] ?>" placeholder="Enter NIS" />
              </div>
              <div class="grid gap-2">
                <button class="bg-emerald-500 hover:bg-emerald-800 text-white p-1 rounded-xl transition-all duration-200" type="submit" id="submit" name="submit">SUBMIT</button>
              </div>
            </form>
      </div>
  </div>

<?php include('./layouts/footer.php'); ?>
<?php include('./layouts/bottom.php'); ?>
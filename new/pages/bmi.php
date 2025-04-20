<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../assets/css/bmi.css">
      <link rel="stylesheet" href="../assets/css/home.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include '../includes/header.php'; ?>
<?php 
      $bmi_result='';
      if($_SERVER['REQUEST_METHOD']=== 'POST'){
            $weight=$_POST['weight'];
            $height=$_POST['height'];

            if($weight>0 && $weight <250 && $height>0 && $height<300){
                  $bmi=$weight/($height/100)**2;
                  $bmi=round($bmi,2);

                  if ($bmi < 18.5) {
                        $status = "Underweight";
                    } elseif ($bmi < 24.9) {
                        $status = "Normal weight";
                    } elseif ($bmi < 29.9) {
                        $status = "Overweight";
                    } elseif ($bmi<35){
                        $status = "Obese";
                    }
                    else {
                        $status = "Extremely obese";
                    }
                  $bmi_result= "Your BMI: $bmi --> ($status)";
            }
            else {
                  $bmi_result = "Please enter valid weight and height!";
            }
      }
?>
<div class="container py-4">
  <div class="row">
    <!-- BMI Info -->
    <div class="col-12 col-md-6 order-1 order-md-2 mb-4">
      <div class="bmi-info text-center p-3 border rounded bg-light h-100">
        <h2>What is BMI?</h2>
        <ul class="text-start">
          <li>BMI (Body Mass Index) is a measure of weight relative to height.</li>
          <li>BMI is a quick, low-cost, and reliable screening measure.</li>
          <li>Used to detect underweight, overweight, or obesity.</li>
          <li>It's a helpful population health measure used worldwide.</li>
          <li>Should be considered with other health factors.</li>
        </ul>
      </div>
    </div>

    <!-- BMI Form -->
    <div class="col-12 col-md-6 order-2 order-md-1 mb-4">
      <div class="bmi-calculate p-3 border rounded bg-white h-100">
        <form method="POST">
          <div class="mb-3 text-start">
            <label for="weight" class="form-label fw-bold">Weight (kg)</label>
            <input type="number" class="form-control" name="weight" placeholder="Enter your weight">
          </div>
          <div class="mb-3 text-start">
            <label for="height" class="form-label fw-bold">Height (cm)</label>
            <input type="number" class="form-control" name="height" placeholder="Enter your height">
          </div>
          <button type="submit" class="btn btn-primary w-100">Calculate BMI</button>
          <div class="mt-3 fw-bold" id="result"><?= $bmi_result ?></div>
        </form>
      </div>
    </div>
  </div>

  <!-- BMI Image -->
  <div class="row mt-4">
    <div class="col text-center">
      <img src="../assets/images/BMI-TABLE.png" alt="BMI Table" class="img-fluid rounded shadow">
    </div>
  </div>
</div>


      <?php include '../includes/footer.php'; ?>
</body>
</html>
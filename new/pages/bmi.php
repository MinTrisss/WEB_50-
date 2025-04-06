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
      <div class="bmi-body d-flex align-items-center">
            <div class="bmi-calculate flex-fill">
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
            <div class="bmi-info flex-fill text-center">
                  <h2>What is BMI?</h2>
                  <ul>
                        <li class="text-start">BMI(Body Mass Index) is a measure of weight relative to height.</li>
                        <li class="text-start">BMI is a quick, low-cost, and reliable screening measure for underweight, overweight, or obesity.</li>
                        <li class="text-start">BMI is a valuable population health measure used worldwide.</li>
                        <li class="text-start">For individuals, BMI should be considered with other factors, such as blood pressure, cholesterol levels, and physical examination.</li>
                  </ul>
            </div>
      </div>
      <div class="bmi-img d-flex justify-content-center align-items-center">
            <img src="../assets/images/BMI-TABLE.png" alt="">
      </div>
      <?php include '../includes/footer.php'; ?>
</body>
</html>
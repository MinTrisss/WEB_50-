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
      <script src=""></script>
</head>
<body>
<header>
        <div class="header d-flex text-white-65">
              <div class="p-3 flex-fill align-items-center">
                    <img src="assets/images/1813361.png" alt="">
              </div>
              <div class="p-3 d-flex flex-fill flex-row-reverse ">
                    <a class="p-3 flex-fill nav-link active" href="../pages/login.php">LOG IN</a>
                    <div class="flex-fill">
                          <a class="p-3 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">EXPLORE</a>   
                          <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                <li><a class="dropdown-item" href="#">Workout log</a></li>
                                <li><a class="dropdown-item" href="#">Goals</a></li>
                                <li><a class="dropdown-item" href="../pages/bmi.php">BMI</a></li>
                                <li><a class="dropdown-item" href="../pages/exercises.php">Excercises</a></li>
                    </ul> 
                    </div>       
                    <a class="p-3 flex-fill nav-link active" href="#">ABOUT</a>
                    <a class="p-3 flex-fill nav-link active" href="../index.php">HOME</a>
              </div>
        </div>
      </header>
      <div class="bmi-body d-flex align-items-center">
            <div class="bmi-calculate flex-fill">
                  <form>
                        <div class="mb-3 text-start">
                            <label for="weight" class="form-label fw-bold">Weight (kg)</label>
                            <input type="number" class="form-control" id="weight" placeholder="Enter your weight">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="height" class="form-label fw-bold">Height (cm)</label>
                            <input type="number" class="form-control" id="height" placeholder="Enter your height">
                        </div>
                        <button id="cal-btn" type="button" class="btn btn-primary w-100">Calculate BMI</button>
                        <div class="mt-3 fw-bold" id="result">Your BMI: --</div>
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
</body>
<?php include '../includes/footer.php'; ?>
</html>
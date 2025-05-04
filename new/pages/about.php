<!-- pages/about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About - FitLife</title>
  <link rel="stylesheet" href="../assets/css/home.css" />
  <link rel="stylesheet" href="../assets/css/about.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php include '../includes/header.php'; ?>

  <!-- BẮT ĐẦU PHẦN ABOUT -->
  <section id="about" class="container my-5">
    <h2 class="mb-4">About FitLife</h2>
    <hr />

    <div class="bg-light p-4 rounded mb-4">
      <p class="lead text-center mb-0">
        Our goal is to make people healthier and happier by offering the simplest way to track workouts, monitor progress, and stay connected with fitness goals.
      </p>
      <p>
        User 1 here.
      </p>
    </div>

    <!-- BỔ SUNG PHẦN GIỚI THIỆU CHI TIẾT -->
    <div class="mt-5">
      <div class="text-center mb-5">
        <h3 class="fw-bold">"Track your progress, transform your life."</h3>
        <p class="text-muted">Join FitLife on the journey to become your best self.</p>
      </div>

      <div class="row align-items-center mb-5">
        <div class="col-md-6">
          <h4 class="fw-semibold mb-3">🧭 Mission – "Track to Transform"</h4>
          <p>We started this project from our personal fitness journeys. Struggling with weight, packed school schedules, and a lack of motivation, we deeply understand how hard it is to maintain a healthy lifestyle—especially without knowing where to start.</p>
        </div>
        <div class="col-md-6">
          <img src="../assets/images/mission.jpg" class="img-fluid rounded-4 shadow" alt="Mission">
        </div>
      </div>

      <div class="row align-items-center mb-5">
        <div class="col-md-6 order-md-2">
          <h4 class="fw-semibold mb-3">📊 Our Core Values</h4>
          <ul class="list-unstyled">
            <li><strong>Simplicity:</strong> A user-friendly interface even for beginners.</li>
            <li><strong>Science-backed:</strong> Based on accurate nutrition and training principles.</li>
            <li><strong>Personalization:</strong> Tailored tracking for your unique goals.</li>
          </ul>
        </div>
        <div class="col-md-6 order-md-1">
          <img src="../assets/images/values.jpg" class="img-fluid rounded-4 shadow" alt="Values">
        </div>
      </div>
<div class="row align-items-center mb-5">
        <div class="col-md-6">
          <h4 class="fw-semibold mb-3">🚀 What Makes Us Different</h4>
          <p>Fitness Tracker is not just a logging tool. It's your companion—helping you understand your body’s changes through data and building long-term transformation through small, consistent steps.</p>
        </div>
        <div class="col-md-6">
          <img src="../assets/images/difference.jpg" class="img-fluid rounded-4 shadow" alt="Difference">
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-md-6 order-md-2">
          <h4 class="fw-semibold mb-3">🎯 We’re Here for You</h4>
          <p>No matter where you’re starting from—if you’re ready to become a better version of yourself, Fitness Tracker will walk with you every step of the way.</p>
        </div>
        <div class="col-md-6 order-md-1">
          <img src="../assets/images/support.jpg" class="img-fluid rounded-4 shadow" alt="Support">
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <p>If you have any feedback or suggestions, feel free to contact us</p>
      <a href="#contact" class="btn btn-primary">Contact</a>
    </div>
  </section>
  <!-- KẾT THÚC PHẦN ABOUT -->

  <?php include '../includes/footer.php'; ?>
</body>
</html>
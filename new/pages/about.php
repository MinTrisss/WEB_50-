<!-- pages/about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About - FitLife</title>
  <link rel="stylesheet" href="../assets/css/home.css" />
  <link rel="stylesheet" href="../assets/css/about.css" /> <!-- Nếu bạn có file CSS riêng -->
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
    </div>

    <div class="mb-4">
      <h4>Our Team</h4>
      <div class="row">
        <div class="col-md-4"><strong>Nguyễn Văn A</strong><br />Product Owner</div>
        <div class="col-md-4"><strong>Trần Thị B</strong><br />UI/UX Designer</div>
        <div class="col-md-4"><strong>Lê Văn C</strong><br />Fullstack Developer</div>
        <div class="col-md-4 mt-3"><strong>Phạm Thị D</strong><br />Android Developer</div>
        <div class="col-md-4 mt-3"><strong>Đỗ Văn E</strong><br />iOS Developer</div>
        <div class="col-md-4 mt-3"><strong>Hoàng Thị F</strong><br />QA Engineer</div>
        <div class="col-md-4 mt-3"><strong>Vũ Đức G</strong><br />CTO, Founder</div>
        <div class="col-md-4 mt-3"><strong>Ngô Thị H</strong><br />Sales & Marketing</div>
      </div>
    </div>

    <div class="text-center mt-5">
      <p>If you have any feedback or suggestions, feel free to contact us at <strong>info@fitlife.com</strong></p>
      <a href="#contact" class="btn btn-primary">Contact</a>
    </div>
  </section>
  <!-- KẾT THÚC PHẦN ABOUT -->

  <?php include '../includes/footer.php'; ?>
</body>
</html>

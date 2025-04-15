<?php
session_start();
include 'db_conn.php';
$isLoggedIn = isset($_SESSION['user_id']);
$username = $_SESSION['username'] ?? '';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <?= $isLoggedIn ? "Welcome $username to FIT LIFE" : "FIT LIFE" ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav text-end">
        <li class="nav-item">
          <a class="nav-link active" href="../index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/about.php">ABOUT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">EXPLORE</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../pages/workout.php">Workout log</a></li>
            <li><a class="dropdown-item" href="../pages/goals.php">Goals</a></li>
            <li><a class="dropdown-item" href="../pages/bmi.php">BMI</a></li>
            <li><a class="dropdown-item" href="../pages/exercises.php">Exercises</a></li>
          </ul>
        </li>
        <?php if ($isLoggedIn): ?>
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $username ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="userDropdown" style="min-width: 250px;">
                        <li><strong>Personal information</strong></li>
                        <li><hr class="dropdown-divider"></li>
                        <!-- Hiển thị thông tin người dùng -->
                        <li id="user-info">
                        <span id="user-info-loading">Loading...</span>
                        </li>
                        <!-- Thêm thông tin -->
                        <li><hr class="dropdown-divider"></li>
                        <li><button id="add-info-btn" class="dropdown-item text-danger">Edit information</button></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="../pages/logout.php">Log out</a></li>
                  </ul>
            </li>
            <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="../pages/login.php">LOG IN</a>
            </li>
            <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal Thêm Thông Tin -->
<div class="modal fade" id="addInfoModal" tabindex="-1" aria-labelledby="addInfoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addInfoModalLabel">Edit personal information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateForm" action="update_user_info.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select class="form-select" id="gender" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="weight" class="form-label">Weight:</label>
            <input type="number" class="form-control" id="weight" name="weight" required>
          </div>
          <div class="mb-3">
            <label for="height" class="form-label">Height:</label>
            <input type="number" class="form-control" id="height" name="height" required>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
      document.getElementById('add-info-btn').addEventListener('click', function() {
    // Mở modal
      var addInfoModal = new bootstrap.Modal(document.getElementById('addInfoModal'));
      addInfoModal.show();
      });
</script>

<script>
document.getElementById('userDropdown').addEventListener('click', () => {
  fetch('../pages/get_user_info.php')
    .then(response => {
    console.log('Raw response:', response);
    return response.json();
  })
    .then(data => {
      console.log('Parsed data:', data);
      if (data.error) {
        document.getElementById('user-info-loading').innerText = data.error;
      } else {
        document.getElementById('user-info-loading').innerHTML = `
          <div><strong>Name:</strong> ${data.full_name}</div>
          <div><strong>Age:</strong> ${data.age}</div>
          <div><strong>Gender:</strong> ${data.gender}</div>
          <div><strong>Height:</strong> ${data.height} cm</div>
          <div><strong>Weight:</strong> ${data.weight} kg</div>
        `;
      }
    })
    .catch(error => {
      console.error('Fetch error:', error);
      document.getElementById('user-info-loading').innerText = 'Error loading data';
    });
});
</script>
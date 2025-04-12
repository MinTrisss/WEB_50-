<?php
session_start();
$servername = "127.0.0.1"; // hoặc "localhost"
$username = "root";
$password = "";            // nếu có đặt mật khẩu thì điền vào
$database = "fit_life";    // thay bằng tên DB của bạn

$conn = new mysqli($servername, $username, $password, $database);
$user_id = $_SESSION['user_id'];

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Xử lý thêm ghi chú
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $content = $_POST['content'];
    $stmt = $conn->prepare("
    INSERT INTO calendar_notes (user_id, note_date, content) 
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE content = VALUES(content)");
    $stmt->bind_param("iss", $user_id, $date, $content);
    $stmt->execute();
}

// Lấy dữ liệu ghi chú
$notes = [];
$result = $conn->query("SELECT note_date, content FROM calendar_notes WHERE user_id = $user_id");
while ($row = $result->fetch_assoc()) {
    $notes[$row['note_date']] = $row['content'];
}

// Lấy tháng và năm

$month = $_GET['month'] ?? date('m');
$year = $_GET['year'] ?? date('Y');
$first_day = mktime(0, 0, 0, $month, 1, $year);
$days_in_month = date('t', $first_day);
$start_day = date('w', $first_day);
$today = date('Y-m-d');
?>
<div class="container mt-4">
    <h2 class="text-center mb-4">Workout schedule - <?php echo "$month/$year"; ?></h2>
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Sun</th><th>Mon</th><th>Tue</th>
                    <th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $day_count = 0;

                    for ($blank = 0; $blank < $start_day; $blank++) {
                        echo "<td></td>";
                        $day_count++;
                    }

                    for ($day = 1; $day <= $days_in_month; $day++) {
                        $date_str = "$year-" . str_pad($month, 2, "0", STR_PAD_LEFT) . "-" . str_pad($day, 2, "0", STR_PAD_LEFT);
                        $date = date('Y-m-d', strtotime($date_str));
                        $note = $notes[$date] ?? '';

                        $isToday = ($today == $date);
                        $cellClass = $isToday ? "bg-info text-white" : "";

                        echo "<td class='$cellClass'>";
                        ?>
                        <div>
                            <strong><?= $day ?></strong>
                            <form method="POST" class="mt-2">
                                <input type="hidden" name="date" value="<?= $date ?>">
                                <textarea name="content" class="form-control mb-2" rows="3" readonly><?= htmlspecialchars($note) ?></textarea>
                            </form>
                            <button type="button" class="btn btn-sm btn-outline-light <?= $isToday ? 'btn-light text-primary' : 'btn-info' ?>" data-bs-toggle="modal" 
                                data-bs-target="#noteModal"
                                onclick="openNoteModal('<?= $date ?>', `<?= htmlspecialchars($note) ?>`)">Add comment
                            </button>
                        </div>
                        </td>
                        <?php
                        $day_count++;
                        if ($day_count % 7 == 0) echo "</tr><tr>";
                    }

                    while ($day_count % 7 != 0) {
                        echo "<td></td>";
                        $day_count++;
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal comment -->
<div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="noteModalLabel">Workout list</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="date" id="modalDate">
        <div class="mb-3">
          <label for="modalContent" class="form-label">Content</label>
          <textarea name="content" id="modalContent" rows="4" class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>

<script>
function openNoteModal(date, content) {
    document.getElementById('modalDate').value = date;
    document.getElementById('modalContent').value = content;
}
</script>

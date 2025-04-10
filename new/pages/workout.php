<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../assets/css/home.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css' rel='stylesheet' />
      <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js'></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php include '../includes/header.php'; ?>  
<?php 
      session_start();
      $user_id = $_SESSION['user_id'];
?>
<div id='calendar'></div>
<script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, { //create calender
            initialView: 'dayGridMonth', //diaplay as date
            selectable: true, //can select
            events: '../includes/getNotes.php', // khi ma click r thi lay du lieu tu DB va tra ve kieu JSON
            dateClick: function(info) { 
                let note = prompt("Add note for date: " + info.dateStr); //khi click vao mot ngay se mo cua so promp
                if (note) { //neu da nhap ghi chu
                    $.post('../includes/addNote.php', { //them du lieu vao DB
                        date: info.dateStr, 
                        content: note 
                    }, function() {
                        calendar.refetchEvents(); //tai du lieu tu lich, cap nhat giao dien
                    });
                }
            },
            eventClick: function(info) {
                let isDelete = confirm("Do you want to delete this note?");
                if (isDelete) {
                    $.post('../includes/deleteNote.php', {
                        id: info.event.id
                    }, function() {
                        calendar.refetchEvents();
                    });
                }
            }
        });
        calendar.render();
    });
</script>
</body>
<?php include '../includes/footer.php'; ?>
</html>
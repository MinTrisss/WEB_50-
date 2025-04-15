// JavaScript chính

      document.getElementById('add-info-btn').addEventListener('click', function() {
    // Mở modal
      var addInfoModal = new bootstrap.Modal(document.getElementById('addInfoModal'));
      addInfoModal.show();
      });



document.getElementById('userDropdown').addEventListener('click', () => {
  fetch('pages/get_user_info.php')
    .then(response => {
    console.log('Raw response:', response);
    return response.json();
  })
    .then(data => {
      console.log('Parsed data:', data);
      if (data.error) {
        document.getElementById('user-info-loading').innerText = data.error;
      } else {
        document.getElementById('user-info-loading').innerHTML = 
          `<div><strong>Gmail:</strong> <?= $gmail ?> </div>
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



document.getElementById('updateForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Ngăn reload trang

  const formData = new FormData(this);

  fetch('pages/update_user_info.php', {
  method: 'POST',
  body: formData
})
.then(res => res.text())
.then(text => {
  console.log("Raw response:", text); // 👈 kiểm tra tại đây
  const data = JSON.parse(text);
  if (data.success) {
  // Đóng modal rồi reload lại trang
  setTimeout(() => {
    const modal = bootstrap.Modal.getInstance(document.getElementById('addInfoModal'));
    modal.hide();

    location.reload(); // ✅ Reload lại chính trang hiện tại
  }, 1000);
  } else {
    document.getElementById('updateMsg').innerText = "Error: " + data.message;
  }
})
.catch(err => {
  document.getElementById('updateMsg').innerText = "Information updated successfully!";
});
});
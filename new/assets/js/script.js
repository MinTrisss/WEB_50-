// JavaScript chính
// open modal
document.getElementById('add-info-btn').addEventListener('click', function() {
// Mở modal
var addInfoModal = new bootstrap.Modal(document.getElementById('addInfoModal'));
addInfoModal.show();
});

//get user information then display on modal
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
          `<div><strong>Gmail:</strong>  ${data.email} </div>
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

//edit the information
document.getElementById('updateForm').addEventListener('submit', function(e) {
  e.preventDefault(); 

  const formData = new FormData(this);

  fetch('pages/update_user_info.php', {
  method: 'POST',
  body: formData
})
.then(res => res.text())
.then(text => {
  console.log("Raw response:", text); 
  const data = JSON.parse(text);
  if (data.success) {
  // close the modal and reload page
  setTimeout(() => {
    const modal = bootstrap.Modal.getInstance(document.getElementById('addInfoModal'));
    modal.hide();

    location.reload(); 
  }, 1000);
  } else {
    document.getElementById('updateMsg').innerText = "Error: " + data.message;
  }
})
.catch(err => {
  document.getElementById('updateMsg').innerText = "Information updated successfully!";
});
});

//search 
function fetchSuggestions() {
  const input = document.getElementById('searchInput');
  const query = input.value.trim();
  const suggestionBox = document.getElementById('suggestionsBox');

  if (query.length === 0) {
    suggestionBox.innerHTML = '';
    return;
  }

  fetch(`pages/suggestions.php?query=${encodeURIComponent(query)}`)
    .then(response => response.json())
    .then(data => {
      suggestionBox.innerHTML = '';
      data.forEach(item => {
        const li = document.createElement('li');
        li.textContent = item;
        li.classList.add('list-group-item', 'list-group-item-action');
        li.style.cursor = 'pointer';
        li.onclick = () => {
          input.value = item;
          suggestionBox.innerHTML = '';
        };
        suggestionBox.appendChild(li);
      });
    });
}
  
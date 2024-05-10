function submitForm() {
    event.preventDefault();

    var formData = new FormData(document.getElementById('info-form'));

    fetch('config.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('user-name').textContent = formData.get('name');
        document.getElementById('user-age').textContent = formData.get('age') + ' anos';
        document.getElementById('user-address').textContent = formData.get('address');
        document.getElementById('user-bio').textContent = formData.get('bio');

        document.getElementById('name').value = '';
        document.getElementById('age').value = '';
        document.getElementById('address').value = '';
        document.getElementById('bio').value = '';

        console.log(data);
    })
    .catch(error => console.error('Erro:', error));
}

function previewImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('profile-pic').src = e.target.result;
    };

    reader.readAsDataURL(file);
}
document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'app/model/access_db/register_process.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            document.getElementById('responseMessage').textContent = response.message;

            // Redirect to login page after a successful registration
            if (response.message === 'Registration successful.') {
                setTimeout(function() {
                    window.location.href = 'index.php?search=login';
                }, 1000);
            }
        } else {
            document.getElementById('responseMessage').textContent = 'An error occurred!';
        }
    };

    xhr.send(formData); 
});

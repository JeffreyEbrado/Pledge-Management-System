function removingLogoutButton(){
   //if already logout the removes log_out btn
}

function addingLogout(){
    //if login successfully then add log_out btn
}

function removingLoginSignup(){
   //goes successfully in login or register
}

function sendData() {
   //ui = user input
   var url = "process.php";
   var ui_firstname  = document.getElementById("input_fname").value;
   var ui_lastname = document.getElementById("input_lname").value;
   var ui_citeid = document.getElementById("input_citeid").value;
   var ui_password = document.getElementById("input_password").value;
   var ui_retypepassword = document.getElementById("input_retypepassword").value;
   
   var data = {
       firstname: ui_firstname,
       lastname: ui_lastname,
       citeid: ui_citeid,
       password: ui_password,
       retypepassword: ui_retypepassword
   };
   
   fetch(url, {
       method: 'POST',
       headers: {
           'Content-Type': 'application/json'
       },
       body: JSON.stringify(data)
   })
   .then(response => composer.json())
   .then(data => {
      if (data.success) {
         alert('Registration successful');
       } else {
         alert('Registration failed: ' + data.message);
       }
   })
   .catch(error => console.error('Error:', error));
}

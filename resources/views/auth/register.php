<?php
$title = 'Registration Attendance Track';
ob_start();
?>

<div class="display_details">
   Register
</div>

<form action="/Model/register_action.php" method="POST" class="input_panel center_all_in_one_direction">
    <label>FirstName</label>
    <input type="text" name="register_firstname" class="firstname_textfield">
    <label>LastName</label>
    <input type="text" name="register_lastname" class="lastname_textfield">
    <label>Cite Id</label>
    <input type="text" name="register_citeid" class="citeid_textfield">
    <label>Password</label>
    <input type="password" name="register_password" class="username_textfield">
    <label class="label_confirmpass">Confirm Password</label>
    <input type="password" name="register_ReTypePassword" class="username_textfield">
    <button type="submit" class="submit_button">Submit</button>
</form>

<div class="guide_panel">
  <label>You already have an account? <a href="/?search=login">Go Back</a></label>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';

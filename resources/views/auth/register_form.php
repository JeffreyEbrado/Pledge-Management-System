<div class="display_details">
   Register
</div>

<form method="POST" onclick="sendData()" class="input_panel center_all_in_one_direction">
    <label>First Name</label>
    <input type="text" id="input_fname" name="register_firstname" class="firstname_textfield">
    <label>Last Name</label>
    <input type="text" id="input_lname" name="register_lastname" class="lastname_textfield">
    <label class="cite_id_lbl">Cite Id</label>
    <input type="text" id="input_citeid" name="register_citeid" class="citeid_textfield">
    <label>Password</label>
    <input type="password" id="input_password" name="register_password" class="username_textfield">
    <label class="label_confirmpass">Confirm Password</label>
    <input type="password" id="input_retypepassword" name="register_ReTypePassword" class="username_textfield">
    <label class="upload_img_label">Upload Image</label>
    <input class="img_upload" id="input_image" type="file" name="profile" class="image_upload">
    <button type="submit" class="submit_button">Submit</button>
</form>

<div class="guide_panel">
  <label2>You already have an account? <a href="?search=login ">Go Login</a></label2>
</div>

<?php




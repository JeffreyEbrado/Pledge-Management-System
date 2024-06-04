<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Attendance Track</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main_container">
        
        <!--1. display details-->
        <div class="display_details">
           Login
        </div>
        
        <!--2. display inputs, their label and submit buttons-->
        <form class="input_panel center_all_in_one_direction">
            <label class="label">ID</label>
            <input type="text" name="id" class="id_textfield">
            <label class="label2">Password</label>
            <input type="password" name="password" class="id_textfield">
            <button type="submit" class="submit_button">Login</button>
        </form>

        <!--3. label and register text button-->
        <div class="guide_panel">
          <label>You don't have an account? <a href="?action=register">Register Here</a></label>
        </div>

    </div>
</body>
</html>

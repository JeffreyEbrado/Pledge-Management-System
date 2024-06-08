<header2 id="headerin">
   
    <div6 class="profile_container"> 
    <?php
     session_start();
     if(file_exists('app/model/access_db/get_profile.php')){
        require "app/model/access_db/get_profile.php";
     }
    ?>
    </div6>    

    <label class="fullname">
        <?php 
        if(isset($_SESSION['fullname'])){
            echo $_SESSION['fullname'];
        } else {
            echo "FULL NAME NOT FOUND";
        }
        ?>
    </label>

    <label4 class="status">
        <?php
        if(isset($_SESSION['status'])){
            if($_SESSION['status'] === "student"){
                echo "Status: " . $_SESSION['status'];
            } 

            if($_SESSION['status'] === "admin"){
                echo "Status: " . $_SESSION['status'];
            }

        } else {
            echo "STATUS NOT FOUND";
        }
        ?>
    </label4>
    
    <form id="logout">
        <button class="logout_button" type="submit">Log Out</button>
    </form>
</header2>

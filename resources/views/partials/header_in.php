<header>
        <img class="picture_view" src="public/images/pledge_logo.png">

        <label class="fullname">
            <?php include __DIR__ . '/../../../app/model/fullname.php'; ?>
        </label>

        <label4 class="status">
            <?php
            include __DIR__ . '/../../../app/model/status.php';
            ?>
        </label4>

        <form method="post">
            <button class="logout_button" style="display: none;" type="submit">Log Out</button>
        </form>
</header>
<html>
    <body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo '<script>alert("done");</script>' . $email . $password;
    }
    //submit this to database.
    ?> 
    
        <form action="LearnPHP/21-GET-POST-html-form.php" method="post"> // get will show stuff in url and post will do it behind it or like backend
            <div>
                <label for="EmailInput">Email Address</label>
                <input name="email" type="email">
                <small>blablabla</small>
            </div>

            <div>
                <label for="pass">Email Address</label>
                <input name="password" type="password">
                <small>blablabla</small>
            </div>

            <div>
                <button type="submi">Submit</button>
            </div>

        </form>
    </body>
</html>


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

if ($_SERVER['REQUEST_METHOD'] == 'PSOT') {
    $email = $_SERVER['email'];
    $password = $_SERVER['password'];
}

?>
<?php

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if (isset($_POST['password'])) {
        $password = $_POST['password'];

        if (loginUser($email, $password)) {
?>
            <script>
                alert('Congratulazioni a me! Sono molto stupito che tu ti sia davvero loggato!')
                window.location.replace('post.php');
            </script>
        <?php

        } else {
        ?>
            <script>
                alert('Mi dispiace ma per te non vi è posto in questo luogo idilliaco!');
            </script>
<?php
        }
    }
} else {
    return null;
}

?>

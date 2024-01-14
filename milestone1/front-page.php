<?php get_header();?>

Test

<div class="container">
    <div class="row">
        <div class="col">
            Left Side
        </div>

        <div class="col">
            Right Side
        </div>
    </div>
</div>

<?php
    // Check if a user is logged in
    $isLoggedIn = true;

    if ($isLoggedIn) {
        echo "Welcome back! You are logged in. <br>";
    } else {
        echo "Hello! You are not logged in. <br>";
    }

    // Repetition using a while loop for a different scenario
    echo "<br>Using while loop for counting down:<br>";

    $countDown = 5;
    while ($countDown > 0) {
        echo "<br>Countdown: $countDown<br>";
        $countDown--;
    }
?>

<?php get_footer();?>
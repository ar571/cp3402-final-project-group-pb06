<?php
/*
 * Template Name: Open House Template
 * Description: A template for the school's open house event.
 */

get_header();
?>

<div class="container">
    <header>
        <h1>Welcome to James Cook University Open House Event</h1>
        <p>Join us to explore our school and learn more about our programs.</p>
    </header>

    <main>
        <section class="featured">
            <h2>Featured Program</h2>
            <p>Discover our exciting programs designed to nurture young minds.</p>
            <a href="#registration" class="cta-button">Register Now</a>
        </section>

        <section>
            <h2>Event Details</h2>
            <p>Date: January 14th, 2024 (Sunday)</p>
            <p>Time: 12:00 PM – 5:00 PM </p>
            <p>Location: JCU Singapore, 149 Sims Drive, Singapore 387380</p>
        </section>

        <section id="registration">
            <h2>Registration</h2>
            <p>Secure your spot by registering for the event.</p>
            <?php echo do_shortcode('[contact-form-7 id="1ffe7f2" title="Untitled"]'); ?>
        </section>
    </main>
</div>

<?php
get_footer();
?>

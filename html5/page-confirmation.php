<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="donate-container" class="container">
  <h1>Donate</h1>

  <p id="quote">
    Your donation will empower and engage the people of Haiti, in Christ's name.
  </p>

  <iframe width="700" height="400" src="https://www.youtube.com/embed/JR0DUX1ItSw" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>

  <h3 id="confirm">Thank you, your donation has been received!  Please check your inbox for a confirmation email.</h3>

  <h3 id="fail"><a href="/donate">There was an error processing your payment, please click here to go back and try again.</a></h3>

  <div id="message"></div>

</div>

<?php get_footer(); ?>

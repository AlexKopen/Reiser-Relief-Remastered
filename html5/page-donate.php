<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="donate-container" class="container">
  <h1>Donate</h1>

  <p id="quote">
    Your donation will provide clean water, food, education and care to the poor in Haiti. Reiser Relief Inc. is a
    501(c)(3) ministry. Donations are tax-exempt as allowed by law.
  </p>

  <iframe width="700" height="400" src="https://www.youtube.com/embed/JR0DUX1ItSw" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>

  <h2>Donate Today</h2>

  <h3>By Mail or Corporate Grants</h3>

  <div class="flex-container">

    <div class="flex-item">
      <p>
        <i class="fa-solid fa-envelope"></i><br>
        Make checks payable to "Reiser Relief"<br>
        Reiser Relief, Inc.<br>
        PO Box 48096<br>
        Coon Rapids, MN 55448
      </p>
    </div>

    <div class="flex-item">
      <p>
        <i class="fa-solid fa-hand-holding-heart"></i><br>
        Many companies support employee philanthropy by offering matching gift programs. Please check with your HR
        department to see if your employer will match your gift to Reiser Relief Inc. Reiser Relief Inc. Federal Tax ID EIN:
        87-0778133
      </p>
    </div>

  </div>

  <h3>Online</h3>

  <p id="link"><a href="https://buy.stripe.com/5kAbKf7B838O05W000" target="_blank">Donate online today</a></p>

</div>

<?php get_footer(); ?>

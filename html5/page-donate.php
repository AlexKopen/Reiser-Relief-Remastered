<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="donate-container" class="container">
  <h1>Donate</h1>

  <p id="quote">
    Your donation provides hope for a brighter future and care for those unable to care for themselves. Reiser Relief Inc. is a 501(c)(3) ministry. Donations are tax-exempt as allowed by law.
  </p>

  <iframe width="700" height="400" src="https://www.youtube.com/embed/JR0DUX1ItSw" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>

  <h2>Donate Today</h2>

  <h3>By Mail</h3>

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

  </div>

  <h3>Online</h3>
  <p>
    <i class="fa-solid fa-hand-holding-heart"></i><br>
  </p>

  <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/reiser-relief-donation" name="donorbox" allowpaymentrequest="allowpaymentrequest" seamless="seamless" frameborder="0" scrolling="no" height="900px" width="427px" style="max-height:none!important"></iframe>

  <p>Reiser Relief Inc. Federal Tax ID: 87-0778133</p>

</div>

<?php get_footer(); ?>

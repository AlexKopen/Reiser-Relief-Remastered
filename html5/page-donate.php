<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="donate-container" class="container">
  <h1>Donate</h1>

  <h2>Online</h2>
  <p>
    <i class="fa-solid fa-hand-holding-heart"></i><br>
  </p>

  <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/reiser-relief-donation" name="donorbox" allowpaymentrequest="allowpaymentrequest" seamless="seamless" frameborder="0" scrolling="no" height="900px" width="427px" style="max-height:none!important"></iframe>

  <h2>By Mail</h2>

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

  <img src="" alt="">

  <p style="margin-top: 2em">
    Reiser Relief Inc. is a 501(c)(3) ministry. Donations are tax-exempt as allowed by law. <br>
    Reiser Relief Inc. Federal Tax ID: 87-0778133
  </p>

</div>

<?php get_footer(); ?>

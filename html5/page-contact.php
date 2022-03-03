<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="contact-container" class="container">
  <h1>Contact Us</h1>

  <div id="contact-form-container">
    <p id="contact-text">
      We'd love to hear from you! Whether you have questions, comments, suggestions or just want to share your story,
      please don't hesitate to reach out.
    </p>

    <div class="flex-container">
      <div id="form-item" class="flex-item">
        <form action="">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Enter name">
          <label for="email">Email</label>
          <input type="text" name="email" placeholder="Enter email">
          <label for="subject">Subject</label>
          <input type="text" name="name" placeholder="Enter subject">
          <label for="message">Message</label>
          <textarea name="message" placeholder="Enter message"></textarea>
          <button>Submit Form</button>
        </form>
      </div>

      <div id="additional-info" class="flex-item">
        <p>
          <i class="fa-solid fa-envelope"></i><br>
          Reiser Relief, Inc.<br>
          PO Box 48096<br>
          Coon Rapids, MN 55448
        </p>

        <a href="mailto:info@reiserrelief.org">
          <p>
            <i class="fa-solid fa-at"></i><br>
            info@reiserrelief.org
          </p>
        </a>

        <a href="tel:+1 763-280-3433">
          <p>
            <i class="fa-solid fa-phone"></i><br>
            +1 763.280.3433
          </p>
        </a>

      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>

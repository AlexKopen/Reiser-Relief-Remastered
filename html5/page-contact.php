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
        <div id="contact-form">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Enter name" id="contact-name-field">
          <label for="email">Email</label>
          <input type="text" name="email" placeholder="Enter email" id="contact-email-field">
          <label for="subject">Subject</label>
          <input type="text" name="subject" placeholder="Enter subject" id="contact-subject-field">
          <label for="message">Message</label>
          <textarea name="message" placeholder="Enter message" id="contact-message-field"></textarea>
          <button id="submit-button">Submit Form</button>
        </div>
        <div id="contact-success">
          <h3>
            Thank you, your form has been submitted! A team member will be in touch with you shortly.
          </h3>
        </div>
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

document.addEventListener('DOMContentLoaded', () => {

  const path = window.location.pathname.replace(/\//g, '').trim().toLowerCase();

  switch (path) {
    case 'about':
      break;
    case 'donate':
      break;
    case 'contact':
      contactSubmit();
      break;
    default:
      newsletterSignup();
  }
});

function newsletterSignup(): void {
  const submitButton = document.getElementById('submit-button');
  submitButton.addEventListener('click', () => {
    const topText: HTMLElement = document.getElementById('nl-top-text');
    const form: HTMLElement = document.getElementById('newsletter-form');
    const name: HTMLInputElement = <HTMLInputElement>document.getElementById('nl-name-field');
    const email: HTMLInputElement = <HTMLInputElement>document.getElementById('nl-email-field');
    const error: HTMLElement = document.getElementById('nl-error-text');
    const success: HTMLElement = document.getElementById('nl-success-text');

    const emailFormatted = email.value.trim();
    const nameFormatted = name.value.trim().split(' ');
    const firstName = nameFormatted[0];
    const lastName = nameFormatted[1];

    let formData = new FormData();
    formData.append('fname', firstName);
    formData.append('lname', lastName);
    formData.append('email', emailFormatted);

    fetch("/wp-json/v1/subscribe",
      {
        body: formData,
        method: "post"
      }).then((response) => {

      if (response.ok) {
        topText.style.display = 'none';
        form.style.display = 'none';
        success.style.display = 'block';
        error.style.display = 'none';
      }
    })
  })
}

function contactSubmit(): void {
  const submitButton = document.getElementById('submit-button');
  submitButton.addEventListener('click', () => {
    const form: HTMLElement = document.getElementById('contact-form');
    const name: HTMLInputElement = <HTMLInputElement>document.getElementById('contact-name-field');
    const email: HTMLInputElement = <HTMLInputElement>document.getElementById('contact-email-field');
    const subject: HTMLInputElement = <HTMLInputElement>document.getElementById('contact-subject-field');
    const message: HTMLInputElement = <HTMLInputElement>document.getElementById('contact-message-field');
    const success: HTMLInputElement = <HTMLInputElement>document.getElementById('contact-success');

    const emailFormatted = email.value.trim();

    let formData = new FormData();
    formData.append('name', name.value);
    formData.append('email', emailFormatted);
    formData.append('subject', subject.value);
    formData.append('message', message.value);

    fetch("/wp-json/v1/contact",
      {
        body: formData,
        method: "post"
      }).then((response) => {

      if (response.ok) {
        form.style.display = 'none';
        success.style.display = 'flex';
      }
    })
  })
}

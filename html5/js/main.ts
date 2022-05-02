document.addEventListener('DOMContentLoaded', () => {

  const path = window.location.pathname.replace(/\//g, '').trim().toLowerCase();

  switch (path) {
    case '':
      newsletterSignup();
      break;
    case 'about':
      break;
    case 'donate':
      stripeProcess();
      break;
    case 'contact':
      contactSubmit();
      break;
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

function stripeProcess(): void {

  const submitButton = document.getElementById('donate-button');
  submitButton.addEventListener('click', () => {
    fetch("/wp-json/v1/stripe",
      {
        method: "post"
      }).then(response => response.json())
      .then((data) => {

        //@ts-ignore
        const stripe = Stripe('pk_test_2AC3GUXKprvQgKxqOPQjxo2q');

        console.log(data)

        const options = {
          //@ts-ignore
          clientSecret: data.secret,
          // Fully customizable with appearance API.
          appearance: {/*...*/},
        };

// Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in step 5
        const elements = stripe.elements(options);

// Create and mount the Payment Element
        const paymentElement = elements.create('payment');
        paymentElement.mount('#payment-element');
      })
  })
}

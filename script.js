// Initialize EmailJS with your User ID
emailjs.init('zakir'); // Replace 'Zakir' with your EmailJS User ID

// Contact Form Submission
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form refresh

    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Send email using EmailJS
    emailjs.send('service_ittx4ic', 'zakir', {
        from_name: name,
        from_email: email,
        message: message,
    }, 'X-i0wgx0J4jtUaGZfruu6') // Private API Key as the 4th argument
    .then(
        function(response) {
            alert('Thank you for reaching out! We will get back to you soon.');
            console.log('SUCCESS!', response.status, response.text);
        },
        function(error) {
            console.error('FAILED...', error);
            alert('An error occurred. Please try again later.');
        }
    );
});

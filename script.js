// Initialize EmailJS
emailjs.init('zakir'); //

// Contact Form Submission
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form refresh

    // Gather form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Send email using EmailJS
    emailjs.send('service_iqvzt8x', 'Outlook', {
        from_name: name,
        from_email: email,
        message: message,
    }).then(
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

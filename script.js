// Initialize EmailJS with your Public Key
emailjs.init('Gn5ed9KUh2Jkks_o9'); // Your Public Key

// Contact Form Submission
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form refresh

    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Basic validation
    if (!name || !email || !message) {
        alert('All fields are required. Please fill out the form completely.');
        return;
    }

    // Show loading indicator
    const button = document.querySelector('#contact-form button');
    button.textContent = 'Sending...';
    button.disabled = true;

    // Send email using EmailJS
    emailjs.send('service_ittx4ic', 'template_ez79cmh', {
        from_name: name,
        from_email: email,
        message: message,
    }, 'Gn5ed9KUh2Jkks_o9') // Your Public Key
    .then(
        function(response) {
            alert('Thank you for reaching out! We will get back to you soon.');
            console.log('SUCCESS!', response.status, response.text);
            // Reset form and button state
            document.getElementById('contact-form').reset();
            button.textContent = 'Send Message';
            button.disabled = false;
        },
        function(error) {
            console.error('FAILED...', error);
            alert('An error occurred. Please try again later.');
            // Reset button state
            button.textContent = 'Send Message';
            button.disabled = false;
        }
    );
});

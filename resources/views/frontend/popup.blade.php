<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4bb543;
            --error-color: #ff3333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7ff;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .popup-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .popup-box {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 480px;
            position: relative;
            transform: translateY(20px);
            transition: transform 0.3s ease, opacity 0.3s ease;
            opacity: 0;
            padding: 2.5rem;
        }

        .popup-overlay.active .popup-box {
            transform: translateY(0);
            opacity: 1;
        }

        .close-btn {
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #6c757d;
            cursor: pointer;
            transition: color 0.2s;
        }

        .close-btn:hover {
            color: var(--primary-color);
        }

        .popup-header {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .popup-header h2 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .popup-header p {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark-color);
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.2s;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            background-color: white;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            width: 100%;
            padding: 0.75rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            margin-top: 0.5rem;
        }

        .submit-btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.8rem;
            margin-top: 0.25rem;
            display: block;
            opacity: 0;
            height: 0;
            transition: all 0.2s;
        }

        .error-message.show {
            opacity: 1;
            height: auto;
        }

        .success-message {
            display: none;
            text-align: center;
            padding: 2rem;
        }

        .success-message.active {
            display: block;
        }

        .success-icon {
            font-size: 3rem;
            color: var(--success-color);
            margin-bottom: 1rem;
        }

        @media (max-width: 576px) {
            .popup-box {
                padding: 1.5rem;
            }
        }

        /* Animation for form submission */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
            }

            to {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Popup Form -->
    <div class="popup-overlay" id="popupForm">
        <div class="popup-box">
            <button class="close-btn" onclick="closePopup()">×</button>

            <div class="popup-content">
                <div class="popup-header">
                    <h2>Get in Touch</h2>
                    <p>Fill out the form below and we'll get back to you soon</p>
                </div>

                <form name="contactform" method="post" action="/contact-us" id="contactform" onsubmit="loader_load()">
                    @csrf
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" placeholder="Name*" value="{{ old('name') }}"
                                required="required">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                            <input type="number" minlength="10" maxlength="12"
                                class="form-control @error('contact') is-invalid @enderror" id="contact"
                                name="contact" placeholder="Contact*" value="{{ old('contact') }}" required="required">
                            @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 form-group required">
                            <textarea type="textbox" class="form-control @error('message') is-invalid @enderror" id="message" name="message"
                                placeholder="Message*" value="" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                            <div class="g-recaptcha" data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
                            <span id="captchaErr" class="error-message"><?php //echo $captchaErr;
                            ?></span>
                        </div>
                    </div>
                    <div class="form-group submit">
                        <!-- <input type="submit" name="submit" class="btn btn-dark w-100" value="Submit"> -->
                        <div class="btn_wrapper">
                            <button class="wc-btn-primary btn-hover btn-item" id="submit"><span></span> Send
                                <br>Messages <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>

                <div class="success-message" id="successMessage">
                    <div class="success-icon">✓</div>
                    <h3>Thank You!</h3>
                    <p>Your message has been successfully submitted. We'll contact you soon.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const popupOverlay = document.getElementById('popupForm');
            const contactForm = document.getElementById('contactform');
            const successMessage = document.getElementById('successMessage');
            const submitBtn = document.getElementById('submit');

            setTimeout(() => {
                popupOverlay?.classList.add('active');
                document.body.style.overflow = 'hidden';
            }, 1000);

            function closePopup() {
                popupOverlay?.classList.remove('active');
                document.body.style.overflow = '';
                setTimeout(() => {
                    contactForm.reset();
                    clearErrorMessages();
                    successMessage?.classList.remove('active');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Send <br>Messages <i class="fa-solid fa-arrow-right"></i>';
                    contactForm.style.display = 'block';
                }, 300);
            }

            function clearErrorMessages() {
                document.querySelectorAll('.error-message-js').forEach(msg => msg.remove());
                document.querySelectorAll('.form-control').forEach(input => {
                    input.classList.remove('is-invalid');
                    input.style.borderColor = '';
                });
            }

            function showError(inputId, message) {
                const input = document.getElementById(inputId);
                input.classList.add('is-invalid');
                input.style.borderColor = '#ff434a';

                const errorSpan = document.createElement('span');
                errorSpan.className = 'error-message-js invalid-feedback d-block';
                errorSpan.innerHTML = `<strong>${message}</strong>`;
                input.parentNode.appendChild(errorSpan);

                input.classList.add('shake');
                setTimeout(() => input.classList.remove('shake'), 500);
            }

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                clearErrorMessages();

                const name = document.getElementById('name').value.trim();
                const contact = document.getElementById('contact').value.trim();
                const email = document.getElementById('email').value.trim();
                const subject = document.getElementById('subject').value.trim();
                const message = document.getElementById('message').value.trim();

                const nameRegex = /^[a-zA-Z\s]{2,}$/;
                const contactRegex = /^\d{10,12}$/;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                let isValid = true;

                if (!name) {
                    showError('name', 'Please enter your name.');
                    isValid = false;
                } else if (!nameRegex.test(name)) {
                    showError('name', 'Name must be at least 2 characters and only contain letters.');
                    isValid = false;
                }

                if (!contact) {
                    showError('contact', 'Please enter your phone number.');
                    isValid = false;
                } else if (!contactRegex.test(contact)) {
                    showError('contact', 'Phone number must be between 10 to 12 digits.');
                    isValid = false;
                }

                if (!email) {
                    showError('email', 'Please enter your email.');
                    isValid = false;
                } else if (!emailRegex.test(email)) {
                    showError('email', 'Please enter a valid email address.');
                    isValid = false;
                }

                if (!subject) {
                    showError('subject', 'Please enter a subject.');
                    isValid = false;
                }

                if (!message) {
                    showError('message', 'Please enter your message.');
                    isValid = false;
                }

                const recaptcha = document.querySelector('.g-recaptcha-response');
                if (recaptcha && recaptcha.value.trim() === "") {
                    showError('captchaErr', 'Please verify you are not a robot.');
                    isValid = false;
                }

                if (!isValid) return;

                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Sending...';

                const formData = new FormData(contactForm);
                fetch(contactForm.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) throw new Error('Failed to submit');
                        return response.text();
                    })
                    .then(data => {
                        contactForm.style.display = 'none';
                        successMessage?.classList.add('active');
                        setTimeout(closePopup, 3000);
                    })
                    .catch(error => {
                        alert('Something went wrong. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.innerHTML =
                            'Send <br>Messages <i class="fa-solid fa-arrow-right"></i>';
                    });
            });

            // Shake CSS for invalid inputs
            const style = document.createElement('style');
            style.innerHTML = `
            .shake { animation: shake 0.5s; }
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                20%, 60% { transform: translateX(-5px); }
                40%, 80% { transform: translateX(5px); }
            }
        `;
            document.head.appendChild(style);

            // Close on outside click
            popupOverlay?.addEventListener('click', (e) => {
                if (e.target === popupOverlay) closePopup();
            });
        });
    </script>


</body>

</html>

(function () {
    'use strict';

    // Form validation and submission
    const contactForm = document.getElementById('contact-form');
    const formInputs = contactForm ? contactForm.querySelectorAll('input, select, textarea') : [];
    const submitButton = contactForm ? contactForm.querySelector('button[type="submit"]') : null;

    // Validation rules
    const validationRules = {
        name: {
            required: true,
            minLength: 2,
            pattern: /^[a-zA-Z\s'-]+$/,
            message: 'Please enter a valid name (at least 2 characters)'
        },
        email: {
            required: true,
            pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            message: 'Please enter a valid email address'
        },
        phone: {
            required: false,
            pattern: /^[\d\s\-\+\(\)]+$/,
            message: 'Please enter a valid phone number'
        },
        company: {
            required: false,
            minLength: 2,
            message: 'Company name must be at least 2 characters'
        },
        'project-type': {
            required: true,
            message: 'Please select a project type'
        },
        message: {
            required: true,
            minLength: 10,
            message: 'Message must be at least 10 characters'
        }
    };

    // Validate individual field
    function validateField(field) {
        const fieldName = field.name || field.id;
        const fieldValue = field.value.trim();
        const rules = validationRules[fieldName];
        const errorElement = document.getElementById(`${fieldName}-error`);
        const formGroup = field.closest('.form-group');

        if (!rules) return true;

        // Remove previous error states
        if (formGroup) {
            formGroup.classList.remove('error', 'success');
        }

        // Check required fields
        if (rules.required && !fieldValue) {
            if (errorElement) {
                errorElement.textContent = `${field.labels[0]?.textContent || fieldName} is required`;
                errorElement.setAttribute('aria-live', 'polite');
            }
            if (formGroup) {
                formGroup.classList.add('error');
            }
            field.setAttribute('aria-invalid', 'true');
            return false;
        }

        // Skip further validation if field is empty and not required
        if (!fieldValue && !rules.required) {
            if (formGroup) {
                formGroup.classList.add('success');
            }
            field.setAttribute('aria-invalid', 'false');
            if (errorElement) {
                errorElement.textContent = '';
            }
            return true;
        }

        // Check minimum length
        if (rules.minLength && fieldValue.length < rules.minLength) {
            if (errorElement) {
                errorElement.textContent = rules.message || `Must be at least ${rules.minLength} characters`;
            }
            if (formGroup) {
                formGroup.classList.add('error');
            }
            field.setAttribute('aria-invalid', 'true');
            return false;
        }

        // Check pattern
        if (rules.pattern && !rules.pattern.test(fieldValue)) {
            if (errorElement) {
                errorElement.textContent = rules.message || 'Invalid format';
            }
            if (formGroup) {
                formGroup.classList.add('error');
            }
            field.setAttribute('aria-invalid', 'true');
            return false;
        }

        // Field is valid
        if (formGroup) {
            formGroup.classList.add('success');
            formGroup.classList.remove('error');
        }
        field.setAttribute('aria-invalid', 'false');
        if (errorElement) {
            errorElement.textContent = '';
        }
        return true;
    }

    // Validate entire form
    function validateForm() {
        let isValid = true;
        formInputs.forEach(input => {
            if (!validateField(input)) {
                isValid = false;
            }
        });
        return isValid;
    }

    // Real-time validation on input
    if (contactForm) {
        formInputs.forEach(input => {
            input.addEventListener('blur', function () {
                validateField(this);
            });

            input.addEventListener('input', function () {
                // Clear error on input if field becomes valid
                if (this.getAttribute('aria-invalid') === 'true') {
                    validateField(this);
                }
            });
        });

        // Form submission
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Validate all fields
            if (!validateForm()) {
                // Focus first invalid field
                const firstError = contactForm.querySelector('[aria-invalid="true"]');
                if (firstError) {
                    firstError.focus();
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                return;
            }

            // Disable submit button
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = 'Sending...';
            }

            // Get form data
            const formData = new FormData(contactForm);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                // Success message
                const successMessage = document.createElement('div');
                successMessage.className = 'form-success-message bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6';
                successMessage.setAttribute('role', 'alert');
                successMessage.innerHTML = '<strong>Success!</strong> Your message has been sent. We\'ll get back to you soon.';
                
                // Insert success message before form
                contactForm.parentNode.insertBefore(successMessage, contactForm);
                
                // Reset form
                contactForm.reset();
                
                // Remove success states
                formInputs.forEach(input => {
                    const formGroup = input.closest('.form-group');
                    if (formGroup) {
                        formGroup.classList.remove('success', 'error');
                    }
                    input.setAttribute('aria-invalid', 'false');
                });

                // Re-enable submit button
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.textContent = 'Send Message';
                }

                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });

                // Remove success message after 5 seconds
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);

                // In production, replace this with actual API call:
                // fetch('/api/contact', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify(data)
                // })
                // .then(response => response.json())
                // .then(result => {
                //     // Handle success
                // })
                // .catch(error => {
                //     // Handle error
                // });
            }, 1000);
        });
    }

    // Map loading handler - hide loading text when map iframe loads
    const mapContainer = document.querySelector('.contact-map-container');
    const mapIframe = document.getElementById('google-map-iframe');
    
    if (mapIframe && mapContainer) {
        mapIframe.addEventListener('load', function() {
            mapContainer.classList.add('map-loaded');
        });
        
        // Fallback: if iframe doesn't fire load event, hide after a delay
        setTimeout(function() {
            if (!mapContainer.classList.contains('map-loaded')) {
                mapContainer.classList.add('map-loaded');
            }
        }, 3000);
    }

    // Accessibility: Announce form errors to screen readers
    if (contactForm) {
        const errorAnnouncer = document.createElement('div');
        errorAnnouncer.setAttribute('role', 'status');
        errorAnnouncer.setAttribute('aria-live', 'polite');
        errorAnnouncer.setAttribute('aria-atomic', 'true');
        errorAnnouncer.className = 'sr-only';
        document.body.appendChild(errorAnnouncer);

        contactForm.addEventListener('submit', function (e) {
            if (!validateForm()) {
                const errorCount = contactForm.querySelectorAll('[aria-invalid="true"]').length;
                errorAnnouncer.textContent = `Form has ${errorCount} error${errorCount !== 1 ? 's' : ''}. Please review and correct.`;
            }
        });
    }

})();


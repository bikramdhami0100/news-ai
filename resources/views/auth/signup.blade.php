<!DOCTYPE html>
<html lang="ne">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>दर्ता गर्नुहोस् - News AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Noto Sans Devanagari', sans-serif;
            background: linear-gradient(135deg, #dc3545, #c82333);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .signup-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            max-width: 1100px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Left Side - Branding */
        .signup-left {
            background: linear-gradient(135deg, #dc3545, #c82333);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .signup-left::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .brand-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .logo-container {
            margin-bottom: 30px;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .logo-text {
            font-size: 32px;
            font-weight: 700;
            color: #dc3545;
        }

        .brand-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .brand-tagline {
            font-size: 18px;
            opacity: 0.95;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .brand-benefits {
            list-style: none;
            text-align: left;
            margin-top: 40px;
        }

        .brand-benefits li {
            padding: 12px 0;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand-benefits li::before {
            content: '✓';
            background: rgba(255,255,255,0.2);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        /* Right Side - Signup Form */
        .signup-right {
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-height: 90vh;
            overflow-y: auto;
        }

        .signup-right::-webkit-scrollbar {
            width: 6px;
        }

        .signup-right::-webkit-scrollbar-track {
            background: #f8f9fa;
            border-radius: 10px;
        }

        .signup-right::-webkit-scrollbar-thumb {
            background: #dc3545;
            border-radius: 10px;
        }

        .signup-header {
            margin-bottom: 30px;
        }

        .signup-header h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .signup-header p {
            color: #666;
            font-size: 16px;
        }

        .signup-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-weight: 600;
            color: #333;
            font-size: 14px;
            margin-left: 5px;
        }

        .form-group label .required {
            color: #dc3545;
            margin-left: 2px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
        }

        .form-group input {
            padding: 15px 15px 15px 45px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 16px;
            font-family: 'Noto Sans Devanagari', sans-serif;
            transition: all 0.3s;
            background: #f8f9fa;
        }

        .form-group input:focus {
            outline: none;
            border-color: #dc3545;
            background: white;
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
        }

        .form-group input::placeholder {
            color: #999;
        }

        .password-strength {
            height: 4px;
            background: #e9ecef;
            border-radius: 2px;
            overflow: hidden;
            margin-top: 5px;
        }

        .password-strength-bar {
            height: 100%;
            width: 0%;
            transition: all 0.3s;
            border-radius: 2px;
        }

        .password-strength-bar.weak {
            width: 33%;
            background: #dc3545;
        }

        .password-strength-bar.medium {
            width: 66%;
            background: #ffc107;
        }

        .password-strength-bar.strong {
            width: 100%;
            background: #28a745;
        }

        .password-hint {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }

        .input-error {
            font-size: 12px;
            color: #dc3545;
            margin-top: 5px;
            display: none;
        }

        .input-error.show {
            display: block;
        }

        .form-group input.error {
            border-color: #dc3545;
            background: #fff5f5;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 10px 0;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-top: 2px;
            cursor: pointer;
            accent-color: #dc3545;
            flex-shrink: 0;
        }

        .checkbox-group label {
            font-size: 14px;
            color: #666;
            cursor: pointer;
            font-weight: 400;
            line-height: 1.5;
        }

        .checkbox-group label a {
            color: #dc3545;
            text-decoration: none;
            font-weight: 600;
        }

        .checkbox-group label a:hover {
            text-decoration: underline;
        }

        .signup-btn {
            background: linear-gradient(135deg, #dc3545, #c82333);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Noto Sans Devanagari', sans-serif;
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
            margin-top: 10px;
        }

        .signup-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(220, 53, 69, 0.4);
        }

        .signup-btn:active {
            transform: translateY(0);
        }

        .signup-btn:disabled {
            background: #6c757d;
            cursor: not-allowed;
            transform: none;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }

        .divider span {
            color: #999;
            font-size: 14px;
        }

        .social-signup {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            background: white;
            color: #666;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-btn:hover {
            border-color: #dc3545;
            color: #dc3545;
            background: #fff5f5;
        }

        .social-icon {
            width: 20px;
            height: 20px;
        }

        .login-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
            font-size: 14px;
        }

        .login-link a {
            color: #dc3545;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .login-link a:hover {
            color: #c82333;
            text-decoration: underline;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 12px 15px;
            border-radius: 8px;
            font-size: 14px;
            border-left: 4px solid #dc3545;
            display: none;
            margin-bottom: 20px;
        }

        .error-message.show {
            display: block;
            animation: shake 0.5s;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 12px 15px;
            border-radius: 8px;
            font-size: 14px;
            border-left: 4px solid #28a745;
            display: none;
            margin-bottom: 20px;
        }

        .success-message.show {
            display: block;
            animation: slideIn 0.5s;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .signup-container {
                grid-template-columns: 1fr;
            }

            .signup-left {
                display: none;
            }

            .signup-right {
                padding: 40px 30px;
                max-height: none;
            }

            .signup-header h2 {
                font-size: 28px;
            }

            .social-signup {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .signup-right {
                padding: 30px 20px;
            }

            .signup-header h2 {
                font-size: 24px;
            }

            .brand-title {
                font-size: 32px;
            }

            .form-group input {
                font-size: 14px;
            }
        }

        /* Loading State */
        .signup-btn.loading {
            position: relative;
            color: transparent;
        }

        .signup-btn.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 3px solid rgba(255,255,255,0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Form Row for Name fields */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        @media (max-width: 480px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <!-- Left Side - Branding -->
        <div class="signup-left">
            <div class="brand-content">
                <div class="logo-container">
                    <div class="logo">
                        <span class="logo-text">NA</span>
                    </div>
                </div>
                <h1 class="brand-title">News AI</h1>
                <p class="brand-tagline">नयाँ खाता बनाउनुहोस् र हाम्रो समुदायमा सामेल हुनुहोस्</p>
                <ul class="brand-benefits">
                    <li>निःशुल्क समाचार पहुँच</li>
                    <li>व्यक्तिगत समाचार फिड</li>
                    <li>लेख सुरक्षित गर्नुहोस्</li>
                    <li>टिप्पणी र साझेदारी गर्नुहोस्</li>
                    <li>विशेष सामग्री पहुँच</li>
                    <li>सूचना अपडेटहरू प्राप्त गर्नुहोस्</li>
                </ul>
            </div>
        </div>

        <!-- Right Side - Signup Form -->
        <div class="signup-right">
            <div class="signup-header">
                <h2>खाता सिर्जना गर्नुहोस्</h2>
                <p>केही क्षणमा सुरु गर्नुहोस्</p>
            </div>

            <div class="error-message" id="errorMessage"></div>
            <div class="success-message" id="successMessage"></div>

            <form class="signup-form" id="signupForm" action="/register" method="POST">
                <div class="form-group">
                    <label for="name">पूरा नाम <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            placeholder="आफ्नो पूरा नाम प्रविष्ट गर्नुहोस्" 
                            required
                            autocomplete="name"
                        >
                    </div>
                    <span class="input-error" id="nameError"></span>
                </div>

                <div class="form-group">
                    <label for="email">इमेल ठेगाना <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">✉</span>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="your@email.com" 
                            required
                            autocomplete="email"
                        >
                    </div>
                    <span class="input-error" id="emailError"></span>
                </div>

                <div class="form-group">
                    <label for="password">पासवर्ड <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="कम्तिमा ८ वर्ण" 
                            required
                            autocomplete="new-password"
                        >
                    </div>
                    <div class="password-strength">
                        <div class="password-strength-bar" id="strengthBar"></div>
                    </div>
                    <p class="password-hint">कम्तिमा ८ वर्ण, एक अक्षर र एक संख्या</p>
                    <span class="input-error" id="passwordError"></span>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">पासवर्ड पुष्टि गर्नुहोस् <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            placeholder="पासवर्ड फेरि प्रविष्ट गर्नुहोस्" 
                            required
                            autocomplete="new-password"
                        >
                    </div>
                    <span class="input-error" id="confirmPasswordError"></span>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        म <a href="/terms-of-service" target="_blank">सेवा सर्तहरू</a> र 
                        <a href="/privacy-policy" target="_blank">गोपनीयता नीति</a> सँग सहमत छु
                    </label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">
                        म समाचार, अपडेटहरू र विशेष प्रस्तावहरू प्राप्त गर्न चाहन्छु
                    </label>
                </div>

                <button type="submit" class="signup-btn">खाता सिर्जना गर्नुहोस्</button>
            </form>

            <div class="divider">
                <span>वा</span>
            </div>

            <div class="social-signup">
                <a href="/auth/google" class="social-btn">
                    <svg class="social-icon" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Google
                </a>
                <a href="/auth/facebook" class="social-btn">
                    <svg class="social-icon" viewBox="0 0 24 24">
                        <path fill="#1877F2" d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </a>
            </div>

            <div class="login-link">
                पहिले नै खाता छ? <a href="/login">यहाँ लगइन गर्नुहोस्</a>
            </div>
        </div>
    </div>

    <script>
        // Form elements
        const signupForm = document.getElementById('signupForm');
        const signupBtn = signupForm.querySelector('.signup-btn');
        const errorMessage = document.getElementById('errorMessage');
        const successMessage = document.getElementById('successMessage');
        
        // Input fields
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const termsCheckbox = document.getElementById('terms');
        
        // Error messages
        const nameError = document.getElementById('nameError');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');
        const confirmPasswordError = document.getElementById('confirmPasswordError');
        
        // Password strength
        const strengthBar = document.getElementById('strengthBar');

        // Real-time validation
        nameInput.addEventListener('blur', validateName);
        emailInput.addEventListener('blur', validateEmail);
        passwordInput.addEventListener('input', updatePasswordStrength);
        passwordInput.addEventListener('blur', validatePassword);
        confirmPasswordInput.addEventListener('blur', validateConfirmPassword);

        function validateName() {
            const name = nameInput.value.trim();
            if (name.length === 0) {
                showInputError(nameInput, nameError, 'नाम आवश्यक छ');
                return false;
            } else if (name.length < 2) {
                showInputError(nameInput, nameError, 'नाम कम्तिमा २ वर्णको हुनुपर्छ');
                return false;
            } else {
                hideInputError(nameInput, nameError);
                return true;
            }
        }

        function validateEmail() {
            const email = emailInput.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email.length === 0) {
                showInputError(emailInput, emailError, 'इमेल आवश्यक छ');
                return false;
            } else if (!emailRegex.test(email)) {
                showInputError(emailInput, emailError, 'कृपया मान्य इमेल ठेगाना प्रविष्ट गर्नुहोस्');
                return false;
            } else {
                hideInputError(emailInput, emailError);
                return true;
            }
        }

        function validatePassword() {
            const password = passwordInput.value;
            
            if (password.length === 0) {
                showInputError(passwordInput, passwordError, 'पासवर्ड आवश्यक छ');
                return false;
            } else if (password.length < 8) {
                showInputError(passwordInput, passwordError, 'पासवर्ड कम्तिमा ८ वर्णको हुनुपर्छ');
                return false;
            } else if (!/(?=.*[a-zA-Z])(?=.*[0-9])/.test(password)) {
                showInputError(passwordInput, passwordError, 'पासवर्डमा कम्तिमा एक अक्षर र एक संख्या हुनुपर्छ');
                return false;
            } else {
                hideInputError(passwordInput, passwordError);
                return true;
            }
        }

        function validateConfirmPassword() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            if (confirmPassword.length === 0) {
                showInputError(confirmPasswordInput, confirmPasswordError, 'पासवर्ड पुष्टि आवश्यक छ');
                return false;
            } else if (password !== confirmPassword) {
                showInputError(confirmPasswordInput, confirmPasswordError, 'पासवर्डहरू मेल खाँदैनन्');
                return false;
            } else {
                hideInputError(confirmPasswordInput, confirmPasswordError);
                return true;
            }
        }

        function updatePasswordStrength() {
            const password = passwordInput.value;
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.length >= 12) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;
            
            strengthBar.className = 'password-strength-bar';
            
            if (strength <= 2) {
                strengthBar.classList.add('weak');
            } else if (strength <= 4) {
                strengthBar.classList.add('medium');
            } else {
                strengthBar.classList.add('strong');
            }
        }

        function showInputError(input, errorElement, message) {
            input.classList.add('error');
            errorElement.textContent = message;
            errorElement.classList.add('show');
        }

        function hideInputError(input, errorElement) {
            input.classList.remove('error');
            errorElement.classList.remove('show');
        }

        function showError(message) {
            errorMessage.textContent = message;
            errorMessage.classList.add('show');
            successMessage.classList.remove('show');
            
            setTimeout(() => {
                errorMessage.classList.remove('show');
            }, 5000);
        }

        function showSuccess(message) {
            successMessage.textContent = message;
            successMessage.classList.add('show');
            errorMessage.classList.remove('show');
        }

        // Form submission
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous messages
            errorMessage.classList.remove('show');
            successMessage.classList.remove('show');
            
            // Validate all fields
            const isNameValid = validateName();
            const isEmailValid = validateEmail();
            const isPasswordValid = validatePassword();
            const isConfirmPasswordValid = validateConfirmPassword();
            
            if (!isNameValid || !isEmailValid || !isPasswordValid || !isConfirmPasswordValid) {
                showError('कृपया सबै त्रुटिहरू सच्याउनुहोस्');
                return;
            }
            
            if (!termsCheckbox.checked) {
                showError('कृपया सेवा सर्तहरू स्वीकार गर्नुहोस्');
                return;
            }
            
            // Show loading state
            signupBtn.classList.add('loading');
            signupBtn.disabled = true;
            
            // Get form data
            const formData = new FormData(signupForm);
            
            // Simulate API call (replace with actual API call)
            setTimeout(() => {
                // Remove loading state
                signupBtn.classList.remove('loading');
                signupBtn.disabled = false;
                
                // Here you would normally make an actual API call
                console.log('Signup data:', {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    newsletter: formData.get('newsletter') === 'on'
                });
                
                // Show success message
                showSuccess('खाता सफलतापूर्वक सिर्जना गरियो! तपाईंलाई पुनर्निर्देशित गरिँदैछ...');
                
                // Uncomment to actually submit the form
                // signupForm.submit();
                
                // Simulate redirect after 2 seconds
                setTimeout(() => {
                    // window.location.href = '/login';
                    console.log('Redirecting to login...');
                }, 2000);
            }, 1500);
        });

        // Add input focus effects
        const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.parentElement.style.transform = 'translateY(-2px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.parentElement.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>
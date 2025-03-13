<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WorldData API - Authentication</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    
    .auth-tabs-container {
      position: relative;
    }
    
    .tab-indicator {
      position: absolute;
      bottom: 0;
      height: 2px;
      background-color: #111827;
      transition: all 0.3s ease;
    }

    @media (max-width: 640px) {
      .mobile-menu {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: white;
        z-index: 50;
        padding: 1rem;
        transition: transform 0.3s ease-in-out;
        transform: translateX(-100%);
      }
      
      .mobile-menu.active {
        transform: translateX(0);
      }
    }

    .error-message {
      color: #ef4444;
      font-size: 0.75rem;
      margin-top: 0.25rem;
    }

    .success-message {
      color: #10b981;
      font-size: 0.75rem;
      margin-top: 0.25rem;
    }
  </style>
</head>
<body class="bg-white text-gray-900 min-h-screen">
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="mobile-menu sm:hidden">
    <div class="flex justify-between items-center mb-8">
      <div class="flex items-center space-x-2">
        <i class="fas fa-globe text-gray-900 text-xl"></i>
        <h1 class="text-xl font-medium tracking-tight">WorldData</h1>
      </div>
      <button id="close-menu" class="text-gray-500 hover:text-gray-900">
        <i class="fas fa-times text-xl"></i>
      </button>
    </div>
    <nav class="flex flex-col space-y-6">
      <a href="#" class="text-gray-900 font-medium">Home</a>
      <a href="#" class="text-gray-600 hover:text-gray-900">Documentation</a>
    </nav>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Simple Header -->
    <header class="relative z-10 mb-10 sm:mb-12">
      <div class="flex justify-between items-center py-4">
        <!-- Logo and Brand -->
        <div class="flex items-center space-x-2">
          <i class="fas fa-globe text-gray-900 text-xl"></i>
          <h1 class="text-xl font-medium tracking-tight">WorldData</h1>
        </div>
        
        <!-- Desktop Menu - Simplified -->
        <div class="hidden sm:flex items-center space-x-4">
          <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Home</a>
          <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Documentation</a>
        </div>
        
        <!-- Mobile Menu Button -->
        <button id="open-menu" class="sm:hidden text-gray-500 hover:text-gray-900">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </header>

    <!-- Auth Container with improved responsiveness -->
    <div class="max-w-md mx-auto my-12 sm:my-16 px-4 sm:px-0">
      <h2 class="text-2xl sm:text-3xl font-bold tracking-tight mb-6 sm:mb-8 text-center">Account Access</h2>
      
      <!-- Auth Tabs -->
      <div class="auth-tabs-container mb-6 sm:mb-8 border-b border-gray-200">
        <div class="flex">
          <button id="login-tab" class="flex-1 text-center py-3 font-medium text-gray-900 relative" onclick="switchTab('login')">Log In</button>
          <button id="signup-tab" class="flex-1 text-center py-3 font-medium text-gray-500 relative" onclick="switchTab('signup')">Sign Up</button>
        </div>
        <div id="tab-indicator" class="tab-indicator" style="left: 0; width: 50%;"></div>
      </div>
      
      <!-- Login Form with API connection -->
      <div id="login-form" class="transition-opacity">
        <div id="login-message" class="mb-4 text-center hidden"></div>
        
        <form id="login-form-element">
          <div class="mb-5 sm:mb-6">
            <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="email" id="login-email" name="email" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition-colors" placeholder="you@example.com" required>
            <div id="login-email-error" class="error-message hidden"></div>
          </div>
          
          <div class="mb-5 sm:mb-6">
            <div class="flex items-center justify-between mb-1">
              <label for="login-password" class="block text-sm font-medium text-gray-700">Password</label>
              <a href="#" class="text-xs text-gray-600 hover:text-gray-900">Forgot password?</a>
            </div>
            <input type="password" id="login-password" name="password" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition-colors" placeholder="••••••••" required>
            <div id="login-password-error" class="error-message hidden"></div>
          </div>
          
          <div class="mb-5 sm:mb-6">
            <div class="flex items-center">
              <input type="checkbox" id="remember-me" class="h-4 w-4 border-gray-300 rounded text-gray-900 focus:ring-gray-500">
              <label for="remember-me" class="ml-2 block text-sm text-gray-600">Remember me</label>
            </div>
          </div>
          
          <button type="submit" class="w-full bg-gray-900 hover:bg-gray-800 text-white py-2 rounded-md transition-colors mb-5 sm:mb-6">Log in</button>
        </form>
        
        <div class="relative flex items-center justify-center mb-5 sm:mb-6">
          <div class="h-px bg-gray-200 w-full"></div>
          <span class="px-2 text-xs text-gray-500 bg-white relative">or continue with</span>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <button class="flex items-center justify-center py-2 px-4 border border-gray-200 rounded-md hover:bg-gray-50 transition-colors">
            <i class="fab fa-github mr-2"></i>
            <span class="text-sm">GitHub</span>
          </button>
          <button class="flex items-center justify-center py-2 px-4 border border-gray-200 rounded-md hover:bg-gray-50 transition-colors">
            <i class="fab fa-google mr-2"></i>
            <span class="text-sm">Google</span>
          </button>
        </div>
      </div>
      
      <!-- Sign Up Form with API connection -->
      <div id="signup-form" class="hidden transition-opacity">
        <div id="signup-message" class="mb-4 text-center hidden"></div>
        
        <form id="signup-form-element">
          <div class="mb-5 sm:mb-6">
            <label for="signup-name" class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
            <input type="text" id="signup-name" name="name" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition-colors" placeholder="John Doe" required>
            <div id="signup-name-error" class="error-message hidden"></div>
          </div>
          
          <div class="mb-5 sm:mb-6">
            <label for="signup-email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="email" id="signup-email" name="email" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition-colors" placeholder="you@example.com" required>
            <div id="signup-email-error" class="error-message hidden"></div>
          </div>
          
          <div class="mb-5 sm:mb-6">
            <label for="signup-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="signup-password" name="password" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition-colors" placeholder="••••••••" required>
            <div id="signup-password-error" class="error-message hidden"></div>
            <p class="mt-1 text-xs text-gray-500">Must be at least 8 characters long</p>
          </div>
          
          <div class="mb-5 sm:mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition-colors" placeholder="••••••••" required>
            <div id="signup-password-confirmation-error" class="error-message hidden"></div>
          </div>
          
          <div class="mb-5 sm:mb-6">
            <div class="flex items-start">
              <input type="checkbox" id="terms" name="terms" class="mt-1 h-4 w-4 border-gray-300 rounded text-gray-900 focus:ring-gray-500" required>
              <label for="terms" class="ml-2 block text-sm text-gray-600">
                I agree to the <a href="#" class="text-gray-900 hover:underline">Terms of Service</a> and <a href="#" class="text-gray-900 hover:underline">Privacy Policy</a>
              </label>
            </div>
          </div>
          
          <button type="submit" class="w-full bg-gray-900 hover:bg-gray-800 text-white py-2 rounded-md transition-colors mb-5 sm:mb-6">Create account</button>
        </form>
        
        <div class="relative flex items-center justify-center mb-5 sm:mb-6">
          <div class="h-px bg-gray-200 w-full"></div>
          <span class="px-2 text-xs text-gray-500 bg-white relative">or continue with</span>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <button class="flex items-center justify-center py-2 px-4 border border-gray-200 rounded-md hover:bg-gray-50 transition-colors">
            <i class="fab fa-github mr-2"></i>
            <span class="text-sm">GitHub</span>
          </button>
          <button class="flex items-center justify-center py-2 px-4 border border-gray-200 rounded-md hover:bg-gray-50 transition-colors">
            <i class="fab fa-google mr-2"></i>
            <span class="text-sm">Google</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Footer with improved responsiveness -->
    <footer class="border-t border-gray-200 pt-6 sm:pt-8 pb-6 mt-16">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="text-sm text-gray-500 mb-4 md:mb-0">© 2025 WorldData. All rights reserved.</div>
        <div class="flex flex-wrap justify-center gap-4 sm:gap-6">
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Terms</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Privacy</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Contact</a>
        </div>
      </div>
    </footer>
  </div>
  
  <script>
    // API Base URL for local development
    const API_URL = 'http://localhost:8000/api';
    
    // Token storage
    function saveToken(token) {
      localStorage.setItem('auth_token', token);
    }
    
    function getToken() {
      return localStorage.getItem('auth_token');
    }
    
    function clearToken() {
      localStorage.removeItem('auth_token');
    }
    
    // User storage
    function saveUser(user) {
      localStorage.setItem('user', JSON.stringify(user));
    }
    
    function getUser() {
      const user = localStorage.getItem('user');
      return user ? JSON.parse(user) : null;
    }
    
    function clearUser() {
      localStorage.removeItem('user');
    }
    
    // Login form submission
    document.getElementById('login-form-element').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('login-email').value;
      const password = document.getElementById('login-password').value;
      
      // Reset previous error messages
      document.querySelectorAll('#login-form .error-message').forEach(el => {
        el.classList.add('hidden');
        el.textContent = '';
      });
      
      const messageEl = document.getElementById('login-message');
      messageEl.classList.add('hidden');
      
      // Send login request to API
      fetch(`${API_URL}/login`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-Requested-With': 'XMLHttpRequest'
        },
        credentials: 'include',
        body: JSON.stringify({
          email: email,
          password: password
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.token) {
          // Login successful
          saveToken(data.token);
          saveUser(data.user);
          
          // Show success message
          messageEl.textContent = 'Login successful! Redirecting...';
          messageEl.classList.remove('hidden', 'error-message');
          messageEl.classList.add('success-message');
          
          // Redirect to dashboard after delay
          setTimeout(() => {
            window.location.href = '/dashboard';
          }, 1500);
        } else if (data.errors) {
          // Validation errors
          Object.keys(data.errors).forEach(field => {
            const errorEl = document.getElementById(`login-${field}-error`);
            if (errorEl) {
              errorEl.textContent = data.errors[field][0];
              errorEl.classList.remove('hidden');
            }
          });
        } else if (data.message) {
          // Other error (e.g. invalid credentials)
          messageEl.textContent = data.message;
          messageEl.classList.remove('hidden', 'success-message');
          messageEl.classList.add('error-message');
        }
      })
      .catch(error => {
        messageEl.textContent = 'An error occurred. Please try again.';
        messageEl.classList.remove('hidden', 'success-message');
        messageEl.classList.add('error-message');
        console.error('Login error:', error);
        
        // Show detailed error in console for debugging
        console.log('Error details:', {
          message: error.message,
          stack: error.stack
        });
      });
    });
    
    // Register form submission
    document.getElementById('signup-form-element').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const name = document.getElementById('signup-name').value;
      const email = document.getElementById('signup-email').value;
      const password = document.getElementById('signup-password').value;
      const passwordConfirmation = document.getElementById('password_confirmation').value;
      
      // Reset previous error messages
      document.querySelectorAll('#signup-form .error-message').forEach(el => {
        el.classList.add('hidden');
        el.textContent = '';
      });
      
      const messageEl = document.getElementById('signup-message');
      messageEl.classList.add('hidden');
      
      // Send register request to API
      fetch(`${API_URL}/register`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-Requested-With': 'XMLHttpRequest'
        },
        credentials: 'include',
        body: JSON.stringify({
          name: name,
          email: email,
          password: password,
          password_confirmation: passwordConfirmation
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.token) {
          // Registration successful
          saveToken(data.token);
          saveUser(data.user);
          
          // Show success message
          messageEl.textContent = 'Account created successfully! Redirecting...';
          messageEl.classList.remove('hidden', 'error-message');
          messageEl.classList.add('success-message');
          
          // Redirect to dashboard after delay
          setTimeout(() => {
            window.location.href = '/dashboard';
          }, 1500);
        } else if (data.errors) {
          // Validation errors
          Object.keys(data.errors).forEach(field => {
            let errorEl;
            
            if (field === 'password_confirmation') {
              errorEl = document.getElementById('signup-password-confirmation-error');
            } else {
              errorEl = document.getElementById(`signup-${field}-error`);
            }
            
            if (errorEl) {
              errorEl.textContent = data.errors[field][0];
              errorEl.classList.remove('hidden');
            }
          });
        } else if (data.message) {
          // Other error
          messageEl.textContent = data.message;
          messageEl.classList.remove('hidden', 'success-message');
          messageEl.classList.add('error-message');
        }
      })
      .catch(error => {
        messageEl.textContent = 'An error occurred. Please try again.';
        messageEl.classList.remove('hidden', 'success-message');
        messageEl.classList.add('error-message');
        console.error('Registration error:', error);
        
        // Show detailed error in console for debugging
        console.log('Error details:', {
          message: error.message,
          stack: error.stack
        });
      });
    });
    
    // Function to check if user is already logged in
    function checkAuth() {
      const token = getToken();
      if (token) {
        // For local development, just show a message instead of redirecting
        console.log('User is already authenticated with token:', token);
        // Uncomment the line below when you're ready to redirect
        // window.location.href = '/dashboard';
      }
    }
    
    // Check auth on page load
    window.addEventListener('DOMContentLoaded', checkAuth);
    
    // Tab switching functionality
    function switchTab(tab) {
      const loginTab = document.getElementById('login-tab');
      const signupTab = document.getElementById('signup-tab');
      const loginForm = document.getElementById('login-form');
      const signupForm = document.getElementById('signup-form');
      const indicator = document.getElementById('tab-indicator');
      
      if (tab === 'login') {
        loginTab.classList.remove('text-gray-500');
        loginTab.classList.add('text-gray-900');
        signupTab.classList.remove('text-gray-900');
        signupTab.classList.add('text-gray-500');
        
        loginForm.classList.remove('hidden');
        signupForm.classList.add('hidden');
        
        indicator.style.left = '0';
        indicator.style.width = '50%';
      } else {
        signupTab.classList.remove('text-gray-500');
        signupTab.classList.add('text-gray-900');
        loginTab.classList.remove('text-gray-900');
        loginTab.classList.add('text-gray-500');
        
        signupForm.classList.remove('hidden');
        loginForm.classList.add('hidden');
        
        indicator.style.left = '50%';
        indicator.style.width = '50%';
      }
    }
    
    // Mobile menu functionality
    document.getElementById('open-menu').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.add('active');
    });
    
    document.getElementById('close-menu').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.remove('active');
    });
  </script>
</body>
</html>
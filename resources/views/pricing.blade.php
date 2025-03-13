<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WorldData API - Pricing</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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
    
    .pricing-card {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    
    .pricing-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .popular-badge {
      position: absolute;
      top: -12px;
      left: 50%;
      transform: translateX(-50%);
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
      <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
      <a href="#" class="text-gray-600 hover:text-gray-900">Documentation</a>
      <a href="#" class="text-gray-900 font-medium">Pricing</a>
    </nav>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Header -->
    <header class="relative z-10 mb-10 sm:mb-16">
      <div class="flex justify-between items-center py-4 border-b border-gray-100">
        <!-- Logo and Brand -->
        <div class="flex items-center space-x-2">
          <i class="fas fa-globe text-gray-900 text-xl"></i>
          <h1 class="text-xl font-medium tracking-tight">WorldData</h1>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden sm:flex items-center space-x-6">
          <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Home</a>
          <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Documentation</a>
          <a href="#" class="text-sm text-gray-900 border-b border-gray-900 pb-1">Pricing</a>
          <a href="#" class="bg-gray-900 hover:bg-gray-800 text-white text-sm px-4 py-2 rounded-md transition-colors">Get API Key</a>
        </div>
        
        <!-- Mobile Menu Button -->
        <button id="open-menu" class="sm:hidden text-gray-500 hover:text-gray-900">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </header>

    <!-- Pricing Header -->
    <div class="text-center mb-16">
      <h1 class="text-3xl sm:text-4xl font-bold mb-4">Simple, transparent pricing</h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Choose the plan that fits your needs. All plans include access to our complete API with country data.
      </p>
    </div>

    <!-- Billing Toggle (Monthly/Annual) -->
    <div class="flex justify-center items-center mb-12">
      <span id="monthly-label" class="text-sm font-medium text-gray-900">Monthly</span>
      <label class="relative mx-4 inline-flex items-center cursor-pointer">
        <input type="checkbox" id="billing-toggle" class="sr-only peer">
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-gray-900"></div>
      </label>
      <span id="annual-label" class="text-sm text-gray-500">Annual <span class="text-xs text-green-600 ml-1">Save 20%</span></span>
    </div>

    <!-- Pricing Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
      <!-- Free Plan -->
      <div class="pricing-card relative bg-white border border-gray-200 rounded-lg p-6">
        <div class="mb-4">
          <h3 class="text-lg font-semibold mb-1">Free</h3>
          <p class="text-sm text-gray-600 mb-4">For personal projects and testing</p>
          <div class="flex items-baseline">
            <span id="free-price" class="text-3xl font-bold">$0</span>
            <span class="text-gray-500 ml-1">/month</span>
          </div>
        </div>
        
        <ul class="space-y-3 mb-6">
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">1,000 requests per month</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Basic country data</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Standard API access</span>
          </li>
          <li class="flex items-start text-gray-400">
            <i class="fas fa-times mt-1 mr-3"></i>
            <span class="text-sm">No rate limiting</span>
          </li>
          <li class="flex items-start text-gray-400">
            <i class="fas fa-times mt-1 mr-3"></i>
            <span class="text-sm">Community support only</span>
          </li>
        </ul>
        
        <a href="#" class="block text-center py-2 border border-gray-900 text-gray-900 rounded-md hover:bg-gray-50 transition-colors">Get started</a>
      </div>
      
      <!-- Pro Plan -->
      <div class="pricing-card relative bg-white border border-gray-900 rounded-lg p-6 z-10">
        <div class="popular-badge bg-gray-900 text-white text-xs font-bold px-3 py-1 rounded-full">
          MOST POPULAR
        </div>
        
        <div class="mb-4">
          <h3 class="text-lg font-semibold mb-1">Pro</h3>
          <p class="text-sm text-gray-600 mb-4">For startups and small businesses</p>
          <div class="flex items-baseline">
            <span id="pro-price-monthly" class="text-3xl font-bold">$29</span>
            <span id="pro-price-annual" class="text-3xl font-bold hidden">$23</span>
            <span class="text-gray-500 ml-1">/month</span>
          </div>
        </div>
        
        <ul class="space-y-3 mb-6">
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">100,000 requests per month</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Complete country data</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Flag image access</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Higher rate limits</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Email support</span>
          </li>
        </ul>
        
        <a href="#" class="block text-center py-2 bg-gray-900 text-white rounded-md hover:bg-gray-800 transition-colors">Get started</a>
      </div>
      
      <!-- Enterprise Plan -->
      <div class="pricing-card relative bg-white border border-gray-200 rounded-lg p-6">
        <div class="mb-4">
          <h3 class="text-lg font-semibold mb-1">Enterprise</h3>
          <p class="text-sm text-gray-600 mb-4">For large-scale applications</p>
          <div class="flex items-baseline">
            <span id="enterprise-price-monthly" class="text-3xl font-bold">$99</span>
            <span id="enterprise-price-annual" class="text-3xl font-bold hidden">$79</span>
            <span class="text-gray-500 ml-1">/month</span>
          </div>
        </div>
        
        <ul class="space-y-3 mb-6">
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">1,000,000 requests per month</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Complete country data</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Flag image access</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Unlimited rate limits</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Priority support</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
            <span class="text-sm">Dedicated account manager</span>
          </li>
        </ul>
        
        <a href="#" class="block text-center py-2 border border-gray-900 text-gray-900 rounded-md hover:bg-gray-50 transition-colors">Contact sales</a>
      </div>
    </div>
    
    <!-- Enhanced FAQ Section -->
    <div class="mb-16">
      <h2 class="text-2xl font-bold mb-8 text-center">Frequently Asked Questions</h2>
      
      <div class="space-y-6 max-w-4xl mx-auto">
        <!-- Billing Questions -->
        <div class="border-b border-gray-200 pb-6">
          <h3 class="text-lg font-medium mb-4">Billing & Plans</h3>
          
          <div class="space-y-6">
            <div>
              <h4 class="font-semibold mb-2">What happens if I exceed my monthly request limit?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                If you exceed your monthly request limit, additional requests will be charged at $0.001 per request. We'll notify you when you reach 80% of your limit so you can upgrade your plan if needed. You can also set a hard cap to prevent overages.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">Can I change plans or cancel at any time?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Yes, you can upgrade, downgrade, or cancel your plan at any time through your account dashboard. Upgrades take effect immediately, while downgrades and cancellations will be applied at the end of your current billing cycle. All changes will be prorated accordingly.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">Do you offer a free trial for paid plans?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Yes, all paid plans include a 14-day free trial with full access to all features. No credit card is required to start your trial. You'll receive a notification before your trial expires with the option to continue with a paid plan or downgrade to our free tier.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">Do you offer discounts for non-profits or educational institutions?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Yes, we offer special pricing for qualified non-profit organizations, educational institutions, and open-source projects. Please contact our sales team with verification of your status to apply for these special rates.
              </p>
            </div>
          </div>
        </div>
        
        <!-- Technical Questions -->
        <div class="border-b border-gray-200 pb-6">
          <h3 class="text-lg font-medium mb-4">Technical Questions</h3>
          
          <div class="space-y-6">
            <div>
              <h4 class="font-semibold mb-2">How is the API rate limited?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Free plans are limited to 10 requests per minute and a maximum of 1,000 requests per month. Pro plans allow 60 requests per minute and up to 100,000 requests per month. Enterprise plans have customizable rate limits tailored to your specific needs. All plans include standard HTTP status code responses for rate limit information.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">What data formats does the API support?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Our API returns data in JSON format by default. All endpoints support standard HTTP methods (GET, POST, PUT, DELETE) for interacting with country data. For flag images, we support common image formats including JPEG, PNG, GIF, and SVG.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">Do you provide client libraries or SDKs?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Yes, we offer official client libraries for popular programming languages including JavaScript, Python, PHP, Ruby, and Java. These libraries handle authentication, error handling, and provide convenient methods for accessing all API endpoints. Custom SDK development is available for Enterprise clients.
              </p>
            </div>
          </div>
        </div>
        
        <!-- Data & Security -->
        <div class="border-b border-gray-200 pb-6">
          <h3 class="text-lg font-medium mb-4">Data & Security</h3>
          
          <div class="space-y-6">
            <div>
              <h4 class="font-semibold mb-2">How frequently is the country data updated?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Our country data is verified and updated monthly to ensure accuracy. Population statistics are updated annually based on reliable international sources. Special updates are made for significant changes such as name changes, capital relocations, or currency changes.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">Is the API GDPR compliant?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Yes, our API is fully GDPR compliant. We do not collect, store, or process any personal data beyond what is necessary for account management and billing purposes. Our data processing agreements are available for Enterprise customers upon request.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">What security measures are in place?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                All API requests are encrypted using HTTPS/TLS. We use token-based authentication with regular key rotation options. Our infrastructure is hosted on secure cloud providers with SOC 2 compliance. Pro and Enterprise plans include additional security features such as IP whitelisting and custom rate limiting.
              </p>
            </div>
          </div>
        </div>
        
        <!-- Support -->
        <div>
          <h3 class="text-lg font-medium mb-4">Support & Service</h3>
          
          <div class="space-y-6">
            <div>
              <h4 class="font-semibold mb-2">What level of support is provided with each plan?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Free plans include community support through our public documentation and forums. Pro plans include email support with a 24-hour response time during business days. Enterprise plans feature priority support with a dedicated account manager, guaranteed 4-hour response times, and optional phone support.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">Do you offer a Service Level Agreement (SLA)?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Yes, Pro plans include a 99.9% uptime SLA. Enterprise plans offer enhanced SLAs with up to 99.99% guaranteed uptime and custom terms. All SLAs include monitoring, incident response procedures, and compensation for any service disruptions that exceed the agreed-upon thresholds.
              </p>
            </div>
            
            <div>
              <h4 class="font-semibold mb-2">Can I request custom features or data points?</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                Enterprise customers can request custom data points, endpoints, or integrations. Our professional services team will work with you to understand your requirements and implement solutions that meet your specific needs. Custom development services are billed separately from the base subscription.
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mt-10 text-center">
        <p class="text-sm text-gray-600">Have more questions? <a href="#" class="text-gray-900 font-medium hover:underline">Contact our sales team</a></p>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="text-center mb-16">
      <h2 class="text-2xl font-bold mb-2">Ready to get started?</h2>
      <p class="text-gray-600 mb-6">Create an account and start using the WorldData API today.</p>
      <div class="flex justify-center space-x-4">
        <a href="#" class="px-6 py-3 bg-gray-900 text-white rounded-md hover:bg-gray-800 transition-colors">Get API Key</a>
        <a href="#" class="px-6 py-3 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">Contact Sales</a>
      </div>
    </div>

    <!-- Footer -->
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
    // Mobile menu functionality
    document.getElementById('open-menu').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.add('active');
    });
    
    document.getElementById('close-menu').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.remove('active');
    });
    
    // Billing toggle functionality
    document.getElementById('billing-toggle').addEventListener('change', function() {
      const monthlyLabel = document.getElementById('monthly-label');
      const annualLabel = document.getElementById('annual-label');
      const proMonthly = document.getElementById('pro-price-monthly');
      const proAnnual = document.getElementById('pro-price-annual');
      const enterpriseMonthly = document.getElementById('enterprise-price-monthly');
      const enterpriseAnnual = document.getElementById('enterprise-price-annual');
      
      if (this.checked) {
        // Annual billing
        monthlyLabel.classList.remove('text-gray-900');
        monthlyLabel.classList.add('text-gray-500');
        annualLabel.classList.remove('text-gray-500');
        annualLabel.classList.add('text-gray-900');
        
        proMonthly.classList.add('hidden');
        proAnnual.classList.remove('hidden');
        enterpriseMonthly.classList.add('hidden');
        enterpriseAnnual.classList.remove('hidden');
      } else {
        // Monthly billing
        monthlyLabel.classList.remove('text-gray-500');
        monthlyLabel.classList.add('text-gray-900');
        annualLabel.classList.remove('text-gray-900');
        annualLabel.classList.add('text-gray-500');
        
        proMonthly.classList.remove('hidden');
        proAnnual.classList.add('hidden');
        enterpriseMonthly.classList.remove('hidden');
        enterpriseAnnual.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
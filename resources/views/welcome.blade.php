<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WorldData API</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
  </style>
</head>
<body class="bg-white text-gray-900 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <!-- Header -->
    <header class="flex justify-between items-center mb-12">
      <a href="/" class="flex items-center space-x-2">
        <i class="fas fa-globe text-gray-900 text-xl"></i>
        <h1 class="text-xl font-medium tracking-tight">WorldData</h1>
      </a>
      <div class="flex items-center space-x-4">
        <a href="documentation" class="text-sm text-gray-600 hover:text-gray-900">Documentation</a>
        <a href="pricing" class="text-sm text-gray-600 hover:text-gray-900">Pricing</a>
        <a href="login" class="bg-gray-900 hover:bg-gray-800 text-white text-sm px-4 py-2 rounded-md transition-colors">Get API Key</a>
      </div>
    </header>

    <!-- Hero Section -->
    <div class="mb-12">
      <h2 class="text-3xl font-bold tracking-tight mb-4">Countries API</h2>
      <p class="text-gray-600 max-w-2xl">Access comprehensive data for 195 countries worldwide. Reliable, up-to-date, and designed for developers.</p>
    </div>

    <!-- Search and Filter -->
    <div class="flex flex-col sm:flex-row justify-between mb-10 space-y-4 sm:space-y-0 sm:space-x-4">
      <div class="relative flex-grow max-w-md">
        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
        <input type="text" placeholder="Search countries..." class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-200 focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition-colors text-sm">
      </div>
      <div class="flex space-x-2">
        <div class="relative">
          <select class="appearance-none bg-white border border-gray-200 rounded-md pl-3 pr-8 py-2 focus:outline-none focus:ring-1 focus:ring-gray-900 focus:border-gray-900 text-sm text-gray-600">
            <option value="">All regions</option>
            <option value="africa">Africa</option>
            <option value="americas">Americas</option>
            <option value="asia">Asia</option>
            <option value="europe">Europe</option>
            <option value="oceania">Oceania</option>
          </select>
          <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
        </div>
      </div>
    </div>

    <!-- Countries Table -->
    <div class="bg-white rounded-md border border-gray-200 overflow-hidden mb-10">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr class="bg-gray-50">
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capital</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Region</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Population</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <img src="/api/placeholder/20/14" alt="Flag" class="w-5 h-3.5 mr-3 rounded-sm">
                  <div>
                    <div class="text-sm font-medium text-gray-900">United States</div>
                    <div class="text-xs text-gray-500">USA</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Washington, D.C.</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="inline-flex text-xs font-medium text-gray-500">Americas</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">331,002,651</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors">
                  <i class="fas fa-chevron-right text-xs"></i>
                </a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <img src="/api/placeholder/20/14" alt="Flag" class="w-5 h-3.5 mr-3 rounded-sm">
                  <div>
                    <div class="text-sm font-medium text-gray-900">Germany</div>
                    <div class="text-xs text-gray-500">DEU</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Berlin</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="inline-flex text-xs font-medium text-gray-500">Europe</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">83,783,942</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors">
                  <i class="fas fa-chevron-right text-xs"></i>
                </a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <img src="/api/placeholder/20/14" alt="Flag" class="w-5 h-3.5 mr-3 rounded-sm">
                  <div>
                    <div class="text-sm font-medium text-gray-900">Japan</div>
                    <div class="text-xs text-gray-500">JPN</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Tokyo</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="inline-flex text-xs font-medium text-gray-500">Asia</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">126,476,461</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors">
                  <i class="fas fa-chevron-right text-xs"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <div class="flex items-center justify-between px-6 py-3 border-t border-gray-200 bg-white">
        <div class="text-xs text-gray-500">
          Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">195</span> results
        </div>
        <div class="flex items-center space-x-1">
          <button class="p-1 rounded-md text-gray-400 cursor-not-allowed" disabled>
            <i class="fas fa-chevron-left text-xs"></i>
          </button>
          <button class="w-6 h-6 flex items-center justify-center rounded-md bg-gray-900 text-white text-xs">1</button>
          <button class="w-6 h-6 flex items-center justify-center rounded-md hover:bg-gray-100 text-gray-600 text-xs">2</button>
          <button class="w-6 h-6 flex items-center justify-center rounded-md hover:bg-gray-100 text-gray-600 text-xs">3</button>
          <button class="p-1 rounded-md text-gray-500 hover:text-gray-900 hover:bg-gray-100">
            <i class="fas fa-chevron-right text-xs"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- API Reference Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
      <div>
        <h3 class="text-lg font-medium mb-4">REST API</h3>
        <div class="bg-gray-50 p-4 rounded-md border border-gray-200">
          <div class="text-sm mb-2 font-medium">Endpoint</div>
          <div class="font-mono text-sm mb-4 bg-gray-100 p-2 rounded border border-gray-200 overflow-x-auto">
            GET https://api.worlddata.com/countries
          </div>
          
          <div class="text-sm mb-2 font-medium">Example Request</div>
          <div class="font-mono text-sm bg-gray-100 p-2 rounded border border-gray-200 overflow-x-auto">
            curl -H "Authorization: Bearer API_KEY" \<br>
            &nbsp;&nbsp;https://api.worlddata.com/countries?region=europe
          </div>
        </div>
        <a href="#" class="inline-block mt-4 text-sm text-gray-900 font-medium">View full documentation →</a>
      </div>
      
      <div>
        <h3 class="text-lg font-medium mb-4">Example Response</h3>
        <div class="bg-gray-50 p-4 rounded-md border border-gray-200">
          <div class="font-mono text-xs overflow-x-auto">
            {<br>
            &nbsp;&nbsp;"countries": [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"name": "Germany",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"alpha2Code": "DE",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"alpha3Code": "DEU",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"capital": "Berlin",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"region": "Europe",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"subregion": "Western Europe",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"population": 83783942,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"languages": [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ "iso639_1": "de", "name": "German" }<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"currencies": [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ "code": "EUR", "name": "Euro", "symbol": "€" }<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;]<br>
            }
          </div>
        </div>
      </div>
    </div>

    <!-- Features (Minimal) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
      <div>
        <div class="flex items-center mb-3">
          <i class="fas fa-bolt text-gray-900 mr-2"></i>
          <h3 class="font-medium">Fast &amp; Reliable</h3>
        </div>
        <p class="text-sm text-gray-600">99.9% uptime with global CDN distribution and sub-100ms response times.</p>
      </div>
      
      <div>
        <div class="flex items-center mb-3">
          <i class="fas fa-shield-alt text-gray-900 mr-2"></i>
          <h3 class="font-medium">Secure by Default</h3>
        </div>
        <p class="text-sm text-gray-600">HTTPS-only endpoints, token authentication, and rate limiting protection.</p>
      </div>
      
      <div>
        <div class="flex items-center mb-3">
          <i class="fas fa-code text-gray-900 mr-2"></i>
          <h3 class="font-medium">Developer Friendly</h3>
        </div>
        <p class="text-sm text-gray-600">Comprehensive documentation, client libraries, and webhooks support.</p>
      </div>
    </div>

    <!-- Footer -->
    <footer class="border-t border-gray-200 pt-8 pb-6">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="text-sm text-gray-500">© 2025 WorldData. All rights reserved.</div>
        <div class="flex space-x-6 mt-4 md:mt-0">
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Terms</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Privacy</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Status</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Contact</a>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WorldData API - Documentation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    
    pre {
      overflow-x: auto;
    }
    
    .endpoint {
      border-left: 3px solid;
    }
    
    .get-endpoint {
      border-color: #10B981;
    }
    
    .post-endpoint {
      border-color: #3B82F6;
    }
    
    .put-endpoint {
      border-color: #F59E0B;
    }
    
    .delete-endpoint {
      border-color: #EF4444;
    }
    
    .method-badge {
      min-width: 60px;
    }
    
    .get-badge {
      background-color: #10B981;
    }
    
    .post-badge {
      background-color: #3B82F6;
    }
    
    .put-badge {
      background-color: #F59E0B;
    }
    
    .delete-badge {
      background-color: #EF4444;
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
    <nav class="flex flex-col space-y-4">
      <a href="#introduction" class="text-gray-900 font-medium">Introduction</a>
      <a href="#authentication" class="text-gray-600 hover:text-gray-900">Authentication</a>
      <a href="#countries" class="text-gray-600 hover:text-gray-900">Countries</a>
      <a href="#flags" class="text-gray-600 hover:text-gray-900">Country Flags</a>
      <a href="#errors" class="text-gray-600 hover:text-gray-900">Error Handling</a>
    </nav>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Header -->
    <header class="relative z-10 mb-10">
      <div class="flex justify-between items-center py-4 border-b border-gray-100">
        <!-- Logo and Brand -->
        <div class="flex items-center space-x-2">
          <i class="fas fa-globe text-gray-900 text-xl"></i>
          <h1 class="text-xl font-medium tracking-tight">WorldData</h1>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden sm:flex items-center space-x-6">
          <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Home</a>
          <a href="#" class="text-sm text-gray-900 border-b border-gray-900 pb-1">Documentation</a>
          <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Pricing</a>
          <a href="#" class="bg-gray-900 hover:bg-gray-800 text-white text-sm px-4 py-2 rounded-md transition-colors">Get API Key</a>
        </div>
        
        <!-- Mobile Menu Button -->
        <button id="open-menu" class="sm:hidden text-gray-500 hover:text-gray-900">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </header>

    <!-- Documentation Content -->
    <div class="flex flex-col lg:flex-row">
      <!-- Sidebar -->
      <aside class="hidden lg:block lg:w-64 pr-8 sticky top-8 self-start">
        <nav class="space-y-1">
          <p class="text-xs uppercase text-gray-500 font-medium py-2">Getting Started</p>
          <a href="#introduction" class="block py-2 text-gray-900 hover:text-gray-900 font-medium">Introduction</a>
          <a href="#authentication" class="block py-2 text-gray-600 hover:text-gray-900">Authentication</a>
          
          <p class="text-xs uppercase text-gray-500 font-medium py-2 mt-4">API Reference</p>
          <a href="#countries" class="block py-2 text-gray-600 hover:text-gray-900">Countries</a>
          <a href="#flags" class="block py-2 text-gray-600 hover:text-gray-900">Country Flags</a>
          <a href="#errors" class="block py-2 text-gray-600 hover:text-gray-900">Error Handling</a>
        </nav>
      </aside>

      <!-- Main Content -->
      <main class="flex-1">
        <!-- Introduction Section -->
        <section id="introduction" class="mb-12">
          <h2 class="text-2xl font-bold mb-4">Introduction</h2>
          <p class="text-gray-600 mb-4">
            WorldData API provides comprehensive data about countries around the world. The API allows you to retrieve information about countries, including their names, capitals, populations, regions, currencies, and languages. You can also manage country flags.
          </p>
          <p class="text-gray-600 mb-4">
            The base URL for all API requests is:
          </p>
          <div class="bg-gray-100 p-3 rounded-md font-mono text-sm mb-4">
            http://localhost:8000/api
          </div>
          <p class="text-gray-600">All responses are returned in JSON format.</p>
        </section>

        <!-- Authentication Section -->
        <section id="authentication" class="mb-12">
          <h2 class="text-2xl font-bold mb-4">Authentication</h2>
          <p class="text-gray-600 mb-4">
            The WorldData API uses Laravel Sanctum for authentication. To access protected endpoints, you need to include an authentication token in your requests.
          </p>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Register a New User</h3>
          <div class="endpoint post-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge post-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">POST</span>
              <code class="font-mono text-sm">/register</code>
            </div>
            <p class="text-gray-600 mb-2">Required fields:</p>
            <ul class="list-disc list-inside text-sm text-gray-600 mb-3 ml-4">
              <li>name - User's full name</li>
              <li>email - User's email address (must be unique)</li>
              <li>password - User's password (minimum 8 characters)</li>
              <li>password_confirmation - Must match the password field</li>
            </ul>
            <p class="text-gray-600 mb-2">Example request:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm mb-3">
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "password_confirmation": "password123"
}
            </pre>
            <p class="text-gray-600 mb-2">Example response:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "user": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "created_at": "2025-03-11T12:00:00.000000Z",
    "updated_at": "2025-03-11T12:00:00.000000Z"
  },
  "token": "1|abcdefghijklmnopqrstuvwxyz123456"
}
            </pre>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Login</h3>
          <div class="endpoint post-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge post-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">POST</span>
              <code class="font-mono text-sm">/login</code>
            </div>
            <p class="text-gray-600 mb-2">Required fields:</p>
            <ul class="list-disc list-inside text-sm text-gray-600 mb-3 ml-4">
              <li>email - User's email address</li>
              <li>password - User's password</li>
            </ul>
            <p class="text-gray-600 mb-2">Example request:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm mb-3">
{
  "email": "john@example.com",
  "password": "password123"
}
            </pre>
            <p class="text-gray-600 mb-2">Example response:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "user": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "created_at": "2025-03-11T12:00:00.000000Z",
    "updated_at": "2025-03-11T12:00:00.000000Z"
  },
  "token": "1|abcdefghijklmnopqrstuvwxyz123456"
}
            </pre>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Using the Token</h3>
          <p class="text-gray-600 mb-4">
            Include the token in all protected API requests by setting the Authorization header:
          </p>
          <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
Authorization: Bearer 1|abcdefghijklmnopqrstuvwxyz123456
          </pre>
        </section>

        <!-- Countries Section -->
        <section id="countries" class="mb-12">
          <h2 class="text-2xl font-bold mb-4">Countries</h2>
          <p class="text-gray-600 mb-6">
            The following endpoints allow you to manage country data.
          </p>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">List All Countries</h3>
          <div class="endpoint get-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge get-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">GET</span>
              <code class="font-mono text-sm">/countries</code>
            </div>
            <p class="text-gray-600 mb-2">Retrieves a list of all countries in the database.</p>
            <p class="text-gray-600 mb-2">Example response:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
[
  {
    "id": 1,
    "name": "United States",
    "capital": "Washington, D.C.",
    "population": 331002651,
    "region": "Americas",
    "currency": "US Dollar",
    "language": "English",
    "flag_url": "flags/1678324567.png",
    "created_at": "2025-03-11T12:00:00.000000Z",
    "updated_at": "2025-03-11T12:00:00.000000Z"
  },
  {
    "id": 2,
    "name": "Germany",
    "capital": "Berlin",
    "population": 83783942,
    "region": "Europe",
    "currency": "Euro",
    "language": "German",
    "flag_url": null,
    "created_at": "2025-03-11T12:00:00.000000Z",
    "updated_at": "2025-03-11T12:00:00.000000Z"
  }
]
            </pre>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Get a Specific Country</h3>
          <div class="endpoint get-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge get-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">GET</span>
              <code class="font-mono text-sm">/countries/{country}</code>
            </div>
            <p class="text-gray-600 mb-2">Retrieves details for a specific country by ID.</p>
            <p class="text-gray-600 mb-2">Example response:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "id": 1,
  "name": "United States",
  "capital": "Washington, D.C.",
  "population": 331002651,
  "region": "Americas",
  "currency": "US Dollar",
  "language": "English",
  "flag_url": "flags/1678324567.png",
  "created_at": "2025-03-11T12:00:00.000000Z",
  "updated_at": "2025-03-11T12:00:00.000000Z"
}
            </pre>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Create a New Country</h3>
          <div class="endpoint post-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge post-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">POST</span>
              <code class="font-mono text-sm">/countries</code>
            </div>
            <p class="text-gray-600 mb-2">Required fields:</p>
            <ul class="list-disc list-inside text-sm text-gray-600 mb-3 ml-4">
              <li>name - Country name</li>
              <li>capital - Capital city</li>
              <li>population - Population count (integer)</li>
              <li>region - Geographic region</li>
            </ul>
            <p class="text-gray-600 mb-2">Optional fields:</p>
            <ul class="list-disc list-inside text-sm text-gray-600 mb-3 ml-4">
              <li>currency - Currency name</li>
              <li>language - Primary language</li>
            </ul>
            <p class="text-gray-600 mb-2">Example request:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm mb-3">
{
  "name": "Japan",
  "capital": "Tokyo",
  "population": 126476461,
  "region": "Asia",
  "currency": "Japanese Yen",
  "language": "Japanese"
}
            </pre>
            <p class="text-gray-600 mb-2">Example response:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "id": 3,
  "name": "Japan",
  "capital": "Tokyo",
  "population": 126476461,
  "region": "Asia",
  "currency": "Japanese Yen",
  "language": "Japanese",
  "flag_url": null,
  "created_at": "2025-03-11T12:00:00.000000Z",
  "updated_at": "2025-03-11T12:00:00.000000Z"
}
            </pre>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Update a Country</h3>
          <div class="endpoint put-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge put-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">PUT</span>
              <code class="font-mono text-sm">/countries/{country}</code>
            </div>
            <p class="text-gray-600 mb-2">Any of the following fields can be updated:</p>
            <ul class="list-disc list-inside text-sm text-gray-600 mb-3 ml-4">
              <li>name - Country name</li>
              <li>capital - Capital city</li>
              <li>population - Population count (integer)</li>
              <li>region - Geographic region</li>
              <li>currency - Currency name</li>
              <li>language - Primary language</li>
            </ul>
            <p class="text-gray-600 mb-2">Example request:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm mb-3">
{
  "population": 126500000,
  "currency": "JPY"
}
            </pre>
            <p class="text-gray-600 mb-2">Example response:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "id": 3,
  "name": "Japan",
  "capital": "Tokyo",
  "population": 126500000,
  "region": "Asia",
  "currency": "JPY",
  "language": "Japanese",
  "flag_url": null,
  "created_at": "2025-03-11T12:00:00.000000Z",
  "updated_at": "2025-03-11T12:05:00.000000Z"
}
            </pre>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Delete a Country</h3>
          <div class="endpoint delete-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge delete-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">DELETE</span>
              <code class="font-mono text-sm">/countries/{country}</code>
            </div>
            <p class="text-gray-600 mb-2">Permanently deletes a country by ID.</p>
            <p class="text-gray-600 mb-2">Response: HTTP 204 No Content</p>
          </div>
        </section>

        <!-- Flags Section -->
        <section id="flags" class="mb-12">
          <h2 class="text-2xl font-bold mb-4">Country Flags</h2>
          <p class="text-gray-600 mb-6">
            The following endpoints allow you to manage country flag images.
          </p>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Upload a Country Flag</h3>
          <div class="endpoint post-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge post-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">POST</span>
              <code class="font-mono text-sm">/countries/{country}/flag</code>
            </div>
            <p class="text-gray-600 mb-2">
              This endpoint requires a multipart/form-data request with an image file.
            </p>
            <p class="text-gray-600 mb-2">Request parameters:</p>
            <ul class="list-disc list-inside text-sm text-gray-600 mb-3 ml-4">
              <li>flag - Image file (JPEG, PNG, JPG, GIF, SVG; max size: 20MB)</li>
            </ul>
            <p class="text-gray-600 mb-2">Example response:</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "message": "Drapeau téléchargé avec succès",
  "country": {
    "id": 3,
    "name": "Japan",
    "capital": "Tokyo",
    "population": 126500000,
    "region": "Asia",
    "currency": "JPY",
    "language": "Japanese",
    "flag_url": "flags/1678325678.png",
    "created_at": "2025-03-11T12:00:00.000000Z",
    "updated_at": "2025-03-11T12:10:00.000000Z"
  }
}
            </pre>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Get a Country Flag</h3>
          <div class="endpoint get-endpoint pl-4 mb-6">
            <div class="flex items-center mb-2">
              <span class="method-badge get-badge text-white text-xs font-bold py-1 px-2 rounded mr-2 text-center">GET</span>
              <code class="font-mono text-sm">/countries/{country}/flag</code>
            </div>
            <p class="text-gray-600 mb-2">
              Returns the flag image file for the specified country. If no flag is available, returns a 404 error.
            </p>
            <p class="text-gray-600 mb-2">Response: The image file in its original format</p>
            <p class="text-gray-600 mb-2">Error response (if no flag is available):</p>
            <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "message": "Aucun drapeau disponible"
}
            </pre>
          </div>
        </section>

        <!-- Error Handling Section -->
        <section id="errors" class="mb-12">
          <h2 class="text-2xl font-bold mb-4">Error Handling</h2>
          <p class="text-gray-600 mb-4">
            The API uses standard HTTP status codes to indicate the success or failure of requests.
          </p>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">HTTP Status Codes</h3>
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead>
                <tr>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code</th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">200 OK</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">The request was successful.</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">201 Created</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">A new resource was created successfully.</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">204 No Content</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">The request was successful but returns no content (typically for DELETE operations).</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">400 Bad Request</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">The request was malformed or invalid.</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">401 Unauthorized</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Authentication is required or has failed.</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">404 Not Found</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">The requested resource was not found.</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">422 Unprocessable Entity</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Validation errors occurred.</td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <h3 class="text-lg font-semibold mt-6 mb-3">Validation Error Response</h3>
          <p class="text-gray-600 mb-2">
            When validation errors occur, the API returns a 422 status code with details about the validation failures:
          </p>
          <pre class="bg-gray-100 p-3 rounded-md font-mono text-sm">
{
  "errors": {
    "name": [
      "The name field is required."
    ],
    "population": [
      "The population must be an integer."
    ]
  }
}
          </pre>
        </section>
      </main>
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
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
        
        // Close mobile menu if it's open
        document.getElementById('mobile-menu').classList.remove('active');
      });
    });
  </script>
</body>
</html>
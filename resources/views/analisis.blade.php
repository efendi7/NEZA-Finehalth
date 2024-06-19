<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisis</title>
  <link href="css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="js/script.js" defer></script>
</head>
<body>
<nav class="bg-blue-500">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!-- Icon when menu is closed. -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!-- Icon when menu is open. -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-5 w-5" src="/img/logo.png" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Updated navbar links -->
            <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Books</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Wallet</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Analytic</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">More</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>
        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>
          <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Books</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Wallet</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Analytic</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">More</a>
    </div>
  </div>
</nav>

<!-- Main content -->
<div class="container mx-auto mt-10 px-4">
  <div class="flex justify-center space-x-4 mb-4">
    <button onclick="switchChart('expenses')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pengeluaran</button>
    <button onclick="switchChart('income')" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Penghasilan</button>
  </div>
  <div class="text-center">
    <h2 id="chart-title" class="text-xl font-bold">Pengeluaran</h2>
    <div class="chart-container mt-4">
      <canvas id="myChart"></canvas>
    </div>
  </div>
  <div class="mt-8 max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
    <form id="dataForm">
        <div id="expenseForm" class="mb-4">
            <h2 class="text-lg font-bold mb-2">Pengeluaran</h2>
            <div class="mb-2">
                <label class="block text-gray-700">Food:</label>
                <input type="number" id="food" value="300" class="border rounded w-full px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700">Rent:</label>
                <input type="number" id="rent" value="500" class="border rounded w-full px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700">Utilities:</label>
                <input type="number" id="utilities" value="200" class="border rounded w-full px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700">Transport:</label>
                <input type="number" id="transport" value="100" class="border rounded w-full px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700">Misc:</label>
                <input type="number" id="misc" value="50" class="border rounded w-full px-2 py-1">
            </div>
        </div>
        <div id="incomeForm" class="mb-4 hidden">
            <h2 class="text-lg font-bold mb-2">Penghasilan</h2>
            <div class="mb-2">
                <label class="block text-gray-700">Salary:</label>
                <input type="number" id="salary" value="1200" class="border rounded w-full px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700">Freelance:</label>
                <input type="number" id="freelance" value="450" class="border rounded w-full px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700">Investments:</label>
                <input type="number" id="investments" value="300" class="border rounded w-full px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700">Other:</label>
                <input type="number" id="other" value="150" class="border rounded w-full px-2 py-1">
            </div>
        </div>
        <button type="button" onclick="updateChart()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mt-4">Update Chart</button>
    </form>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-8">
      <!-- Social Media Icons -->
      <div class="flex space-x-4">
        <a href="https://facebook.com" class="text-gray-400 hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.51 0-9.96 4.45-9.96 9.96 0 4.97 3.67 9.08 8.44 9.92v-7.02h-2.54v-2.9h2.54v-2.22c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.19 2.23.19v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.9h2.78l-.44 2.9h-2.34v7.02c4.77-.84 8.44-4.95 8.44-9.92 0-5.51-4.45-9.96-9.96-9.96z"/></svg>
        </a>
        <a href="https://instagram.com" class="text-gray-400 hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.259.058 2.12.288 2.615.61.562.36 1.019.844 1.378 1.378.322.494.552 1.356.61 2.615.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.058 1.259-.288 2.12-.61 2.615-.36.562-.844 1.019-1.378 1.378-.494.322-1.356.552-2.615.61-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.259-.058-2.12-.288-2.615-.61-.562-.36-1.019-.844-1.378-1.378-.322-.494-.552-1.356-.61-2.615-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.058-1.259.288-2.12.61-2.615.36-.562.844-1.019 1.378-1.378.494-.322 1.356-.552 2.615-.61 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.281.058-2.163.286-2.905.616-.785.349-1.437.802-2.086 1.451-.649.649-1.102 1.301-1.451 2.086-.33.742-.558 1.624-.616 2.905-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.058 1.281.286 2.163.616 2.905.349.785.802 1.437 1.451 2.086.649.649 1.301 1.102 2.086 1.451.742.33 1.624.558 2.905.616 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.281-.058 2.163-.286 2.905-.616.785-.349 1.437-.802 2.086-1.451.649-.649 1.102-1.301 1.451-2.086.33-.742.558-1.624.616-2.905.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.058-1.281-.286-2.163-.616-2.905-.349-.785-.802-1.437-1.451-2.086-.649-.649-1.301-1.102-2.086-1.451-.742-.33-1.624-.558-2.905-.616-1.28-.058-1.688-.072-4.947-.072zM12 5.838c-3.396 0-6.162 2.766-6.162 6.162s2.766 6.162 6.162 6.162 6.162-2.766 6.162-6.162-2.766-6.162-6.162-6.162zm0 10.162c-2.205 0-4-1.795-4-4s1.795-4 4-4 4 1.795 4 4-1.795 4-4 4zm6.406-11.845c-.796 0-1.44.645-1.44 1.44s.645 1.44 1.44 1.44 1.44-.645 1.44-1.44-.645-1.44-1.44-1.44z"/></svg>
        </a>
        <a href="https://twitter.com" class="text-gray-400 hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.394-1.83.658-2.825.775 1.014-.607 1.794-1.569 2.165-2.724-.95.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.593-1.559-2.717 0-4.917 2.201-4.917 4.917 0 .39.045.765.127 1.124-4.083-.205-7.704-2.159-10.126-5.134-.422.724-.664 1.562-.664 2.457 0 1.695.865 3.192 2.179 4.069-.804-.026-1.561-.246-2.228-.616v.062c0 2.367 1.684 4.342 3.918 4.788-.41.111-.843.171-1.287.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.376 4.604 3.415-1.68 1.317-3.809 2.103-6.104 2.103-.396 0-.789-.023-1.175-.068 2.188 1.394 4.768 2.209 7.548 2.209 9.057 0 14.01-7.512 14.01-14.01 0-.213 0-.426-.016-.637.962-.693 1.797-1.56 2.457-2.548l-.047-.02z"/></svg>
        </a>
        <a href="https://linkedin.com" class="text-gray-400 hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.772 3.003c0-1.104-.896-2-2-2h-11.544c-1.104 0-2 .896-2 2v17.994c0 1.104.896 2 2 2h11.544c1.104 0 2-.896 2-2v-17.994zm-11.159 18.617h-2.627v-8.97h2.627v8.97zm-1.306-10.223c-.839 0-1.519-.68-1.519-1.519s.68-1.519 1.519-1.519 1.519.68 1.519 1.519-.68 1.519-1.519 1.519zm11.118 10.223h-2.627v-4.684c0-1.115-.026-2.548-1.554-2.548-1.558 0-1.797 1.216-1.797 2.471v4.761h-2.627v-8.97h2.521v1.225h.036c.351-.662 1.205-1.354 2.48-1.354 2.65 0 3.138 1.742 3.138 4.003v5.096z"/></svg>
        </a>
      </div>
      <!-- Footer Links -->
      <div class="flex space-x-8">
        <div>
          <h3 class="text-lg font-semibold mb-2">Solution</h3>
          <ul>
            <li><a href="#" class="text-gray-400 hover:text-white">Marketing</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Analytics</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Commerce</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Insights</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-semibold mb-2">Support</h3>
          <ul>
            <li><a href="#" class="text-gray-400 hover:text-white">Pricing</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Documentation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Guides</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">API Status</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-semibold mb-2">Company</h3>
          <ul>
            <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Jobs</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Press</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-semibold mb-2">Legal</h3>
          <ul>
            <li><a href="#" class="text-gray-400 hover:text-white">Claim</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Privacy</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Terms</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center text-gray-400">
      &copy; 2024 Your Company Name. All rights reserved.
    </div>
  </div>
</footer>



</div>

</body>
</html>

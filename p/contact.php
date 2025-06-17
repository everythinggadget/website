<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Game Arena</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Game Arena</h1>
      <nav class="space-x-4">
        <a href="index.php" class="hover:text-blue-600">Home</a>
        <a href="/p/product.php" class="hover:text-blue-600">Products</a>
        <a href="/p/cart.php" class="hover:text-blue-600">Cart</a>
        <a href="contact.php" class="hover:text-blue-600">Contact</a>
      </nav>
    </div>
  </header>

  <main class="max-w-3xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
    <p class="mb-4 text-gray-700">Have questions, feedback, or need help? We’d love to hear from you.</p>
    <div class="bg-white p-6 rounded-lg shadow">
      <ul class="text-gray-700 space-y-3">
        <li><strong>Phone:</strong> +2348158236154</li>
        <li><strong>Email:</strong> <a href="mailto:iamhorlartunjiii@gmail.com" class="text-blue-600 hover:underline">iamhorlartunjiii@gmail.com</a></li>
      </ul>
    </div>
  </main>

  <footer class="bg-white shadow mt-12">
    <div class="max-w-7xl mx-auto px-4 py-6 text-center text-gray-500">
      &copy; <?php echo date('Y'); ?> Game Arena. All rights reserved.
    </div>
  </footer>
</body>
</html>

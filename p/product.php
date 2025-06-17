<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Arena</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Game Arena</h1>
      <nav class="space-x-4">
        <a href="index" class="hover:text-blue-600">Home</a>
        <a href="/p/product.php" class="hover:text-blue-600">Products</a>
        <a href="/p/cart.php" class="hover:text-blue-600">Cart</a>
        <a href="/p/contact.php" class="hover:text-blue-600">Contact</a>
      </nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 py-8">
    <h2 id="products" class="text-3xl font-semibold mb-6">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php
      $products = [
        [
          'name' => 'Gaming Laptop X',
          'desc' => 'High performance laptop for all your gaming needs.',
          'price' => 1299,
          'img' => 'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/14/6229473/1.jpg'
        ],
        [
          'name' => 'Epic Game 5',
          'desc' => 'Immersive gameplay and stunning graphics.',
          'price' => 59,
          'img' => 'https://ng.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/63/1435982/1.jpg'
        ],
        [
          'name' => 'Gaming Headset',
          'desc' => 'Crystal-clear audio and comfort for long sessions.',
          'price' => 79,
          'img' => 'https://5.imimg.com/data5/TM/WY/MY-11129613/c-1000x1000.jpg'
        ],
        [
          'name' => 'Pro Gaming Mouse',
          'desc' => 'Precision control with customizable buttons.',
          'price' => 49,
          'img' => 'https://magnumdealz.com/wp-content/uploads/2023/08/s-l600.jpg'
        ]
      ];

      foreach ($products as $product) {
        echo "<div class='bg-white p-4 rounded-lg shadow'>
                <img src='{$product['img']}' alt='{$product['name']}' class='w-full h-48 object-cover mb-4 rounded'>
                <h3 class='text-xl font-bold'>{$product['name']}</h3>
                <p class='text-gray-600'>{$product['desc']}</p>
                <p class='mt-2 font-semibold'>\$ {$product['price']}</p>
                <button class='mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700'>Add to Cart</button>
              </div>";
      }
      ?>
    </div>
  </main>

  <footer class="bg-white shadow mt-12">
    <div class="max-w-7xl mx-auto px-4 py-6 text-center text-gray-500">
      &copy; <?php echo date('Y'); ?> Game Arena. All rights reserved.
    </div>
  </footer>
</body>
</html>

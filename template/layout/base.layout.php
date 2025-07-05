<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'alchimiste du code - Nouveau Commande</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'dark-bg': '#172112',
            'darker-bg': '#172112',
            'green-accent': '#4ade80',
            'green-hover': '#22c55e',
            'gray-field': '#2a2a2a',
            'gray-text': '#9ca3af'
          }
        }
      }
    }
  </script>
</head>

<body class="bg-darker-bg text-white min-h-screen">
  
   <?php  require_once "../template/layout/partial.html.php" ?>


  

  <main class="max-w-6xl mx-auto px-6 py-8">

  
  <?php  echo $containeForLayout  ?>

  
  </main>

 
</body>

</html>
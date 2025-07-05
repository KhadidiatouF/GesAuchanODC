<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'alchimiste du code - Nouveau Commande</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <style>
        :root {
            --dark-background: #1A1A1A; 
            --dark-card-bg: #2C2C2C;    
            --green-accent: #4CAF50;    
            --green-hover: #43A047;     /* Slightly darker green for hover */
            --text-light: #E0E0E0;      /* Light gray for general text */
            --text-muted: #B0B0B0;      /* Muted gray for secondary text */
            --input-bg: #3A3A3A;        /* Darker input background */
            --input-border: #4F4F4F;    /* Input border color */
        }

        body {
            background-color: var(--dark-background);
            color: var(--text-light);
        }

        .bg-dark-card {
            background-color: var(--dark-card-bg);
        }

        .text-green-accent {
            color: var(--green-accent);
        }

        .bg-green-accent {
            background-color: var(--green-accent);
        }

        .hover\:bg-green-hover:hover {
            background-color: var(--green-hover);
        }

        .input-dark {
            background-color: var(--input-bg);
            border-color: var(--input-border);
            color: var(--text-light);
        }
        .input-dark::placeholder {
            color: var(--text-muted);
        }
        .input-dark:focus {
            border-color: var(--green-accent);
            box-shadow: 0 0 0 1px var(--green-accent);
        }
    </style>

</head>

<body class="bg-darker-bg text-white min-h-screen">
  


  

  <main class="max-w-6xl mx-auto px-6 py-8">

  
  <?php  echo $containeForLayout  ?>

  
  </main>

 
</body>

</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - L'alchimiste du code</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --dark-background: #1A1A1A; 
            --dark-card-bg: #2C2C2C;    
            --green-accent: #4CAF50;    
            --green-hover: #43A047;     /* Slightly darker green for hover */
            --text-light: #E0E0E0;      /* Light gray for general text */
            --text-muted: #B0B0B0;      /* Muted gray for secondary text */
            --input-bg: #3A3A3A;        /* Darker input background */
            --input-border: #4F4F4F;    /* Input border color */
        }

        body {
            background-color: var(--dark-background);
            color: var(--text-light);
        }

        .bg-dark-card {
            background-color: var(--dark-card-bg);
        }

        .text-green-accent {
            color: var(--green-accent);
        }

        .bg-green-accent {
            background-color: var(--green-accent);
        }

        .hover\:bg-green-hover:hover {
            background-color: var(--green-hover);
        }

        .input-dark {
            background-color: var(--input-bg);
            border-color: var(--input-border);
            color: var(--text-light);
        }
        .input-dark::placeholder {
            color: var(--text-muted);
        }
        .input-dark:focus {
            border-color: var(--green-accent);
            box-shadow: 0 0 0 1px var(--green-accent);
        }
    </style>
</head>
<body class="font-sans antialiased flex items-center justify-center min-h-screen p-4">

    <div class="w-full max-w-md bg-dark-card rounded-lg shadow-xl p-8 sm:p-10">

        <h2 class="text-3xl font-bold text-center mb-6 text-green-accent">Connexion</h2>
        <p class="text-center text-text-muted mb-8">Connectez-vous à votre compte</p>

        <form  action="/retourListe">
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-text-light mb-2">Adresse E-mail</label>
                <input type="email" id="email" name="email" placeholder="Votre adresse email" required
                       class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-1 input-dark">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-text-light mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required
                       class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-1 input-dark">
            </div>

            <div class="flex items-center justify-between mb-6">
                
                <a href="#" class="text-sm text-green-accent hover:underline">Mot de passe oublié ?</a>
            </div>

            <a href="/retourListe">
                <button type="submit"
                    class="w-full py-2.5 rounded-md text-white font-semibold bg-green-accent hover:bg-green-hover focus:outline-none focus:ring-2 focus:ring-green-accent focus:ring-offset-2 focus:ring-offset-dark-card transition-colors duration-200">
                    Se connecter
                </button>
            </a>
           
        </form>

        <p class="mt-8 text-center text-text-muted text-sm">
            Vous n'avez pas de compte ?
            <a href="#" class="font-medium text-green-accent hover:underline">S'inscrire</a>
        </p>

    </div>

</body>
</html> -->


<body class="font-sans antialiased flex bg-[#2C2C2C] items-center justify-center min-h-screen p-4">

    <main class="w-full max-w-md bg-[#4F4F4F] rounded-lg shadow-xl p-8 sm:p-10">

        <h2 class="text-3xl font-bold text-center mb-6 text-white">Connexion</h2>
        <p class="text-center text-white mb-8">Connectez-vous à votre compte</p>


        

        <form  action="<?php $url ?>login"  method="post">
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-white mb-2">Adresse E-mail</label>
                <input type="email" id="email" name="email" placeholder="Votre adresse email" required
                       class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-1 input-dark">

                       
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-white mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required
                       class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-1 input-dark">
            </div>

            <div class="flex items-center justify-between mb-6">
                
                <a href="#" class="text-sm text-white hover:underline">Mot de passe oublié ?</a>
            </div>

                <button type="submit"
                    class="w-full py-2.5 rounded-md text-white font-semibold bg-[#43A047] hover:bg-green-hover focus:outline-none focus:ring-2 focus:ring-green-accent focus:ring-offset-2 focus:ring-offset-dark-card transition-colors duration-200">
                    Se connecter
                </button>
           
        </form>

        <p class="mt-8 text-center text-white text-sm">
            Vous n'avez pas de compte ?
            <a href="#" class="font-medium text-white hover:underline">S'inscrire</a>
        </p>

</main>
  <script src="https://cdn.tailwindcss.com"></script>

</body>
<!-- </html>  -->
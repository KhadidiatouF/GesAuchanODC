<!DOCTYPE html>
<html lang="fr">
  <!-- <head>
    <meta charset="UTF-8" />
    <title>Commande #12345</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#101d0b] min-h-screen text-white"> -->
    <!-- <nav class="w-full bg-[#151f11] px-8 py-3 flex items-center justify-between border-b border-[#263a1d]">
      <div class="flex items-center space-x-3">
        <span class="text-white text-xl font-semibold">Le Ndanan du code</span>
      </div>
      <div class="flex items-center space-x-8">
        <a href="#" class="text-gray-200 hover:text-lime-400">Dashboard</a>
        <a href="#" class="text-gray-200 hover:text-lime-400">Commandes</a>
        <a href="#" class="text-gray-200 hover:text-lime-400">clients</a>
        <a href="#" class="text-gray-200 hover:text-lime-400">Produits</a>
        <a href="#" class="text-gray-200 hover:text-lime-400">Rapport</a>
        <div class="ml-6">
          <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[#232d1a] text-gray-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
              <path d="M12 14a4 4 0 100-8 4 4 0 000 8zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
          </span>
        </div>
      </div>
    </nav> 

    
    <main class="max-w-5xl mx-auto mt-8 p-8">-->
      <div class="flex justify-between items-start mb-6">
        <div>
          <h1 class="text-3xl font-bold text-white mb-2">Commande #12345</h1>
          <p class="text-gray-400">Commande le 02/20/2000</p>
        </div>
        <div class="bg-[#151f11] rounded-lg p-4 text-sm min-w-[250px]">
          <p><span class="font-semibold">Nom:</span> DIASSY</p>
          <p><span class="font-semibold">Prenom:</span> BAKARY</p>
        </div>
      </div>
      <h2 class="text-xl font-semibold mb-4">Résumé de la Commande</h2>
      <div class="bg-[#151f11] rounded-xl overflow-hidden mb-0 border border-[#263a1d]">
        <table class="min-w-full text-left">
          <thead>
            <tr class="text-white">
              <th class="px-6 py-3 font-semibold">Produit</th>
              <th class="px-6 py-3 font-semibold">Quantite</th>
              <th class="px-6 py-3 font-semibold">Prix</th>
              <th class="px-6 py-3 font-semibold">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t border-[#263a1d]">
              <td class="px-6 py-4">Riz</td>
              <td class="px-6 py-4">100</td>
              <td class="px-6 py-4">10 000</td>
              <td class="px-6 py-4">1.000.000fcfa</td>
            </tr>
            <tr class="border-t border-[#263a1d]">
              <td class="px-6 py-4">Lait</td>
              <td class="px-6 py-4">50</td>
              <td class="px-6 py-4">2 000</td>
              <td class="px-6 py-4">2000000cfa</td>
            </tr>
            <tr class="border-t border-[#263a1d]">
              <td class="px-6 py-4">sucre</td>
              <td class="px-6 py-4">200</td>
              <td class="px-6 py-4">500</td>
              <td class="px-6 py-4">5000000fach</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="flex flex-wrap gap-8 mt-4 mb-8 text-sm justify-end">
        <div>
          <p><span class="font-semibold">Téléphone :</span> 777777777</p>
          <p><span class="font-semibold">Total :</span> 1.370.000fcfa</p>
          <p><span class="font-semibold">Montant payé :</span> 1.300 FCFA</p>
          <p><span class="font-semibold">Statut :</span> <span class="text-lime-400">Impayé</span></p>
        </div>
      </div>

      <div class="flex justify-center items-center space-x-2 mb-8">
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-gray-400 hover:bg-[#101d0b]">&lt;</button>
        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-lime-400 text-[#101d0b] font-bold">1</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-white hover:bg-[#101d0b]">2</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-white hover:bg-[#101d0b]">3</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-gray-400 hover:bg-[#101d0b]">&gt;</button>
      </div>
      <div class="mb-8">
        <h3 class="font-bold mb-2">facture</h3>
        <button class="bg-lime-400 text-[#101d0b] px-6 py-2 rounded-full font-semibold hover:bg-lime-500 transition">Generer Facture</button>
      </div>
      <div class="mb-4">
        <h3 class="font-bold mb-2">Paiement</h3>
        <div class="bg-[#151f11] rounded-xl overflow-hidden mb-4 border border-[#263a1d]">
          <table class="min-w-full text-left">
            <thead>
              <tr class="text-white">
                <th class="px-6 py-3">Date</th>
                <th class="px-6 py-3">Montant Total</th>
                <th class="px-6 py-3">Methode</th>
                <th class="px-6 py-3">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-t border-[#263a1d]">
                <td class="px-6 py-4">July 17, 2024</td>
                <td class="px-6 py-4">200000Fca</td>
                <td class="px-6 py-4">Carte Credit</td>
                <td class="px-6 py-4">
                  <span class="inline-block bg-lime-400 text-[#101d0b] px-4 py-1 rounded-full font-semibold">Payé</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <button class="bg-lime-400 text-[#101d0b] px-6 py-2 rounded-full font-semibold hover:bg-lime-500 transition">Enregistrer un paiement</button>
      </div>
    <!-- </main>
  </body> -->
</html>
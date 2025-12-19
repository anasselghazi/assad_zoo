  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ASSAD | Utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gradient-to-b from-green-900 to-green-700 text-white p-6 space-y-8 shadow-2xl">

        <div class="text-center">
            <h2 class="text-3xl font-extrabold">🦁 ASSAD</h2>
            <p class="text-sm text-green-200">Admin Panel</p>
        </div>

        <nav class="flex flex-col gap-4 text-sm font-semibold">
            <a href="dashboard.php" class="p-3 rounded-xl hover:bg-green-600">🏠 Dashboard</a>
            <a href="user.php" class="p-3 rounded-xl bg-green-600">👥 Utilisateurs</a>
            <a href="#" class="p-3 rounded-xl hover:bg-green-600">🐾 Animaux</a>
            <a href="#" class="p-3 rounded-xl hover:bg-green-600">🌍 Habitats</a>
            <a href="#" class="p-3 rounded-xl hover:bg-green-600">📊 Statistiques</a>
            <a href="#" class="p-3 rounded-xl hover:bg-green-600">🚪 Déconnexion</a>
        </nav>

        <div class="text-xs text-center text-green-200 pt-6">
            CAN 2025 • Maroc 🇲🇦 <br> © ASSAD Zoo
        </div>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-8">

        <!-- HEADER -->
        <header class="bg-white rounded-2xl shadow p-6 mb-8 text-center">
            <h1 class="text-3xl font-bold text-green-800">
                Gestion des Utilisateurs
            </h1>
            <p class="text-gray-600 mt-2">
                Activation et approbation des comptes
            </p>
        </header>

        <!-- USERS TABLE -->
        <section class="bg-white rounded-2xl shadow p-6 overflow-x-auto">

            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="p-3 border">Nom</th>
                        <th class="p-3 border">Email</th>
                        <th class="p-3 border">Rôle</th>
                        <th class="p-3 border">Statut</th>
                        <th class="p-3 border">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- GUIDE NON APPROUVÉ -->
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Anas Elghazi</td>
                        <td class="p-3 border">anas@example.com</td>
                        <td class="p-3 border">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-xs">
                                Guide
                            </span>
                        </td>
                        <td class="p-3 border">
                            <span class="text-orange-600 font-semibold">
                                En attente d’approbation
                            </span>
                        </td>
                        <td class="p-3 border flex gap-2">
                            <button class="px-3 py-1 bg-green-600 text-white rounded-xl text-sm">
                                Approuver
                            </button>
                            <button class="px-3 py-1 bg-red-500 text-white rounded-xl text-sm">
                                Désactiver
                            </button>
                        </td>
                    </tr>

                    <!-- UTILISATEUR ACTIF -->
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Fatima Zahra</td>
                        <td class="p-3 border">fatima@example.com</td>
                        <td class="p-3 border">
                            <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs">
                                Visiteur
                            </span>
                        </td>
                        <td class="p-3 border">
                            <span class="text-green-600 font-semibold">
                                Actif
                            </span>
                        </td>
                        <td class="p-3 border">
                            <button class="px-3 py-1 bg-red-500 text-white rounded-xl text-sm">
                                Désactiver
                            </button>
                        </td>
                    </tr>

                    <!-- UTILISATEUR INACTIF -->
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Youssef Karim</td>
                        <td class="p-3 border">youssef@example.com</td>
                        <td class="p-3 border">
                            <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-lg text-xs">
                                Visiteur
                            </span>
                        </td>
                        <td class="p-3 border">
                            <span class="text-red-600 font-semibold">
                                Inactif
                            </span>
                        </td>
                        <td class="p-3 border">
                            <button class="px-3 py-1 bg-green-600 text-white rounded-xl text-sm">
                                Activer
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>

        <!-- INFO GUIDE -->
        <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded-xl">
            <p class="text-sm text-yellow-800">
                ⚠️ Les comptes avec le rôle <strong>Guide</strong> doivent être approuvés par l’administrateur avant d’accéder aux fonctionnalités.
            </p>
        </div>

    </main>
</div>

</body>
</html>

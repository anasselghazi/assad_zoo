 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ASSAD | Statistiques</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-green-900 text-white p-6 space-y-8 hidden md:block">
        <h2 class="text-3xl font-bold text-center">🦁 ASSAD</h2>

        <nav class="flex flex-col gap-4">
            <a href="dashboard.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                🏠 Dashboard
            </a>
            <a href="statistique.php" class="bg-green-600 p-3 rounded-xl text-center font-bold">
                📊 Statistiques
            </a>
            <a href="animals.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                🐾 Animaux
            </a>
            <a href="habitat_admin.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                🌍 Habitats
            </a>
            <a href="users.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                👤 Utilisateurs
            </a>
            <a href="logout.php" class="bg-red-600 hover:bg-red-500 p-3 rounded-xl text-center">
                🚪 Déconnexion
            </a>
        </nav>

        <p class="text-center text-green-200 text-sm pt-10">
            © 2025 Projet ASSAD
        </p>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-8">

        <!-- HEADER -->
        <header class="bg-white rounded-2xl shadow p-6 mb-8">
            <h1 class="text-3xl font-bold text-green-800 text-center">
                Statistiques du Zoo
            </h1>
            <p class="text-center text-gray-600 mt-2">
                Aperçu complet des données et activités
            </p>
        </header>

        <!-- STATS GRID -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

            <div class="bg-white p-6 rounded-2xl shadow text-center">
                <h3 class="text-gray-500">Utilisateurs</h3>
                <p class="text-4xl font-bold text-green-700 mt-2">128</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow text-center">
                <h3 class="text-gray-500">Animaux</h3>
                <p class="text-4xl font-bold text-green-700 mt-2">54</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow text-center">
                <h3 class="text-gray-500">Habitats</h3>
                <p class="text-4xl font-bold text-green-700 mt-2">12</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow text-center">
                <h3 class="text-gray-500">Visites guidées</h3>
                <p class="text-4xl font-bold text-green-700 mt-2">9</p>
            </div>

        </section>

        <!-- TABLEAU DETAILLE -->
        <section class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-2xl font-bold text-green-700 mb-4">Top Animaux consultés</h2>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-green-100">
                        <th class="p-3 border">Nom</th>
                        <th class="p-3 border">Espèce</th>
                        <th class="p-3 border">Nombre de vues</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Lion de l’Atlas</td>
                        <td class="p-3 border">Panthera leo leo</td>
                        <td class="p-3 border">75</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Girafe</td>
                        <td class="p-3 border">Giraffa camelopardalis</td>
                        <td class="p-3 border">52</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Crocodile</td>
                        <td class="p-3 border">Crocodylus niloticus</td>
                        <td class="p-3 border">40</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>
</div>

</body>
</html>

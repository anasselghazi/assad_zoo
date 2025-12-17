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
    <aside class="w-64 bg-green-900 text-white p-6 space-y-8 hidden md:block">
        <h2 class="text-3xl font-bold text-center">🦁 ASSAD</h2>

        <nav class="flex flex-col gap-4">
            <a href="dashboard.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                🏠 Dashboard
            </a>
            <a href="statistique.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                📊 Statistiques
            </a>
            <a href="animals.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                🐾 Animaux
            </a>
            <a href="habitat_admin.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">
                🌍 Habitats
            </a>
            <a href="users.php" class="bg-green-600 p-3 rounded-xl text-center font-bold">
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
                Gestion des Utilisateurs
            </h1>
            <p class="text-center text-gray-600 mt-2">
                Ajouter, activer/désactiver ou consulter les utilisateurs
            </p>
        </header>

        <!-- ADD BUTTON -->
        <div class="flex justify-end mb-6">
            <button onclick="openAddModal()"
                class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-xl font-semibold shadow">
                ➕ Ajouter un utilisateur
            </button>
        </div>

        <!-- USERS TABLE -->
        <section class="bg-white rounded-2xl shadow p-6 overflow-x-auto">

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-green-100">
                        <th class="p-3 border">Nom</th>
                        <th class="p-3 border">Email</th>
                        <th class="p-3 border">Rôle</th>
                        <th class="p-3 border">Statut</th>
                        <th class="p-3 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Anas Elghazi</td>
                        <td class="p-3 border">anas@example.com</td>
                        <td class="p-3 border">Guide</td>
                        <td class="p-3 border">Actif</td>
                        <td class="p-3 border flex gap-2">
                            <button class="px-3 py-1 bg-yellow-500 text-white rounded-xl">Modifier</button>
                            <button class="px-3 py-1 bg-red-500 text-white rounded-xl">Désactiver</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">Fatima Zahra</td>
                        <td class="p-3 border">fatima@example.com</td>
                        <td class="p-3 border">Visiteur</td>
                        <td class="p-3 border">Inactif</td>
                        <td class="p-3 border flex gap-2">
                            <button class="px-3 py-1 bg-yellow-500 text-white rounded-xl">Modifier</button>
                            <button class="px-3 py-1 bg-green-500 text-white rounded-xl">Activer</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </section>

    </main>
</div>

<!-- ADD USER MODAL -->
<div id="addModal" class="fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">

    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 relative">

        <button onclick="closeAddModal()"
            class="absolute top-3 right-3 text-gray-500 hover:text-red-600 text-xl font-bold">
            ✕
        </button>

        <h2 class="text-2xl font-bold text-green-700 mb-5">
            ➕ Ajouter un utilisateur
        </h2>

        <form action="user_store.php" method="POST" class="space-y-4">

            <input type="text" name="nom" placeholder="Nom complet"
                   class="w-full border rounded-xl p-3" required>

            <input type="email" name="email" placeholder="Email"
                   class="w-full border rounded-xl p-3" required>

            <select name="role" class="w-full border rounded-xl p-3" required>
                <option value="">Sélectionnez le rôle</option>
                <option value="visiteur">Visiteur</option>
                <option value="guide">Guide</option>
            </select>

            <input type="password" name="password" placeholder="Mot de passe"
                   class="w-full border rounded-xl p-3" required>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeAddModal()"
                        class="px-5 py-2 rounded-xl border">
                    Annuler
                </button>

                <button type="submit"
                        class="bg-green-700 hover:bg-green-800 text-white px-5 py-2 rounded-xl">
                    Enregistrer
                </button>
            </div>
        </form>

    </div>
</div>

<script>
    const addModal = document.getElementById("addModal");

    function openAddModal() {
        addModal.classList.remove("hidden");
        addModal.classList.add("flex");
    }

    function closeAddModal() {
        addModal.classList.add("hidden");
        addModal.classList.remove("flex");
    }
</script>

</body>
</html>

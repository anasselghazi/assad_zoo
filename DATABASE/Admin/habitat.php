<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ASSAD | Gestion des Habitats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-green-900 text-white p-6 space-y-8 hidden md:block">
        <h2 class="text-3xl font-bold text-center">🦁 ASSAD</h2>

        <nav class="flex flex-col gap-4">
            <a href="dashboard.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">🏠 Accueil</a>
            <a href="animals.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">🦓 Animaux</a>
            <a href="habitat_admin.php" class="bg-green-600 p-3 rounded-xl text-center font-bold">🌍 Habitats</a>
            <a href="users.php" class="bg-green-700 hover:bg-green-600 p-3 rounded-xl text-center">👤 Utilisateurs</a>
            <a href="logout.php" class="bg-red-600 hover:bg-red-500 p-3 rounded-xl text-center">🚪 Déconnexion</a>
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
                Gestion des Habitats
            </h1>
            <p class="text-center text-gray-600 mt-2">
                Ajouter, consulter et organiser les habitats du zoo
            </p>
        </header>

        <!-- ADD BUTTON -->
        <div class="flex justify-end mb-6">
            <button onclick="openAddModal()"
                class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-xl font-semibold shadow">
                ➕ Ajouter un habitat
            </button>
        </div>

        <!-- HABITATS GRID -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- CARD -->
            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-6">
                <h3 class="text-xl font-bold text-green-700 mb-2">Savane</h3>
                <p class="text-gray-600 text-sm mb-3">
                    Climat chaud et sec, habitat des lions et girafes.
                </p>
                <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
                    Zone Africaine
                </span>
            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-6">
                <h3 class="text-xl font-bold text-green-700 mb-2">Forêt Tropicale</h3>
                <p class="text-gray-600 text-sm mb-3">
                    Zone humide riche en biodiversité.
                </p>
                <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
                    Zone Équatoriale
                </span>
            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-6">
                <h3 class="text-xl font-bold text-green-700 mb-2">Désert</h3>
                <p class="text-gray-600 text-sm mb-3">
                    Conditions extrêmes adaptées aux reptiles.
                </p>
                <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
                    Zone Aride
                </span>
            </div>

        </section>

    </main>
</div>

<!-- ADD MODAL -->
<div id="addModal" class="fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">

    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 relative">

        <button onclick="closeAddModal()"
            class="absolute top-3 right-3 text-gray-500 hover:text-red-600 text-xl font-bold">
            ✕
        </button>

        <h2 class="text-2xl font-bold text-green-700 mb-5">
            ➕ Ajouter un habitat
        </h2>

        <form action="habitat_store.php" method="POST" class="space-y-4">

            <input type="text" name="nom"
                placeholder="Nom de l’habitat"
                class="w-full border rounded-xl p-3" required>

            <input type="text" name="climat"
                placeholder="Type de climat"
                class="w-full border rounded-xl p-3" required>

            <input type="text" name="zone"
                placeholder="Zone du zoo"
                class="w-full border rounded-xl p-3" required>

            <textarea name="description"
                rows="3"
                placeholder="Description"
                class="w-full border rounded-xl p-3"></textarea>

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

<!-- JS -->
<script>
    const modal = document.getElementById("addModal");

    function openAddModal() {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    }

    function closeAddModal() {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }
</script>

</body>
</html>

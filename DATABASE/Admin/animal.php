  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ASSAD | Animaux</title>
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
            <a href="animals.php" class="bg-green-600 p-3 rounded-xl text-center font-bold">
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
                Gestion des Animaux
            </h1>
            <p class="text-center text-gray-600 mt-2">
                Ajouter, consulter et organiser les animaux du zoo
            </p>
        </header>

        <!-- ADD BUTTON -->
        <div class="flex justify-end mb-6">
            <button onclick="openAddModal()"
                class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-xl font-semibold shadow">
                ➕ Ajouter un animal
            </button>
        </div>

        <!-- ANIMAUX GRID -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- CARD Exemple -->
            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-6 text-center">
                <img src="img/lion.jpg" class="w-full h-40 object-cover rounded-xl mb-4">
                <h3 class="text-xl font-bold text-green-700 mb-2">Lion de l’Atlas</h3>
                <p class="text-gray-600 text-sm mb-2">Espèce: Panthera leo leo</p>
                <p class="text-gray-600 text-sm mb-2">Alimentation: Carnivore</p>
                <p class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full inline-block">
                    Habitat: Savane
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-6 text-center">
                <img src="img/giraffe.jpg" class="w-full h-40 object-cover rounded-xl mb-4">
                <h3 class="text-xl font-bold text-green-700 mb-2">Girafe</h3>
                <p class="text-gray-600 text-sm mb-2">Espèce: Giraffa camelopardalis</p>
                <p class="text-gray-600 text-sm mb-2">Alimentation: Herbivore</p>
                <p class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full inline-block">
                    Habitat: Savane
                </p>
            </div>

        </section>

    </main>
</div>

<!-- ADD ANIMAL MODAL -->
<div id="addModal" class="fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">

    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 relative">

        <button onclick="closeAddModal()"
            class="absolute top-3 right-3 text-gray-500 hover:text-red-600 text-xl font-bold">
            ✕
        </button>

        <h2 class="text-2xl font-bold text-green-700 mb-5">
            ➕ Ajouter un animal
        </h2>

        <form action="animal_store.php" method="POST" class="space-y-4">

            <input type="text" name="nom" placeholder="Nom de l’animal"
                   class="w-full border rounded-xl p-3" required>

            <input type="text" name="espece" placeholder="Espèce"
                   class="w-full border rounded-xl p-3" required>

            <input type="text" name="aliment" placeholder="Alimentation"
                   class="w-full border rounded-xl p-3" required>

            <input type="text" name="habitat" placeholder="Habitat"
                   class="w-full border rounded-xl p-3" required>

            <input type="text" name="image" placeholder="URL de l'image"
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

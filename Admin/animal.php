  
 <?php 
 include '../connectdata/connectdata.php'; 
              
// ajout
 
   
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $espece = $_POST['espece'];
    $alimentation = $_POST['alimentation'];
    $pays_origine = $_POST['pays_origine'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $habitat = $_POST['habitat'];

    
    $sql = "INSERT INTO animaux 
            (nom, espece, alimentation, pays_origine, description, image, habitat)
            VALUES ('$nom', '$espece', '$alimentation', '$pays_origine', '$description', '$image', '$habitat')";

    if (mysqli_query($conn, $sql)) {
        
        header("Location: animal.php");
        exit();
    } else {
        echo "Erreur lors de l'insertion de l'animal: " . mysqli_error($conn);
    }
}
?>




  
  
  
  
  
  
  
  
  
  
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

    <!-- SIDEBAR (UNCHANGED) -->
    <aside class="w-64 bg-gradient-to-b from-green-900 to-green-700 text-white p-6 space-y-8 shadow-2xl">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold tracking-wide">🦁 ASSAD</h2>
            <p class="text-sm text-green-200 mt-1">Admin Panel</p>
        </div>

        <nav class="flex flex-col gap-4 text-sm font-semibold">
            <a href="dashboard.php" class="flex items-center gap-3 bg-green-600 p-3 rounded-xl">🏠 Dashboard</a>
            <a href="user.php" class="flex items-center gap-3 hover:bg-green-600 p-3 rounded-xl">👥 Utilisateurs</a>
            <a href="animal.php" class="flex items-center gap-3 hover:bg-green-600 p-3 rounded-xl">🐾 Animaux</a>
            <a href="habitat.php" class="flex items-center gap-3 hover:bg-green-600 p-3 rounded-xl">🌍 Habitats</a>
            <a href="statistique.php" class="flex items-center gap-3 hover:bg-green-600 p-3 rounded-xl">📊 Statistiques</a>
            <a href="logout.php" class="flex items-center gap-3 hover:bg-green-600 p-3 rounded-xl">🚪 Déconnexion</a>
        </nav>

        <div class="pt-10 text-center text-green-200 text-xs">
            CAN 2025 • Maroc 🇲🇦 <br> © ASSAD Zoo
        </div>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-8">

        <header class="bg-white rounded-2xl shadow p-6 mb-8 text-center">
            <h1 class="text-3xl font-bold text-green-800">Gestion des Animaux</h1>
            <p class="text-gray-600">Ajouter, consulter et organiser les animaux</p>
        </header>

        <div class="flex justify-end mb-6">
            <button onclick="openAddModal()"
                class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-xl font-semibold">
                ➕ Ajouter un animal
            </button>
        </div>

    </main>
</div>

<!-- POPUP (SMALL & CLEAN) -->
<div id="addModal" class="fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">

    <div class="bg-white rounded-xl shadow-xl w-full max-w-sm p-4 relative">

        <button onclick="closeAddModal()"
            class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-lg font-bold">
            ✕
        </button>

        <h2 class="text-lg font-bold text-green-700 mb-3 text-center">
            ➕ Ajouter un animal
        </h2>

        <form action="animal_store.php" method="POST" class="space-y-2 text-sm">

            <input type="text" name="nom" placeholder="Nom"
                   class="w-full border rounded-lg p-2" required>

            <input type="text" name="espece" placeholder="Espèce"
                   class="w-full border rounded-lg p-2" required>
       

              <select name="alimentation" class="w-full p-2 border rounded-xl">
                    <option value="">Type alimentaire</option>
                    <option value="Carnivore">Carnivore</option>
                    <option value="Herbivore">Herbivore</option>
                    <option value="Omnivore">Omnivore</option>
                </select>

             

            <input type="text" name="pays_origine" placeholder="Pays d’origine"
                   class="w-full border rounded-lg p-2" required>

            <select name="id_habitat"  class="w-full p-2 border rounded-xl">
                    <option value="">Habitat</option>
                    <option value = "">Savane</option>
                    <option value ="">Jungle</option>
                    <option value="">Désert</option>
                    <option value="">Océan</option>
                </select>

            <input type="text" name="image" placeholder="Image (URL)"
                   class="w-full border rounded-lg p-2" required>

            <textarea name="description" placeholder="Description"
                      class="w-full border rounded-lg p-2 h-14" required></textarea>

            <div class="flex justify-end gap-2 pt-2">
                <button type="button" onclick="closeAddModal()"
                        class="px-3 py-1 border rounded-lg">
                    Annuler
                </button>

                <button type="submit"
                        class="bg-green-700 hover:bg-green-800 text-white px-3 py-1 rounded-lg">
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

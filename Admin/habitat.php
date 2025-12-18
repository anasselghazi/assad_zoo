 <?php 
include '../connectdata/connectdata.php';

/* AJOUT */
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $climate = $_POST['type_climat'];
    $zone = $_POST['zone_zoo'];
    $description = $_POST['description'];

    $sql = "INSERT INTO habitats (nom, type_climat, zone_zoo, description)
            VALUES ('$nom', '$climate', '$zone', '$description')";

    if (mysqli_query($conn, $sql)) {
        header("Location: habitat.php?success=1");
        exit();
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}



/* AFFICHAGE */
$sql = "SELECT * FROM habitats ORDER BY id_habitat DESC";
$result = mysqli_query($conn, $sql);


/*delete*/

if(isset($_POST['delete']) && isset($_POST['id_habitat'])) {
    $id = $_POST['id_habitat'];     
    $sql = "DELETE FROM habitats WHERE id_habitat = $id";

    if(mysqli_query($conn, $sql)){
        
        header("Location: habitat.php?delete=1");
        exit();
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}






?>
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

<!-- SIDEBAR (inchangée) -->
<aside class="w-64 bg-gradient-to-b from-green-900 to-green-700 text-white p-6 space-y-8 shadow-2xl">
    <div class="text-center">
        <h2 class="text-3xl font-extrabold">🦁 ASSAD</h2>
        <p class="text-sm text-green-200">Admin Panel</p>
    </div>

    <nav class="flex flex-col gap-4 text-sm font-semibold">
        <a href="dashboard.php" class="p-3 bg-green-600 rounded-xl">🏠 Dashboard</a>
        <a href="user.php" class="p-3 hover:bg-green-600 rounded-xl">👥 Utilisateurs</a>
        <a href="animal.php" class="p-3 hover:bg-green-600 rounded-xl">🐾 Animaux</a>
        <a href="habitat.php" class="p-3 hover:bg-green-600 rounded-xl">🌍 Habitats</a>
        <a href="statistique.php" class="p-3 hover:bg-green-600 rounded-xl">📊 Statistiques</a>
        <a href="logout.php" class="p-3 hover:bg-green-600 rounded-xl">🚪 Déconnexion</a>
    </nav>
</aside>

<!-- MAIN -->
<main class="flex-1 p-8">

<header class="bg-white rounded-2xl shadow p-6 mb-8 text-center">
    <h1 class="text-3xl font-bold text-green-800">Gestion des Habitats</h1>
</header>

<div class="flex justify-end mb-6">
    <button onclick="openAddModal()"
        class="bg-green-700 text-white px-6 py-3 rounded-xl">
        ➕ Ajouter un habitat
    </button>
</div>

<!-- AFFICHAGE DES HABITATS -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

<?php if (mysqli_num_rows($result) > 0): ?>
<?php while ($row = mysqli_fetch_assoc($result)): ?>

<div class="bg-white rounded-2xl shadow p-6 hover:shadow-xl transition">
    <h3 class="text-xl font-bold text-green-700 mb-2">
        <?= $row['nom']; ?>
    </h3>

    <p class="text-gray-600 text-sm mb-3">
        <?= $row['description']; ?>
    </p>

    <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
        <?= $row['zone_zoo']; ?>
    </span>

    <p class="text-sm text-gray-500 mt-2">
        Climat : <?= $row['type_climat']; ?>
    </p>

    <!-- ACTIONS -->
    <div class="flex justify-end gap-2 mt-4">
        <a href="habitat_edit.php?id=<?= $row['id_habitat']; ?>"
           class="px-4 py-1 bg-blue-600 text-white rounded-lg text-sm">
            ✏️ Edit
        </a>

        <form method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet habitat ?');">
    <input type="hidden" name="id_habitat" value="<?= $row['id_habitat']; ?>">
    <button type="submit" name="delete"  class="px-4 py-1 text-sm bg-red-600 text-white rounded-lg">
        🗑 Supprimer
    </button>
</form>

    </div>
</div>

<?php endwhile; ?>
<?php else: ?>
<p class="text-gray-500">Aucun habitat trouvé.</p>
<?php endif; ?>

</section>
</main>
</div>

<!-- MODAL AJOUT -->
<div id="addModal" class="fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">
<div class="bg-white rounded-2xl w-full max-w-md p-6 relative">

<button onclick="closeAddModal()" class="absolute top-3 right-3 text-xl">✕</button>

<form method="POST" class="space-y-4">
    <input type="text" name="nom" placeholder="Nom" class="w-full border p-3 rounded-xl" required>
    <input type="text" name="type_climat" placeholder="Type climat" class="w-full border p-3 rounded-xl" required>
    <input type="text" name="zone_zoo" placeholder="Zone zoo" class="w-full border p-3 rounded-xl" required>
    <textarea name="description" rows="3" placeholder="Description"
        class="w-full border p-3 rounded-xl"></textarea>

    <div class="flex justify-end gap-3">
        <button type="button" onclick="closeAddModal()" class="border px-4 py-2 rounded-xl">Annuler</button>
        <button type="submit" name="submit"
            class="bg-green-700 text-white px-4 py-2 rounded-xl">
            Enregistrer
        </button>
    </div>
</form>

</div>
</div>

<script>
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

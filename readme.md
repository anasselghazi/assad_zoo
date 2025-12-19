# ASSAD – Zoo virtuel CAN 2025

Application web dynamique pour promouvoir les Lions de l’Atlas et les animaux du zoo auprès des supporters de la CAN 2025 et des familles.

## 1. Objectifs du projet

- Permettre aux visiteurs de découvrir les animaux, leurs habitats et leurs statuts de conservation.
- Proposer des visites guidées virtuelles avec parcours éducatifs.
- Gérer les rôles (Visiteur, Guide, Admin) avec un système d’authentification sécurisé.

## 2. Stack technique

- Langage : PHP 8+, HTML5, CSS3 (Tailwind CSS), JavaScript (optionnel).
- Base de données : MySQL/MariaDB.
- Sécurité : mots de passe hashés (password_hash), validation serveur + Regex.

## 3. Modèle de données

Tables principales :

- `animaux(id, nom, espece, alimentation, image, paysorigine, descriptioncourte, id_habitat)`
- `habitats(id, nom, typeclimat, description, zonezoo)`
- `utilisateurs(id, nom, email, role, motpasse_hash, pays, actif, guide_approuve)`
- `visitesguidees(id, titre, description, dateheure, langue, capacite_max, statut, duree, prix, id_guide)`
- `etapesvisite(id, titreetape, descriptionetape, ordreetape, id_visite, id_habitat)`
- `reservations(id, idvisite, idutilisateur, nbpersonnes, datereservation)`
- `commentaires(id, idvisitesguides, idutilisateur, note, texte, date_commentaire)`

## 4. Installation

1. Cloner le projet dans le serveur local (`htdocs` ou `www`).
2. Créer une base de données `assad_zoo`.
3. Importer le fichier `database.sql` (tables + données de base).
4. Configurer la connexion dans `config.php` :
5. Créer manuellement le compte Admin dans la table `utilisateurs` (role = 'ADMIN').

## 5. Authentification & rôles

- Inscription : Visiteur ou Guide.
- Connexion : vérification email + mot de passe hashé.
- Rôles :
- Visiteur : consulter animaux, visites, réserver, commenter.
- Guide : gérer ses visites guidées et leurs étapes.
- Admin : gérer utilisateurs, animaux, habitats et statistiques.

## 6. Fonctionnalités principales

- Gestion des animaux (CRUD, image, habitat).
- Gestion des habitats (CRUD).
- Visites guidées virtuelles (création, modification, annulation).
- Réservations et commentaires.
- Statistiques : nombre de visiteurs par pays, animaux les plus consultés, visites les plus réservées.

## 7. Sécurité

- Mots de passe hashés avec `password_hash()` / `password_verify()`.
- Validation serveur pour tous les formulaires (Regex sur email, nom, mot de passe, etc.).
- Protection des pages par rôle (middleware ou vérifications PHP sur la session).

## 8. Auteur

Projet académique réalisé dans le cadre de la CAN 2025 – Zoo virtuel **ASSAD**.

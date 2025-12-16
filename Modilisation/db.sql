CREATE DATABASE ASSAD_ZOO ;

USE ASSAD_USE ;

CREATE TABLE utilisateurs (
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    role ENUM('admin','guide','visiteur') NOT NULL,
    motpasse_hash VARCHAR(255) NOT NULL,
    statut ENUM('actif','inactif') DEFAULT 'actif',
    pays VARCHAR(100)
);

CREATE TABLE visitesguidees (
    idVisit INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    description TEXT,
    dateheure DATETIME NOT NULL,
    langue VARCHAR(50),
    capacite_max INT NOT NULL,
    duree INT, -- 
    prix DECIMAL(8,2),
    statut ENUM('active','annulee','complete') DEFAULT 'active',
    id_guide INT,
    CONSTRAINT fk_visite_guide
  FOREIGN KEY (id_guide) REFERENCES utilisateurs(idUser)
);

CREATE TABLE etapesvisite (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titreetape VARCHAR(150) NOT NULL,
    descriptionetape TEXT,
    ordreetape INT NOT NULL,
    id_visite INT NOT NULL,
    CONSTRAINT fk_etape_visite
        FOREIGN KEY (id_visite) REFERENCES visitesguidees(idVisit)
        
);

CREATE TABLE reservations (
    idResrv INT AUTO_INCREMENT PRIMARY KEY,
    idvisite INT NOT NULL,
    idutilisateur INT NOT NULL,
    nbpersonnes INT NOT NULL,
    datereservation DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_reservation_visite
        FOREIGN KEY (idvisite) REFERENCES visitesguidees(idVisit),
        
    CONSTRAINT fk_reservation_utilisateur
        FOREIGN KEY (idutilisateur) REFERENCES utilisateurs(idUser)
    
);

CREATE TABLE commentaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idvisitesguides INT NOT NULL,
    idutilisateur INT NOT NULL,
    note INT CHECK (note BETWEEN 1 AND 5),
    texte TEXT,
    date_commentaire DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_commentaire_visite
        FOREIGN KEY (idvisitesguides) REFERENCES visitesguidees(idVisit),
    CONSTRAINT fk_commentaire_utilisateur
        FOREIGN KEY (idutilisateur) REFERENCES utilisateurs(idUser)
        
);

CREATE TABLE habitats (
    idHab INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    typeclimat VARCHAR(100),
    description TEXT,
    zonezoo VARCHAR(100)
);

CREATE TABLE animaux (
    idAnimal INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    espece VARCHAR(100),
    alimentation VARCHAR(100),
    image VARCHAR(255),
    paysorigine VARCHAR(100),
    descriptioncourte TEXT,
    id_habitat INT,
    CONSTRAINT fk_animal_habitat
        FOREIGN KEY (id_habitat) REFERENCES habitats(idHab)
        
);
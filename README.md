# 🎓 Gestion Automatisée des Travaux Pratiques (PFE)

![PHP](https://img.shields.io/badge/PHP-Native-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📖 Description du Projet

Ce projet a été réalisé dans le cadre de mon Projet de Fin d'Études (Licence).

**But de création :**
Pour tenter de résoudre les problèmes récurrents posés par la gestion des TP et vu que le besoin apparaît au service informatique et le manque d’informatisation au service de la gestion manuelle des TPs informatique, nous avons développé un site web dynamique qui permet de gérer ces problèmes automatiquement.

L'application centralise la gestion des salles, des groupes d'étudiants et des ressources pédagogiques au sein de la faculté (FSDM).

## ✨ Fonctionnalités

L'application est divisée en trois espaces sécurisés, offrant des fonctionnalités spécifiques à chaque acteur :

### 👨‍🏫 Espace Enseignant

- **Communication :** Facilite les échanges entre l'enseignant et ses groupes d'étudiants.
- **Gestion des Ressources :** Déposer les supports de TPs et cours.
- **Réservation de Salles :** Effectuer et annuler des réservations de salles de TP informatique en temps réel.
- **Suivi Pédagogique :** Attribuer les notes des colles/TPs et gérer la présence.
- **Profil :** Gestion et modification des informations personnelles.

### 👨‍🎓 Espace Étudiant

- **Suivi :** Consultation de la répartition des groupes et des emplois du temps.
- **Travail Collaboratif :** Envoi des rapports de TP et communication avec les enseignants.
- **Résultats :** Réception et consultation des notes attribuées.

### 🛠️ Espace Administrateur

- **Gestion Utilisateurs :** Ajouter, modifier ou supprimer des comptes (Enseignants et Étudiants).
- **Gestion des Salles :** Manipuler les salles (ajout/suppression) et consulter le planning global des réservations.
- **Traitement :** Valider ou refuser les demandes d'inscription et autres requêtes administratives.

## 💻 Technologies Utilisées

- **Langage Backend :** PHP (Natif, sans framework)
- **Base de Données :** MySQL (PDO)
- **Frontend :** HTML5, CSS3, Bootstrap 5.3 (pour le design responsive)
- **Serveur Local :** XAMPP / WAMP

## ⚙️ Installation et Configuration

Pour tester ce projet sur votre machine locale :

1.  **Cloner le dépôt :**
    ````bash
    git clone [ https://github.com/Saad-El-Jhomari-IA/Gestion-TP-FSDM.git]
        ```
    ````
2.  **Base de données :**
    - Importez le fichier `database/structure_base_donnees.sql` dans votre gestionnaire (phpMyAdmin).
    - Nommez la base de données `tp` (ou adaptez le fichier `function.php`).
3.  **Configuration :**
    - Vérifiez les paramètres de connexion dans le fichier `function.php`. Par défaut :
      ```php
      $cn = new PDO("mysql:host=localhost;dbname=tp...", 'root', '');
      ```
4.  **Lancement :**
    - Placez le dossier dans le répertoire de votre serveur (`htdocs` ou `www`).
    - Accédez à `http://localhost/NomDuProjet/index.php`.

## 👤 Auteur

**SAAD EL JHOMARI**

- **Formation :** Licence SMI, FSDM ,2023

---

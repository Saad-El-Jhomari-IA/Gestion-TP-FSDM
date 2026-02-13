# 🎓 Gestion des Travaux Pratiques (PFE - FSDM)

![Version](https://img.shields.io/badge/version-1.0.0-blue)
![PHP](https://img.shields.io/badge/PHP-Native-purple)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-violet)

## 📄 Description

Ce projet est une application web de **Gestion des Travaux Pratiques (TPs)** développée dans le cadre de mon Projet de Fin d'Études (Licence) à la FSDM (Faculté des Sciences Dhar El Mahraz).

L'objectif principal est de dématérialiser la gestion des TPs informatique pour résoudre les problèmes de planification manuelle, faciliter la réservation des salles et centraliser l'échange de documents entre enseignants et étudiants.

## ✨ Fonctionnalités Principales

L'application est divisée en trois espaces sécurisés :

### 👨‍💼 Espace Administration

- **Authentification sécurisée** pour les administrateurs.
- **Gestion des utilisateurs :** Ajout, modification et suppression des comptes Enseignants et Étudiants.
- **Gestion des Salles :** Ajout et suppression des salles de TP, consultation de la capacité des salles.
- **Supervision :** Vue globale sur le système.

### 👨‍🏫 Espace Enseignant

- **Gestion des cours :** Dépôt de fichiers (TPs, cours) pour les étudiants.
- **Réservation de salles :** Système de réservation avec gestion des créneaux horaires (Lundi à Samedi).
- **Évaluation :** Attribution et modification des notes des étudiants.
- **Gestion de profil :** Modification des informations personnelles et des modules enseignés.

### 👨‍🎓 Espace Étudiant

- **Accès aux ressources :** Téléchargement des fichiers déposés par les professeurs.
- **Dépôt des travaux :** Envoi des comptes rendus et réponses aux TPs.
- **Consultation :** Affichage des notes et des groupes de TP.
- **Inscription :** Possibilité de créer un compte via le formulaire d'inscription.

## 🛠️ Technologies Utilisées

- **Backend :** PHP (Natif, sans framework)
- **Base de données :** MySQL
- **Frontend :** HTML5, CSS3, Bootstrap 5.3
- **Serveur local :** XAMPP / WAMP (Apache)

## 🚀 Installation et Configuration

Suivez ces étapes pour lancer le projet sur votre machine locale :

1.  **Cloner le projet** ou télécharger les fichiers.
2.  **Base de données :**
    - Ouvrez phpMyAdmin.
    - Créez une base de données nommée `tp`.
    - Importez le fichier `tp (2).sql` situé dans le dossier du projet.
3.  **Configuration :**
    - Le projet est configuré pour se connecter en `root` sans mot de passe.
    - Si vous avez un mot de passe MySQL, modifiez le fichier `function.php` et les fichiers de connexion (ex: `Administration.php`) à la ligne :
      ```php
      $cn = new PDO("mysql:host=localhost;dbname=tp;...", 'root', 'VOTRE_MOT_DE_PASSE');
      ```
4.  **Lancement :**
    - Placez le dossier du projet dans le répertoire `htdocs` (XAMPP) ou `www` (WAMP).
    - Accédez à `http://localhost/NomDeVotreDossier/acceuil.php`.

## 👤 Auteur

**[VOTRE NOM COMPLET]**

- **Formation :** Licence en Informatique - FSDM
- **Année :** [2023-2024]

---

_Projet réalisé à des fins académiques._

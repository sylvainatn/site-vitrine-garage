
# **Site Vitrine Garage Chronomeca**

Ce projet est un site vitrine développé pour le garage **Chronomeca**. Il utilise l'architecture **MVC** (Modèle-Vue-Contrôleur) pour organiser et structurer le code de manière claire et maintenable.

## **Table des matières**
1. [Description](#description)
2. [Fonctionnalités](#fonctionnalités)
3. [Installation](#installation)
4. [Architecture du projet](#architecture-du-projet)
5. [Accès au site](#accès-au-site)

---

## **Description**
Le site vitrine a pour objectif de présenter les services et produits offerts par le garage **Chronomeca**.  
Il inclut également une section d'administration permettant de gérer dynamiquement le contenu des pages du site et de publier des annonces de voitures d’occasion.

---

## **Fonctionnalités**

### **Frontend (Site vitrine)**
- **Page d'accueil** : Présentation du garage et mise en avant des services principaux.
- **Prestation** : Liste des services proposés par le garage (entretien, réparations, etc.).
- **Nous situer** : Carte interactive pour localiser le garage.
- **Voitures** : Section dédiée aux publications des voitures d'occasion disponibles à l'achat.

### **Backend (Administration)**
- Modifier le contenu de chaque page du site (texte, images, services, etc.).
- Publier, modifier et supprimer des annonces de voitures d'occasion.

---

## **Installation**

### **Prérequis**
- Serveur local comme [Laragon](https://laragon.org/), [WampServer](https://www.wampserver.com/), ou [XAMPP](https://www.apachefriends.org/index.html).
- PHP 7.4 ou supérieur.
- Base de données MySQL.

### **Étapes**
1. Clonez le projet :
   ```bash
   git clone https://github.com/votre-repo/site-vitrine-chronomeca.git
   ```
2. Placez le dossier dans votre répertoire de serveur local :
   ```bash
   /www/site-vitrine-chronomeca
   ```
3. Importez la base de données :
   - Rendez-vous dans **phpMyAdmin** ou un outil similaire.
   - Importez le fichier SQL situé dans `/model/chronomeca.sql`.

4. Lancez le serveur et accédez au projet dans le navigateur :
   - **Frontend** : [http://localhost/chronomeca/controller](http://localhost/chronomeca/controller)
   - **Backend** : [http://localhost/chronomeca/back](http://localhost/chronomeca/back)

---

## **Architecture du projet**
Le projet suit l'architecture **MVC** avec une séparation claire entre les différentes couches :

### **Structure des dossiers**
```
/chronomeca
├── /back               # Section administrative
├── /controller         # Contrôleurs pour le frontend
├── /model              # Modèles pour les données
├── /view               # Vues pour l'affichage (frontend et backend)

```

---

## **Accès au site**

- **Frontend (Site vitrine)** :
  - URL : [http://localhost/chronomeca/controller](http://localhost/chronomeca/controller)
  - Ce répertoire permet d'accéder aux pages principales visibles par les utilisateurs.

- **Backend (Administration)** :
  - URL : [http://localhost/chronomeca/back](http://localhost/chronomeca/back)
  - Ce répertoire est dédié à l'administration et nécessite une connexion avec des identifiants valides.

---


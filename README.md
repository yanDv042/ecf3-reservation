Projet Laravel - ECF 3 : Gestion des clients

Ce projet est une application Laravel de gestion des réservations de véhicules (partie client uniquement).
Il inclut les fonctionnalités CRUD pour les clients via une interface moderne avec Bootstrap.

---

Technos:
- Laravel 11
- PHP 8.x
- MySQL (via XAMPP)
- Bootstrap 5

---

Fonctionnalités :
- Affichage de la liste des clients
- Ajout d’un nouveau client
- Modification d’un client existant
- Suppression d’un client
- Interface responsive et claire

---

Installation & Lancement :

1. Extraire le projet dans un dossier local

2. Ouvrir le terminal dans le dossier et lancer :

   composer install

3. Créer une base de données MySQL nommée :
   reservation_vehicules

4. Dupliquer le fichier `.env.example` et le renommer `.env`
   puis modifier ces lignes :

   DB_DATABASE=reservation_vehicules
   DB_USERNAME=root
   DB_PASSWORD=

5. Générer la clé d'application :

   php artisan key:generate

6. Lancer les migrations et les seeders :

   php artisan migrate --seed

7. Démarrer le serveur local :

   php artisan serve

8. Accéder à l'application :

   http://localhost:8000/clients

---

Exemple d’utilisateur ajouté automatiquement (via Seeder) :
- Nom : Bourhil
- Prénom : Yannis
- Email : yannis.bourhil@gmail.com


---

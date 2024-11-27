# Correction des excercices sur les tableaux associatifs

### Énoncé
Créer un tableau associatif `$notes` contenant les noms des étudiants comme clés et leurs notes comme valeurs. Modifier les notes de deux étudiants, ajouter un nouvel étudiant avec sa note, et afficher le tableau après ces modifications.

---

### Correction PHP

```php
<?php
// Création du tableau associatif $notes
$notes = [
    "Alice" => 14,
    "Bob" => 12,
    "Charlie" => 15
];

// Modification des notes de deux étudiants
$notes["Alice"] = 16; // Modification de la note d'Alice
$notes["Bob"] = 10;   // Modification de la note de Bob

// Ajout d'un nouvel étudiant avec sa note
$notes["David"] = 18; // Ajout de David avec une note de 18

// Affichage du tableau après les modifications
echo "Tableau des notes après modifications :\n";
foreach ($notes as $etudiant => $note) {
    echo "$etudiant : $note\n";
}
?>
```

### Énoncé
Créer un tableau associatif `$produits` contenant les noms des produits comme clés et leurs prix comme valeurs. Calculer et afficher le prix total des produits.

---

### Correction PHP

```php
<?php
// Création du tableau associatif $produits
$produits = [
    "Pomme" => 2.5,   // Prix en euros
    "Banane" => 1.2,
    "Orange" => 3.0,
    "Raisin" => 4.5
];

// Initialisation du prix total
$total = 0;

// Calcul du prix total
foreach ($produits as $prix) {
    $total += $prix; // Ajout du prix du produit au total
}

// Affichage du prix total
echo "Prix total des produits : " . $total . " €\n";
?>
```

### Énoncé
Créer un programme `emails.php` qui :
1. Stocke dans un tableau `$emails` les adresses email de chaque membre d'une association.
   - Les domaines utilisés seront : `@free.fr`, `@gmail.com`, et `@laposte.net`.
2. Affiche l'ensemble des membres de l'association (nom et email).

---

### Correction PHP

```php
<?php
// Création du tableau associatif $emails
$emails = [
    "Jean Dupont" => "jean.dupont@gmail.com",
    "Alice Martin" => "alice.martin@free.fr",
    "Marc Durand" => "marc.durand@laposte.net",
    "Claire Petit" => "claire.petit@gmail.com",
    "Paul Dubois" => "paul.dubois@free.fr"
];

// Affichage des membres de l'association
echo "Liste des membres de l'association :\n";
foreach ($emails as $nom => $email) {
    echo "Nom : $nom, Email : $email\n";
}
?>
```
### Énoncé
Modifier le programme `emails.php` afin de :
1. Demander à l'utilisateur de saisir un nom de domaine (ex. : `gmail.com`).
2. Afficher le nom des membres ayant une adresse email correspondant à ce domaine.

---

### Correction PHP

```php
<?php
// Création du tableau associatif $emails
$emails = [
    "Jean Dupont" => "jean.dupont@gmail.com",
    "Alice Martin" => "alice.martin@free.fr",
    "Marc Durand" => "marc.durand@laposte.net",
    "Claire Petit" => "claire.petit@gmail.com",
    "Paul Dubois" => "paul.dubois@free.fr"
];

// Demander à l'utilisateur de saisir un nom de domaine
$domaine = readline("Entrez un nom de domaine (ex : gmail.com) : "); // Lecture de l'entrée utilisateur

// Vérification et affichage des membres correspondant au domaine
echo "Membres ayant une adresse email avec le domaine '$domaine' :\n";
$trouve = false; // Flag pour vérifier s'il y a des résultats
foreach ($emails as $nom => $email) {
    if (strpos($email, "@$domaine") !== false) {
        echo "- $nom\n";
        $trouve = true;
    }
}

// Si aucun membre n'a été trouvé
if (!$trouve) {
    echo "Aucun membre trouvé avec le domaine '$domaine'.\n";
}
?>
```

### Énoncé
Créer un programme qui :
1. Stocke dans un tableau associatif `$contacts` les noms de personnes comme clés et leurs numéros de téléphone comme valeurs.
2. Demande à l'utilisateur de saisir un nom.
3. Vérifie si ce nom existe dans le tableau :
   - Si oui, affiche le numéro de téléphone correspondant.
   - Sinon, affiche un message indiquant que le contact n'est pas trouvé.

---

### Solution en PHP

```php
<?php
// Création du tableau associatif $contacts
$contacts = [
    "Jean Dupont" => "06 12 34 56 78",
    "Alice Martin" => "07 98 76 54 32",
    "Marc Durand" => "05 67 89 01 23"
];

// Demander à l'utilisateur de saisir un nom
$nom = readline("Entrez le nom du contact : "); // Lecture de l'entrée utilisateur

// Vérifier si le nom existe dans le tableau
if (array_key_exists($nom, $contacts)) {
    // Afficher le numéro de téléphone si le nom existe
    echo "Le numéro de téléphone de $nom est : " . $contacts[$nom] . "\n";
} else {
    // Afficher un message si le nom n'est pas trouvé
    echo "Le contact '$nom' n'est pas trouvé dans le répertoire.\n";
}
?>
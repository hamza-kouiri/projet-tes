# TP : Manipulation de tableaux et chaînes de caractères en PHP 8

## Objectifs
- Comprendre et manipuler les tableaux à une dimension.
- Utiliser la boucle `foreach` pour parcourir des tableaux.
- Manipuler les chaînes de caractères en PHP.

## Consignes générales
1. Chaque question doit être résolue dans un script PHP distinct.
2. Aucune fonction utilisateur ne doit être utilisée.
3. Commentez votre code pour expliquer votre logique.

---

## Énoncé

Vous êtes chargé de développer un programme qui aide une librairie en ligne à gérer les livres en stock. Les questions vous guident pas à pas pour structurer les données et manipuler le stock de livres.

### ❓1 : 📋 Création et affichage des données Création et affichage des données

Créez un tableau unidimensionnel `$livres` contenant une liste de titres de livres, par exemple : "Le Petit Prince", "1984", "Les Misérables", "Le Rouge et le Noir", "Harry Potter". Parcourez ce tableau avec une boucle `foreach` pour afficher chaque titre sur une ligne séparée.

Exemple de sortie :
```
Le Petit Prince
1984
Les Misérables
Le Rouge et le Noir
Harry Potter
```

### ❓2 : 🔢 Affichage avec numérotation Affichage avec numérotation

Modifiez le code précédent pour afficher chaque titre avec un numéro d’ordre devant. La numérotation doit commencer à 1.

Exemple de sortie :
```
1. Le Petit Prince
2. 1984
3. Les Misérables
4. Le Rouge et le Noir
5. Harry Potter
```

### ❓3 : ✍️ Comptage des lettres dans les titres Comptage des lettres dans les titres

Pour chaque titre du tableau `$livres`, calculez le nombre de caractères (espaces inclus). Affichez chaque titre suivi du nombre de caractères entre parenthèses.

Exemple de sortie :
```
Le Petit Prince (15 caractères)
1984 (4 caractères)
Les Misérables (13 caractères)
Le Rouge et le Noir (17 caractères)
Harry Potter (12 caractères)
```

### ❓4 : 🔍 Filtrage des titres Filtrage des titres

La librairie souhaite connaître les livres dont le titre fait plus de 10 caractères. Parcourez le tableau `$livres` avec une boucle `foreach` et affichez uniquement les titres qui dépassent cette longueur.

Exemple de sortie :
```
Les Misérables
Le Rouge et le Noir
Harry Potter
```

### ❓5 : 🔎 Recherche d'un mot-clé Recherche d'un mot-clé

La librairie souhaite rechercher les livres contenant un mot spécifique dans leur titre. Demandez à l'utilisateur de saisir un mot-clé, puis parcourez le tableau `$livres` pour afficher uniquement les titres qui contiennent ce mot-clé (sans tenir compte de la casse).

Exemple de sortie (mot-clé : "le") :
```
Le Petit Prince
Le Rouge et le Noir
```

La librairie souhaite afficher les titres des livres triés par ordre alphabétique. Modifiez le tableau `$livres` pour le trier par ordre alphabétique, puis affichez chaque titre sur une ligne séparée.

Exemple de sortie :
```
1984
Harry Potter
Le Petit Prince
Le Rouge et le Noir
Les Misérables
```

### ❓6 : 🔢 Comptage des occurrences de mots

La librairie souhaite savoir combien de fois un mot spécifique apparaît dans tous les titres. Demandez à l'utilisateur de saisir un mot, puis parcourez le tableau `$livres` pour compter combien de fois ce mot apparaît dans l'ensemble des titres (sans tenir compte de la casse). Affichez le nombre total d'occurrences.

Exemple de sortie (mot : "le") :
```
Le mot "le" apparaît 3 fois dans les titres.
```

### ❓7 : ✏️ Remplacement de mots dans les titres

La librairie souhaite remplacer un mot spécifique par un autre dans tous les titres. Demandez à l'utilisateur de saisir un mot à remplacer et un mot de remplacement, puis parcourez le tableau `$livres` pour effectuer le remplacement. Affichez chaque titre modifié sur une ligne séparée.

Exemple de sortie (remplacer "Le" par "La") :
```
La Petit Prince
1984
Les Misérables
La Rouge et la Noir
Harry Potter
```

### ❓8 (BONUS) : 📚 Affichage des titres en majuscules

La librairie souhaite afficher tous les titres de livres en majuscules pour mettre en avant les titres. Parcourez le tableau `$livres` et affichez chaque titre en majuscules.

Exemple de sortie :
```
LE PETIT PRINCE
1984
LES MISÉRABLES
LE ROUGE ET LE NOIR
HARRY POTTER
```

### ❓9 (BONUS) : 📊 Comptage des mots dans chaque titre

La librairie souhaite savoir combien de mots il y a dans chaque titre de livre. Parcourez le tableau `$livres` et affichez chaque titre suivi du nombre de mots qu'il contient.

Exemple de sortie :
```
Le Petit Prince (3 mots)
1984 (1 mot)
Les Misérables (2 mots)
Le Rouge et le Noir (5 mots)
Harry Potter (2 mots)
```



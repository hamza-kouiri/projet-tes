# TP n°1 : Vérification d'un nombre parfait en PHP

## Objectif :
Écrire un script PHP qui demande à l'utilisateur de saisir un nombre entier et qui vérifie si ce nombre est un **nombre parfait**.

## Définition :
Un **nombre parfait** est un entier positif qui est égal à la somme de ses **diviseurs propres** (les diviseurs inférieurs à lui-même).

### Exemples :
- 6 est un nombre parfait, car ses diviseurs propres sont 1, 2 et 3, et :  
  `1 + 2 + 3 = 6`
  
- 28 est aussi un nombre parfait, car ses diviseurs propres sont 1, 2, 4, 7 et 14, et :  
  `1 + 2 + 4 + 7 + 14 = 28`


### Exemple d'exécution :

```
Entrez un nombre : 6
6 est un nombre parfait.
```

```
Entrez un nombre : 10
10 n'est pas un nombre parfait.
```

# TP2 : Générateur de mots de passe sécurisés en PHP

## Objectif :
Écrire un script PHP qui demande à l'utilisateur une longueur `n` et génère un mot de passe aléatoire de cette longueur. Le mot de passe doit contenir des lettres majuscules, des lettres minuscules et des chiffres.

## Instructions :
1. Le script doit demander à l'utilisateur de saisir la longueur du mot de passe (un nombre entier).
2. Le script doit générer un mot de passe de la longueur spécifiée.
3. Le mot de passe doit **obligatoirement contenir** :
  - au moins une lettre majuscule (A-Z)
  - au moins une lettre minuscule (a-z)
  - au moins un chiffre (0-9)
4. Le mot de passe généré doit être affiché à l'utilisateur.

### Exemple d'exécution :

```
Entrez la longueur du mot de passe : 8
Mot de passe généré : A9kTz5Qc
```

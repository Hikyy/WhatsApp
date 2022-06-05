# WhatsApp

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](https://github.com/Hikyy)  [![forthebadge](http://forthebadge.com/images/badges/powered-by-electricity.svg)](https://linkedin.com/in/rayane-mabrouki/)

## Présentation

1. Envoi de messages vers un utilisateur de la plateforme.

2. Réception de message d'un utilisateur de la plateforme.

3. Suppression d'un message de la conversation. Pour supprimer un message, il suffit que le pointeur de la souris soit par-dessus le message en question. Une fléche apparaît alors, il suffit d'appuyer dessus, et une poubelle s'affiche pour qu'on puisse supprimer le message, c'est qu'au clic sur celle-ci que la suppression s'effectue.

4. Suppression d'une conversation entière effectuée avec un utilisateur. En haut de votre conversation, il y'a 3 points, il suffit de cliquer sur celui-ci et un message avec "blablabla" sera affiché.

5. Vous pouvez agrémenter votre conversation d'un ou plusieurs emojis (voir la puce 6 pour plus de détails à propos de la mise à jour prochaine)

6. Prochainement, possibilité de pouvoir envoyer d'un ou plusieurs emojis.

7. Effectué une recherche, en haut à droite,  il y'a une loupe, vous pouvez effectuer une recherche des messages que vous avez échangés avec l'utilisateur.

8. Création d'un compte sur la page inscription.php

9. Connexion à son compte sur la page connection.php et de pouvoir voir les utilisateurs de la plateforme.

10. Une liste d'utilisateurs à votre gauche, vous est proposée quand vous vous connectez.

## Fabriqué

Visual Studio - Éditeur de texte


## Technologie

Utilisation :
- HTML & CSS, pour la structure et l'aspect visuel de la page inscription, connexion, et de la page Home.

- PHP & SQL pour le Back, enregistrer l'identifiant et le mot de passe de l'utilisateur dans la base de données, et de pouvoir se connecter. Sauvegarder les échanges entre utilisateurs.

- Ajax pour effectuer une requête où le message est envoyé vers la base de données, mais aussi une requête pour la récupération des messages de la base de données des utilisateurs vers la conversation sans effectuer de rafraîchissement entre chaque échange.

- JavaScript pour traiter le contenu de la requête des messages. L'aspect visuel et l'interaction des éléments cachés. La création de nouvelle bulle (div) à chaque nouveau message. La recherche d'un message effectué avec un utilisateur.

## Mise à jour prochaine

- Pouvoir envoyer un emoji dans son message.
- Changer de photos de Profil.
- Modifier un message.
- Modifier son nom d'utilisateur.

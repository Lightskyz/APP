# Computer Science Project - Spring 2015

## Contexte 

Une association à but non lucratif a pour objectif de mettre à disposition des habitants d’un quartier, d’une commune ou d’une ville, un site Web d’achat ou d’échange de fruits et légumes frais cultivés à proximité de chez les utilisateurs.
Pour réaliser ce projet, l’association lance un appel d’offre afin de réaliser ce site Web. Le site présentera les fruits et légumes mis en vente ou en échange par les membres. Les membres doivent avoir la possibilité d’effectuer une recherche par nom (de fruit / légume ou de vendeur) en tenant compte de leur lieu d’habitation. Les membres peuvent aussi proposer une offre pour l’achat des denrées proposées sous la forme d’un prix ou d’une quantité d’autres denrées (échange). Le site devra également permettre aux membres d’être informés en continu par le biais d’alertes personnalisées (mail ou autre) de l’apparition de denrées dont ils ont besoin.
Web’Design, une PME qui édite des logiciels Web, répond à cet appel d’offre. Si le logiciel que propose cette PME est convaincant, elle gagnera en visibilité et en crédibilité.

## Features

Pour démontrer l’intérêt du projet, Web’Design souhaite mettre en ligne un site Web dont les fonctionnalités principales seraient :
- L’inscription et l’authenti,cation d’un membre
- La visualisation des fruits et légumes récemment mis sur le site, spécialement dans la « localité » du membre inscrit
- La visualisation détaillée de l’offre et du profil d’un membre
- La recherche simple (textuelle) et avancée d’un fruit ou d’un légume, par catégories ou variété, mais pas uniquement
- La visualisation des stocks d’une denrée chez un vendeur précis
- La proposition d’offres d’achat ou d’échange de denrées
- L’ajout de nouveaux légumes via une interface dédiée aux membres.
- Le système d’alerte par mail
- Un forum de discussion, prodiguant des conseils d’achat ou de culture.
- Une aide en ligne
- Un back-office

L'inscription sur le site est entièrement gratuite à condition d’accepter les conditions d’utilisation et de respecter la charte du site. Le site doit être suffisamment attractif pour encourager les clients non inscrits à devenir membres et à ajouter de nouveaux objets.

## What can I do as an user

Un membre inscrit pourra également:
- Gérer ses denrées (leur disponibilité, leur prix, leur description, etc.)
- Gérer ses alertes
- Changer les paramètres de ses données personnelles
- Interagir sur le forum
- Commenter les autres membres ou la qualité de leurs produits
- Proposer une offre d’achat / échange à un autre membre (transaction). La transaction se fait en main propre, car le site a pour vocation de créer du lien localement

## What can I do as an admin

Le back-office devra permettre l’administration des informations du site via une interface WEB. Cette interface doit être simple et intuitive et permettra à l’administrateur :
- D’ajouter, supprimer ou bannir des utilisateurs
- D’ajouter, modi,er ou supprimer des catégories / variétés de fruits ou légumes
- De modérer les commentaires et les messages du forum
- De voir les échanges et transactions en cours, et leur statut
- D’administrer la rubrique d’aide 

Le portail aura accès à une base de données contenant un ensemble d’informations permettant le bon déroulement des acquisitions.

## Database constraints

Afin de constituer cette base de données, on tiendra compte, entre autres, des informations suivantes :
- Chaque membre possède des informations personnelles
- Un membre peut alimenter le site en ajoutant de nouveaux légumes/fruits
- Chaque fruit ou légume doit posséder une dénomination, une description succincte, une ou plusieurs catégories / variétés

## Technology used

Du fait du caractère expérimental du projet (le but est de convaincre l’association de l’utilité du système), l’utilisation de technologies payantes nécessitant l’achat de licences est prohibée. Le directeur technique de Web’Design insiste par ailleurs sur l’utilisation de technologies open source dont PHP et MySql, non seulement gratuites, mais aussi plus Texibles à intégrer.
Si possible, le site devra à terme avoir une vocation internationale. Et pourra offrir la possibilité de payer en ligne.

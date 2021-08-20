#### Le projet 

Je crois que, dès le début, j'ai mélangé tout ce qu'on a vu. J'avoue que j'ai manqué de méthode : j'ai commencé par mes trois vues principales sans penser (ou trop tard) qu'il faudrait afficher les auteurs. En réalité je me suis lancée tête baissée dans cette validation et j'ai manqué de temps pour rendre un projet cohérent. 
Dans l'idéal il aurait fallut une page d'accueil (faite), une page où les informations de la base de donnée seraient affichées et une page CRUD pour supprimer et modifier. 
J'ai commencé à tout faire en même temps sans faire étape par étape, je pense donc j'ai été perdue. 
Il y a quelques bugs que je n'arrive pas à corriger, quand j'essaie d'atteindre la page Auteurs.

##Pour les seeder et les migrations
J'ai créé deux seeder (auteurs et personnages) après les deux migrations (auteurs et personnages).
Dans les migrations j'ai ajouté les tables : Nom, Année de création, Nom de BD affilié, Dessinateur, pour la migration personnage. Et les tables Nom, Année de naissance, nationalité pour la migration auteur.
J'ai créé de fausses informations dans les seeder afin de tester ma base de donnée. 
Pour les clés étrangères, j'en ai mise une dans la table auteur qui doit se lier à la table personnage par le biais du author_id. 
J'ai fais un **php artisan migrate:fresh**
Enfin j'ai ajouté les éléments liés entre eux dans la vue auteurs. 

#### Conclusion
Au début j'étais pas perdue mais quand on a commencé à voir les foreign key je crois que je n'ai pas tout compris. 

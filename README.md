# CHECKPOINT 1
- **CHECKPOINT** - 1 - *Php et base de donné*
- *0000_Checkpoint/20170929_CHECKPOINT_1/20170929_Checkpoint_1*
----
Premier checkpoint à la Wild, basé sur le PHP, la connexion à la base de donné et surtout le CRUD (Create, Read, Update and Delete)

> [WildCodeSchool](https://wildcodeschool.fr/)


# SUJET
----
##### 2017-SEPT-checkpoint-1
Wild Code School Checkpoint 1 - Vendredi 29 Septembre
PHP - 4h

##### Kézako ?

- Un page en html/css
- Le site à été réalisé à l'aide du framework css/js Bootstrap
- Lis bien tout le sujet dans sa globalité, puis chaque étape **attentivement** avant de te lancer dans la réalisation de chacune d'elles.

##### Contenu

- Un dossier *css* comprenant la feuille de style du projet (avec certaine section qui te sont reservés)
- Un dossier *font* dans lequel se trouve la font folkard_.ttf
- Un dossier *vendor* dans lequel se trouve les fichiers du framework bootstrap (tu ne dois pas toucher à ce dossier, juste l'utiliser)
- Un dossier *img* (avec les images :-))
- Un fichier *gitignore* permettant (dans le cas présent) d'ignorer le fichier *.DS_Store* qui est un fichier de conf spécifique aux mac (si tu as d'autre chose à ignorer par git, n'hesite pas à l'utiliser ;-))
- Un dossier *bdd* avec la base de donnée que tu devra utiliser à l'étape 4
- Un fichier *index.html*, template du site
- Un fichier *README.md* (ce que tu es en train de lire en fait)

#### Etape 1
Une fois le dépôt cloné, **crée toi une branche locale sur git portant ton nom**, c'est sur cette dernière que tu travailleras.
Une fois le travail effectué, tu pousseras uniquement cette branche **sur le repository github du checkpoint**

#### Etape 2 - Intégration

- Allez on attaque,
 - Crée une page d'ajout de citations contenant :
   - Un formulaire avec:
     - Un champ pour l'auteur de la citation
     - Un champ pour la citation
     - Un champ pour le chapitre dans lequel la citation est présente
     - Un champ pour la date d'ajout de la citation (en bonus la date sera définie automatiquement lors de la création)
     - Un champ permettant de saisir l'url d'une image (le moment où le personnage prononce la citation dans l'épisode)
 - En bonus, page édition de citation:
   - Formulaire avec les mêmes champs que celui d'ajout mais permettant de mettre à jour une citation

**Une fois le travail réalisé, fait un commit**

#### Etape 3 - La base de donnée

 La base de données devra s'appeler "kaamelott_1_2017" et devra contenir:
   - Une table nommée "citation" contenant
     - Un champs id qui sera la clé unique de la table, ce dernier ne devra jamais être nul, et devra s'incrémenter automatiquement
     - Un champs author de 100 caractères maximum
     - Un champs chapter de 100 caractères maximum
     - Un champs content de 65 535 caractères maximum
     - Un champs date de type date
     - Un champs image de 65 535 caractères maximum  

**Avant de te lancer dans la création de ta base de donnée, execute la commande suivante, cela va réinitialiser l'historique de ton shell mysql**

- ```echo  > ~/.mysql_history```

**Une fois la base de donnée créée, execute la commande suivante dans le terminal, cela va te créer un fichier sql.txt (dans le repertoire ou tu te trouve) que tu mettras également sur Github avec le reste de ton projet:**  
 - ```cat ~/.mysql_history > sql.txt```  

**Une fois le travail réalisé, fait un commit**

#### Etape 4 - PHP - Le CRUD

 - On doit pouvoir:
   - Ajouter une citation
   - Visualiser toutes les citations directement depuis la page d'accueil, avec le design actuel
   - Modifier une citation ciblée (tu peux utiliser les boutons déjà existants pour créer tes liens)
   - Supprimer une citation ciblée  
Il te reste donc à réaliser ce que l'on appelle le CRUD, les actions pour Create, Read, Update, et Delete une/des citation(s).

1. Charge la base de donnée présente dans le dossier bdd
  - Via le terminal, déplace toi dans le dossier bdd, puis execute la commande suivante: `mysql < checkpoint-1-26_09_2017.sql -u your_mysql_username -p`.  
  Grâce à la commande précédente, tu va importer une bdd avec un jeu de donnée à l'intérieur, cela va te pemettre de démarrer plus sereinement la réalisation de ton CRUD. Pour info, la base de donnée se nomme "checkpoint-1-26/09/2017".
2. Etape 2: Visualiser les citations depuis la page d'accueil:
    - Je ne sais pas si tu as fais attention, mais dans le dossier *img* tu as une maquette, le fichier *maquette.png*, le challenge ici va être de récupérer toutes les citations de la base de donnée et de les afficher sur la page d'accueil en respectant la mise en forme de la maquette.
3. Etape 3: Ajouter un citation via le formulaire créé ci-dessus
4. Etape 4: Supprimer une citation via le bouton *delete* situé sous chaque citation
5. Etape 5: Editer un article via le bouton *edit* situé sous chaque citation  

Ton fichier de connexion à la base de données ne devra pas se trouver sur le dépôt (ton mot de pass doit rester personnel ;-)).

**Une fois le travail réalisé, fait un commit**

##### Hint
 - Limite au maximum la redondance de code
 - Google, DuckDuckGo, Qwant... sont tes meilleurs amis
 - Pour tester ton code, tu trouveras ici quelques exemples de citations :-D : [Citation Kaamelott](https://fr.wikiquote.org/wiki/Kaamelott)

##### Bon courage

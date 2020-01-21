# La Bascule

Author: Thomas Dubernet 
Collaborateurs: JohnVy & Demiot

Pour commencer il faut ouvrir un **terminal** dans le dossier ```labasculeBASE\wp-content\themes\theme_labascule```
## Initialiser le projet avec un 1er commit

1. Initialisation de git au sein du projet ```git init```  

2. Ajout de tous les fichiers dans la branche master locale ```git add .```  

3. Premier commit qui sert d'initialisation ```git commit -m "first commit"```

## Connexion au Github

4. Ajout du repository distant ```git remote add origin https://github.com/LaBascule33/theme_labascule```

## Récupération des modifications/mises à jour

5. Observer les dernières updates ```git fetch```  
    6. Si erreur ```git fetch origin```


## Création de la branche de suivi dev *qui est en ligne* et de la branche de travail *qui reste en locale*

7. Création de la branche de suivi **dev** ```git branch --track dev origin/dev```

8. Se positionner sur la branche de suivi **dev** ```git checkout dev```

9. Création de la branche de travail ```git checkout -b branchname```

# Après la première journée de travail...

## Récupération des mises à jours

10. Se positionner sur la branche de suivi **dev** ```git checkout dev```

11. Observer les dernières updates ```git fetch```  
    12. Si erreur ```git fetch origin```

13. Récupérer les dernières mises à jours ```git pull```  
    14. Si erreur ```git pull origin```

## Fusionner les modifications de la branche de suivi *dev* avec la branche de travail *locale*

15. On se posionne sur la branche locale (pour moi ça sera thomas) ```git checkout thomas```

16. On fusionne la branche **dev** sur la branche locale ```git merge dev```

### Attention!!!  risques de conflits


17. On regarde les conflits, on accepte les bons changements et on sauvegarde !

18. On ajoute tous les fichiers modifiés sur la branche locale ```git add .```

19. On commit ```git commit -m "message"```

## Fusionner la branche *locale* avec la branche de suivi *dev*

20. On se positionne sur la branche de suivi ```git checkout dev```

21. On fusionne la branche **locale** (thomas pour moi) avec la branche de suivi **dev** ```git merge thomas```

## On pense aux autres et on met en ligne la mise à jour

22. On pousse la branche de suivi sur le repo ```git push```
    23. Si erreur ```git push origin dev```




**@La Bascule 2019-2020**
**Documentation de l'API SnipURL**

**Pour commencer**
Pour commencer à utiliser l'API SnipURL pour raccourcir les URL, vous devez comprendre les bases de l'authentification, des points de terminaison et des paramètres.

**Serveur**
- URL de base : `https://snipurl.en.gp/en/api/free?url=`
- Point de terminaison : `/free`
- Méthode : `GET`
- Objectif : Générer une nouvelle URL raccourcie

**Paramètres**
- `url` : (Obligatoire) L'URL que vous souhaitez raccourcir. Fournissez-la en tant que chaîne de caractères dans la requête.
- `password` : (Optionnel) Un mot de passe requis pour accéder au lien raccourci. S'il est défini, fournissez-le en tant que chaîne de caractères dans la requête.

**Exemple d'utilisation :**
```https
GET https://snipurl.en.gp/en/api/free?url=example.com&password=myPassword123

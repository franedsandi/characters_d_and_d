# Laravel Vite/Bootstrap 5 preset

***Attention***: run this package on fresh laravel applications

Install the package by running the composer command

```bash
composer require pacificdev/laravel_9_preset
```

## Bootstrap/Sass/Vite Preset

The following command will do the following tasks:

- remove postcss
- install bootstrap 5
- install sass
- update vite config  
- add a default welcome page.

```bash
php artisan preset:ui bootstrap
```

## Laravel Breeze/Bootstrap Authentication Preset

Make sure laravel breeze has been installed and scaffolded using the commands below

```bash
composer require laravel/breeze --dev
php artisan breeze:install
```

Install PacificDev Breeze/Bootstrap Scaffolding

```bash
php artisan preset:ui bootstrap --auth

```

## Compatibility notes

This package has been tested with both laravel 9.x and 10.x versions.
However, from laravel v.10.10 the framework includes a `'type': 'module'` property in the package.json file that was not used on previous versions.

### Up to laravel v10.0

Install the package as described in the documentation above, no issues have been reported.

### From Laravel v.10.10 and up


When you install the package following the documentation above and then run `npm run dev` it returns an error due to a `require('path')` used in the `vite.config.js file`.

> If require('path') is replaced with `import path from 'path'` the dev server will return another error, mentioning the laravel() function being undefined. So, the import statement can be updated or not, it won't fix the issue.

To fix the issue you can:

- remove from the laravel package.json file the `"type": "module"`
- rename the vite.config.js file to `vite.config.cjs`

**please note** this is a temporary solution as in both cases, remove the type:module or renaming the vite config file could trigger other issues. If you face any problem please report it [here](https://github.com/fabiopacificicom/laravel-9-preset/issues)


### To do

Back end:
-una seed per la db con dati reali dei characters, skills, races; (fatto array dei characters, da implementare)
-La page di tutti i personaggi appartenenti a una stessa razza; (GIA FATTO)
-modifica del create e update dei personaggi per aggiungere razza (FATTO) e skills (DA FARE);
-Login(quando l'utente fa log in solo vede i suoi personaggi);
-Magari una search bar per cercare i personaggi del utente;
-Il form Contattaci perché meh perché no? Ci sta 🤣;

Front end:
-tramite API recuperare la lista personaggi + pagina di ogni singolo personaggio.
-Pagina dove si vede la lista personaggi;
-Aggiungere funzione search per trovare i personaggi;
-Pagina dove si può estrarre un personaggio casuale per giocare cliccando un d20;



### things to do
-una seed per la db con dati reali dei characters, skills, races 
-La page di tutti i personaggi appartenenti a una stessa razza
-mod del create e update dei personaggi per aggiungere razza e skills
-Login(quando l'utente fa log in solo vede i suoi personaggi)
-Magari una search bar per cercare i personaggi del utente
-Il Contataci perché meh perché no? Ci sta 🤣



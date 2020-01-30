<?php

define( 'DB_HOST', 'localhost');
define( 'DB_PORT', '3306');
define( 'DB_USER', 'blog');
define( 'DB_PASS', 'blog123');
define( 'DB_BASE', 'blog');


/*Constantes globales
Attribution:
define('CONFIG_DIRECTIVE', 'value');
Accès:
$object = new MyObject(CONFIG_DIRECTIVE);
Avantages:
A une portée mondiale.
Complété automatiquement par la plupart des IDE.
A une convention de dénomination convenue (UPPERCASE_UNDERSCORE_SEPARATED) .
Désavantages:
Les directives ne peuvent pas contenir de tableaux (avant la version 7.0.0).
Notes spéciales:
Ne peut pas être réaffecté.*/
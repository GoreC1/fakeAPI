<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:8889');
define('USER', 'test');
define('PASS', '111-555');
define('DB', 'webis');

include "../engine/db.php";
include "../engine/function.php";
include "../engine/catalog.php";
include "../engine/menu.php";
include "../engine/news.php";

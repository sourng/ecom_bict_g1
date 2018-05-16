<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
/*$route['page'] = 'home/page';
$route['article'] = 'home/article';
$route['search'] = 'home/search';
$route['author'] = 'home/author';
$route['print'] = 'home/print';*/


$route['home.php'] = 'Home';
/*$route['page.php'] = 'home/page';
$route['article.php'] = 'home/article';
$route['search.php'] = 'home/search';
$route['author.php'] = 'home/author';
$route['print.php'] = 'home/print';*/

$route['home.html'] = 'Home';
/*$route['page.html'] = 'home/page';
$route['article.html'] = 'home/article';
$route['search.html'] = 'home/search';
$route['author.html'] = 'home/author';
$route['print.html'] = 'home/print';*/

$route['page.php/(:any)'] = 'home/page/$1';
$route['article.php/(:any)'] = 'home/article/$1';
$route['author.php/(:any)'] = 'home/author/$1';
$route['print.php/(:any)'] = 'home/print/$1';
$route['search.php'] = 'home/search.php';
$route['search.php/(:any)'] = 'home/search/$1';

$route['page.html/(:any)'] = 'home/page/$1';
$route['article.html/(:any)'] = 'home/article/$1';
$route['author.html/(:any)'] = 'home/author/$1';
$route['print.html/(:any)'] = 'home/print/$1';
$route['search.html'] = 'home/search.html';
$route['search.html/(:any)'] = 'home/search/$1';

$route['page/(:any)'] = 'home/page/$1';
$route['article/(:any)'] = 'home/article/$1';
$route['author/(:any)'] = 'home/author/$1';
$route['print/(:any)'] = 'home/print/$1';
$route['search/(:any)'] = 'home/search/$1';
$route['search'] = 'home/search';

/*INSERT*/
$route['insert_view'] = 'insert/insert_view';
$route['404'] = 'home/e404';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


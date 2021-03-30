<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*ROUTE FIRST LOADING PAGE*/
//----------------------------------------------------------------------
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*ROUTE Authorization Module*/
//----------------------------------------------------------------------
$route['auth/login'] = "AuthController/signin";
$route['auth/submit_login']['POST'] = "AuthController/submit_login";
$route['auth/logout'] = "AuthController/signout";
$route['auth/register'] = "AuthController/signup";
$route['auth/submit_signup']['POST'] = "AuthController/submit_signup";
$route['auth/forgot'] = "AuthController/forgot";

/*ROUTE User Module*/
//----------------------------------------------------------------------
$route['user'] = "UserController/manage";
$route['user/manage'] = "UserController/manage";
$route['user/profile'] = "UserController/profile";
$route['user/update/(:num)']['POST'] = "UserController/update/$1";
$route['user/changepass'] = "UserController/changepass";
$route['user/submit_changepass']['POST'] = "UserController/submit_changepass";
// $route['user/edit/(:num)']['POST'] = "UserController/edit_user/$1";
$route['user/edit/(:num)'] = "UserController/edit_user/$1";
$route['user/delete/(:num)'] = "UserController/delete_user/$1";
$route['user/activation/(:num)'] = "UserController/activate_user/$1";

/*ROUTE Materi Module*/
//----------------------------------------------------------------------
$route['materi'] = "MateriController/index";
$route['materi/tambah'] = "MateriController/create";
$route['materi/store']['POST'] = "MateriController/store";
$route['materi/view/(:any)'] = "MateriController/view/$1";

/*ROUTE UNTUK Arabic Module*/
//----------------------------------------------------------------------
$route['arabic'] = "ArabicController/index";
$route['arabic/dashboard'] = "ArabicController/dashboard";
$route['arabic/materi'] = "ArabicController/materi";
$route['arabic/materi/tambah'] = "ArabicController/create";
$route['arabic/materi/store']['POST'] = "ArabicController/store";
$route['arabic/materi/view/(:any)'] = "ArabicController/view/$1";

/*ROUTE UNTUK Soal Essay : Bhs Arab*/
//----------------------------------------------------------------------
$route['arabic/soal'] = "QuestionController/index";
$route['arabic/soal/tambah'] = "QuestionController/create";
$route['arabic/soal/store']['POST'] = "QuestionController/store";
$route['arabic/soal/edit/(:num)'] = "QuestionController/edit/$1";
$route['arabic/soal/update/(:num)'] = "QuestionController/update/$1";
$route['arabic/soal/hapus/(:num)'] = "QuestionController/delete/$1";

/*ROUTE UNTUK Soal PG (Pilihan Ganda) : Bhs Arab*/
//----------------------------------------------------------------------
$route['arabic/pege'] = "PegeController/index";
$route['arabic/pege/tambah'] = "PegeController/create";
$route['arabic/pege/store']['POST'] = "PegeController/store";
$route['arabic/pege/edit/(:num)'] = "PegeController/edit/$1";
$route['arabic/pege/update/(:num)'] = "PegeController/update/$1";
$route['arabic/pege/hapus/(:num)'] = "PegeController/delete/$1";

/*ROUTE UNTUK Soal Quiz Essay : Bhs Arab*/
//----------------------------------------------------------------------
$route['arabic/quiz'] = "QuizController/index";
$route['arabic/quiz/tambah'] = "QuizController/create";
$route['arabic/quiz/store']['POST'] = 'QuizController/store';
$route['arabic/quiz/edit/(:num)'] = "QuizController/edit/$1";
$route['arabic/quiz/update/(:num)']['PUT'] = 'QuizController/update/$1';
// $route['arabic/quiz/delete/(:num)']['DELETE'] = 'QuizController/destroy/$1';
$route['arabic/quiz/delete/(:num)'] = 'QuizController/destroy/$1';
$route['arabic/quiz/akses/(:any)'] = "QuizController/akses/$1";

$route['arabic/quiz/submit']['POST'] = 'QuizController/submit';
$route['arabic/quiz/do']['POST'] = "QuizController/do";
// $route['arabic/quiz/submit/(:any)']['POST'] = 'QuizController/submit/$1';
// $route['arabic/quiz/do/(:any)'] = "QuizController/do/$1";

$route['arabic/quiz/redo/(:any)'] = "QuizController/redo/$1";

$route['arabic/quiz/submit_check/(:any)']['POST'] = 'QuizController/submit_check/$1';
// $route['arabic/quiz/check/(:any)']['POST'] = 'QuizController/submit_check/$1';
$route['arabic/quiz/check/(:any)'] = "QuizController/check/$1";
$route['arabic/quiz/view/(:any)'] = "QuizController/view/$1";

/*ROUTE UNTUK Soal Quiz PeGe : Bhs Arab*/
//----------------------------------------------------------------------
$route['arabic/qpege'] = "QpegeController/index";
$route['arabic/qpege/tambah'] = "QpegeController/create";
$route['arabic/qpege/store']['POST'] = 'QpegeController/store';
$route['arabic/qpege/akses/(:any)'] = "QpegeController/akses/$1";
$route['arabic/qpege/do']['POST'] = "QpegeController/do";
$route['arabic/qpege/submit']['POST'] = 'QpegeController/submit';
$route['arabic/qpege/view/(:any)'] = "QpegeController/view/$1";

/*ROUTE UNTUK Migration*/
//----------------------------------------------------------------------
$route['adm_migration'] = "MigrationController/index";
$route['adm_migration/do_migration']['POST'] = "MigrationController/do_migration";
$route['adm_migration/submit_sql']['POST'] = "MigrationController/submit_sql";

/*ROUTE UNTUK Trial*/
//----------------------------------------------------------------------
// $route['quiz/list'] = "Apis/quiz_list";
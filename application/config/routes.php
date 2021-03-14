<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*ROUTE FIRST LOADING PAGE*/
//----------------------------------------------------------------------
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*ROUTE UNTUK Authorization*/
//----------------------------------------------------------------------
$route['auth/login'] = "AuthController/signin";
$route['auth/submit_login']['POST'] = "AuthController/submit_login";
$route['auth/logout'] = "AuthController/signout";

/*ROUTE UNTUK Arabic Module*/
//----------------------------------------------------------------------
$route['arabic'] = "ArabicController/index";
$route['arabic/dashboard'] = "ArabicController/dashboard";

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
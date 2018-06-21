<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$route['default_controller'] = "dashboard";
$route['translate_uri_dashes'] = FALSE;
$route['usuario/(:num)'] = "usuario/index/$1";
$route['produtos/(:num)'] ="produtos/index/$1";
$route['equipamento/(:num)'] ="equipamento/index/$1";
$route['fornecedores/(:num)'] ="fornecedores/index/$1";
$route['manutencao/(:num)'] ="manutencao/index/$1";
$route['compras/(:num)'] ="compras/index/$1";
$route['agendamento/(:num)'] ="agendamento/index/$1";
$route['ativos/(:num)'] ="ativos/index/$1";
$route['baixa/(:num)'] ="baixa/index/$1";
$route['licencas/(:num)'] ="licencas/index/$1";
$route['relatorio/(:num)'] ="relatorio/index/$1";
$route['404_override'] = '';



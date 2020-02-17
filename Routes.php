<?php
use App\Core\Route;
return [
   Route::get('/^api\/users\/bookmarks\/?$/', 'ApiUsers', 'getUsers'),
   Route::get('/^admin\/?$/', 'Admin', 'categories'),
   Route::get('/^admin\/users\/?$/', 'Admin', 'users'),
   Route::get('/^admin\/auctions\/?$/', 'Admin', 'auctions'),
   Route::post('/^api\/feedback\/add\/?$/', 'ApiFeedback', 'add'),
   Route::post('/^api\/users\/delete\/?$/', 'ApiUsers', 'delete'),
   Route::post('/^api\/auction\/delete\/?$/', 'ApiAuction', 'delete'),
   Route::post('/^api\/category\/add\/?$/', 'ApiCategory', 'add'),
   Route::post('/^api\/category\/delete\/?$/', 'ApiCategory', 'delete'),
   Route::post('/^api\/category\/update\/?$/', 'ApiCategory', 'update'),
   Route::post('/^api\/category\/?$/', 'ApiCategory', 'getCategory'),
   Route::get('/^users\/login\/?$/', 'Main', 'getLogin'),
   Route::get('/^users\/activate\/(?<match>.{5,100})$/', 'Main', 'activateAccount'),
   Route::post('/^users\/update\/?$/', 'Users', 'update'),
   Route::get('/^auction\/(?<match>[1-9][0-9]{0,3})$/', 'Auction','show'),
   Route::get('/^auction\/(?<match>[1-9][0-9]{0,3})\/update\/?$/', 'Auction','update'),
   Route::post('/^auction\/(?<match>[1-9][0-9]{0,3})\/update\/?$/', 'Auction','storeUpdate'),
   Route::get('/^users\/(?<match>[1-9][0-9]{0,3})$/', 'Users', 'show'),
   Route::post('/^api\/auction\/addOffer\/?$/', 'ApiOffer', 'addOffer'),
   Route::post('/^auction\/store\/?$/', 'Auction', 'store'),
   Route::get('/^auction\/create\/?$/', 'Auction', 'create'),
   Route::get('/^users\/profile\/?$/', 'Users', 'index'),
   Route::post('/^api\/auction\/search\/?$/', 'ApiAuction', 'searchAuction'),
   Route::get('/^auction\/finished\/?$/', 'Auction', 'getWinAuctionByLoggUser'),
   Route::post('/^users\/login\/?$/', 'Main', 'postLogin'),
   Route::post('/^users\/logout\/?$/', 'Main', 'postLogout'),
   Route::get('/^api\/users\/bookmarks\/clear?$/', 'ApiUsers', 'clearBookmarks'),
   Route::get('/^api\/users\/(?<match>[1-9][0-9]{0,3})$/', 'ApiUsers', 'postUser'),
   Route::get('/^api\/users\/?$/', 'ApiUsers', 'index'),
   Route::get('/^users\/register\/?$/', 'Main','getRegister'),
   Route::post('/^users\/register\/?$/', 'Main','postRegister'),
   Route::get('/^category\/?$/', 'Category','index'),
   Route::get('/^category\/(?<match>[1-9][0-9]{0,3})$/', 'Category','show'),
   Route::get('/^.*$/', 'Category','index')
];
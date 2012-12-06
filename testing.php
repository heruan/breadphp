<?php 
require_once 'index.php';
use Bread\L10n\Models\Locale;
use Bread\L10n\Controllers\Locale as LocaleController;

Locale::purge();
$en = new Locale(['id' => 1, 'code' => 'en-us']);
$it = new Locale(['id' => 2, 'code' => 'it-it']);
$it->save();

$en->localize($en);
$en->name = 'English US';
$en->localize($it);
$en->name = 'Inglese';
$en->save();

$search = Locale::first(['code' => 'en-us']);

var_dump($search->name);
?>
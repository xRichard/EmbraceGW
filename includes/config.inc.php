<?php
//Containing the basic settings of the website

//Page title
$page_title = 'Embrace - Auchindoun EU';


//WoW Armory API
$GLOBALS['wowarmory']['db']['driver'] = 'mysql'; // Dont change. Only mysql supported so far.
$GLOBALS['wowarmory']['db']['hostname'] = '127.0.0.1'; // Hostname of server. 
$GLOBALS['wowarmory']['db']['dbname'] = 'embrace_website'; //Name of your database
$GLOBALS['wowarmory']['db']['username'] = 'embrace'; //Insert your database username
$GLOBALS['wowarmory']['db']['password'] = 'password'; //Insert your database password
// Only use the two below if you have received API keys from Blizzard.
$GLOBALS['wowarmory']['keys']['private'] = ''; // if you have an API key from Blizzard
$GLOBALS['wowarmory']['keys']['public'] = ''; // if you have an API key from Blizzard
?>
<?php
//Home page used to load the multiple pages, and this file will contain the style of the website.

//Adding a test comment here to make sure we can create a pull request to a other repo.

//Loading the multiple incldues
include('includes/config.inc.php');
include('includes/functions.inc.php');
include('includes/wowarmoryapi/BattlenetArmory.class.php');


// Load the class and define the realm and region 
$armory = new BattlenetArmory('EU','Auchindoun'); 

// Use below if emblem doesn't work but you don't get any
// usable information on what the problem is.
// $armory->debug('emblem',TRUE)

// Enable this is if toons with special characters break the API.
$armory->UTF8(TRUE);

// Set the locale. Will default back to region default if not defined. English normally.
// us.battle.net: en_US, es_MX
// eu.battle.net: en_GB, es_ES, fr_FR, ru_RU, de_DE
// kr.battle.net: ko_KR
// tw.battle.net: zh_TW
// battlenet.com.cn: zh_CN
$armory->setLocale('en_GB');

// To reset back to default server locale
$armory->setLocale(FALSE);

// To exclude some fields from characters to load.
$armory->characterExcludeFields(array('achievements','quests')); 
// To reset the exclude list to not exclude anymore
$armory->characterExcludeFields(FALSE); 

// Load all the guild data into an object. This is NOT an array 
$guild = $armory->getGuild('Embrace'); 

//Page loader + the page header/footer
?>
<html>
    <head>
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" type="text/css" href="includes/embrace.css" />
    </head>
    <body>
        <div id="header">
            
        </div>
        <div id="main">
        <?php
            //checking which page is loaded first
            if(!empty($_GET['page']))
                {
                    $pagefile = 'pages/'.$_GET['page'].'.php';
                    if(file_exists($pagefile))
                    {
                        //load file
                        include_once($pagefile);
                    }
                    else
                    {
                        echo 'No such page or file exists';
                    }
                }
            else
                {
                    echo 'Homepage';
                }   
        ?>
        </div>
        <div id="footer">
            footer
        </div>
    </body>
</html>

<?php
/**
* Plugin Name: Bot Detector
* Plugin URI: http://linksku.com/
* Description:  Allows you to detect bots on your blog.
* Version: 2.0
*
* Author: Linksku
* Author URI: http://linksku.com/
* License: GPL
*/

/*********************************************************************
 * File: bot-detect.php
 * Author: Linksku
 * Contact: linksku@hotmail.com
 * Company: LinksKu [http://linksku.com]
 * Date Created: Dec. 2010
 * Project Name: Bot Detector
 * Description:
 *        Detects bots
 * Copyright © 2010 - LinksKu.com
 *********************************************************************/
if (!function_exists('is_bot')){

// You can use this function anywhere in your blog. This function is copyrighted, please give me (Linksku.com) credit if you are using it anywhere else.
function is_bot(){
$crawlers=array('aspseek','abachobot','accoona','acoirobot','adsbot','alexa','alta vista','altavista','ask jeeves','baidu','crawler','croccrawler','dumbot','estyle','exabot','fast-enterprise','fast-webcrawler','francis','geonabot','gigabot','google','heise','heritrix','ibm','iccrawler','idbot','ichiro','lycos','msn','msrbot','majestic-12','metager','ng-search','nutch','omniexplorer','psbot','rambler','seosearch','scooter','scrubby','seekport','sensis','seoma','snappy','steeler','synoo','telekom','turnitinbot','voyager','wisenut','yacy','yahoo');
foreach($crawlers as $c){if(stristr($_SERVER['HTTP_USER_AGENT'],$c))return true;}
return false;
}
}
?>
<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

// define('__OSSN_REMOVE_POWEREDBY_', ossn_route()->com . 'RemovePoweredBy/');



function ossn_remove_poweredby() {
  
  
   ossn_extend_view('js/opensource.socialnetwork', 'js/removepoweredby');
 

}


ossn_register_callback('ossn', 'init', 'ossn_remove_poweredby');

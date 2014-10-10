<?php
/**
 * @package		caruarumetais
 * @subpackage	com_caruarumetais
 * @copyright	Copyright (C) InterSistemas, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$path = $this->baseurl . '/templates/' . $this->template;
$app = JFactory::getApplication();


?>
<!doctype html>
<html lang="<?php echo $this->language ?>" dir="<?php echo $this->direction ?>">
    <head>
    	<jdoc:include type="head" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $path ?>/css/template.css" type="text/css">

    </head>
    <body>

    	<div class="wrapper">
 				<div class="topo">
 					<div class="topo-centro">
                        <div class="logo">
                            <jdoc:include type="modules" name="logo" style="rounded"/>
                        </div>
                         <div class="busca">
                              <jdoc:include type="modules" name="busca" style="rounded"/>
                              <jdoc:include type="modules" name="social" style="rounded"/>
                         </div>
                    </div>
                   
 				</div>
                <div class="menu">
                    <div class="menu_centro">
                        <jdoc:include type="modules" name="menu" style="rounded"/>
                    </div>
                </div>
    	</div>
    </body>
</html>
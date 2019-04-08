<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 04.03.2019
 * Time: 13:04
 */

require_once "vendor/autoload.php";

$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename(__DIR__ . '/frontend/index.html');

$view->assignMultiple([]);

$output = $view->render();
echo $output;
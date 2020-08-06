<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sitepackage2', 'Configuration/TypoScript/', 'Sitepackage V2');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sitepackage2', 'Configuration/TypoScript/Domain1/', 'Sitepackage V2 fuer Domain1');

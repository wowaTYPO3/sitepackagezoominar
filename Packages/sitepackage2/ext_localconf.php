<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
//$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:sitepackage/Configuration/RTE/custom.yaml';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:sitepackage2/Configuration/TSconfig/Page.tsconfig"');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:sitepackage2/Configuration/TSconfig/BackendLayouts.tsconfig"');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('@import "EXT:sitepackage2/Configuration/TSconfig/User.tsconfig"');

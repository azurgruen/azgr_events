<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Azurgruen.AzgrEvents',
            'Events',
            [
                'Event' => 'list, tease'
            ],
            // non-cacheable actions
            [
                'Event' => ''
            ]
        );
        
        // register hook
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \Azurgruen\AzgrEvents\Hooks\ProcessDatamapHook::class;
        
        

    },
    $_EXTKEY
);

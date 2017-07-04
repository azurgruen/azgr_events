<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class AzgrEventsWizicon {

        /**
         * Processing the wizard items array
         *
         * @param array $wizardItems The wizard items
         * @return array Modified array with wizard items
         */
        function proc($wizardItems)     {
                $wizardItems['plugins_tx_azgrevents_events'] = array(
                        'icon' => ExtensionManagementUtility::extRelPath('azgr_events') . 'Resources/Public/Icons/wizard.png',
                        //'title' => $GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xlf:pierror_wizard_title'),
                        //'description' => $GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xlf:pierror_wizard_description'),
                        'title' => 'Veranstaltungen',
                        'description' => 'Liste von Veranstaltungen',
                        'params' => '&defVals[tt_content][CType]=list&&defVals[tt_content][list_type]=azgrevents_events'
                );
                return $wizardItems;
        }
}

?>
<?php
namespace Azurgruen\AzgrEvents\Hooks;

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

/**
 * Process field data before saving to database
 */
class ProcessDatamapHook {
	
	public function processDatamap_preProcessFieldArray( array &$fieldArray, $table, $id, \TYPO3\CMS\Core\DataHandling\DataHandler &$pObj ) {
		if ($table === 'tx_azgrevents_domain_model_event') {
			$this->setLatLng($fieldArray);
		}
	}
	
	/**
     * Set lat/lng
     *
     * @return void
     */
    public function setLatLng(array &$fieldArray)
    {
	    if (
	    	!empty($fieldArray['street']) &&
	    	!empty($fieldArray['street_number']) &&
			!empty($fieldArray['zip']) &&
			!empty($fieldArray['city'])
	    ) {
		    $location = $this->getLocationData(
				$fieldArray['street'],
				$fieldArray['street_number'],
				$fieldArray['zip'],
				$fieldArray['city']
			);
			$fieldArray['lat'] = $location['results'][0]['geometry']['location']['lat'];
			$fieldArray['lng'] = $location['results'][0]['geometry']['location']['lng'];
		}
    }
	
	/**
     * Returns location data
     *
     * @return array $location
     */
    public function getLocationData($street, $streetNumber, $zip, $city)
    {
	    $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=%s&key=%s';
	    $key = $this->getApiKey();
	    //$key = 'AIzaSyA7-Nez1mY_mz1x9QRpnQtnrayYrY5Jtlk';
	    $address = urlencode($street.' '.$streetNumber.', '.$zip.' '.$city);
		$url = sprintf($url, $address, $key);
		$result = file_get_contents($url);
		$location = json_decode($result, true);
	    //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($location);
        return $location;
    }
    
    /**
     * Get api key from typoscript
     *
     * @return string $apikey
     */
    public function getApiKey()
    {
	   $objectManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$ConfigurationManagerInterface = $objectManager->get('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManagerInterface');
		$settings = $ConfigurationManagerInterface->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
		$apikey = ($settings['plugin.']['tx_azgrevents_events.']['settings.']['apikey']);
		if (!$apikey) $apikey = '';
        return $apikey;
    }
	
}
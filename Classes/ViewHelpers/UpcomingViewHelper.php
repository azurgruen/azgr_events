<?php

namespace Azurgruen\AzgrEvents\ViewHelpers;

use \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;


class UpcomingViewHelper extends AbstractViewHelper {
	
	/**
     * eventRepository
     *
     * @var \Azurgruen\AzgrEvents\Domain\Repository\EventRepository
     * @inject
     */
    protected $eventRepository = null;
        	
	/**
	* Get Events
	*
	* @param int $limit
	*/
	public function render($limit = 3)
	{
		$result = $this->eventRepository->findUpcoming($limit);
		return $result;
	}
	
}
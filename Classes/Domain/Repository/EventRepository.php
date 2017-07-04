<?php
namespace Azurgruen\AzgrEvents\Domain\Repository;

use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/***
 *
 * This file is part of the "Events" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Bernhard Schütz <schuetz@azurgruen.de>, azurgruen // code + design
 *
 ***/

/**
 * The repository for Events
 */
class EventRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
	
	
	/**
     * find all events
     * 
     * @return TYPO3\CMS\Extbase\Persistence\Generic\QueryResult
     */
	public function find()
	{
		$query = $this->createQuery();
		$querySettings = $query->getQuerySettings();
		$querySettings->setRespectStoragePage(false);
		$querySettings->setRespectSysLanguage(true);
		//DebuggerUtility::var_dump($query->getQuerySettings());
		$query->setOrderings(['date_1' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
		
		return $query->execute();
	}
	
	/**
     * find upcoming events
     * @param int $limit
     * @return TYPO3\CMS\Extbase\Persistence\Generic\QueryResult
     */
	public function findUpcoming($limit = 3)
	{
		$query = $this->createQuery();
		$querySettings = $query->getQuerySettings();
		$querySettings->setRespectStoragePage(false);
		$querySettings->setRespectSysLanguage(true);
		//DebuggerUtility::var_dump($query->getQuerySettings());
		$date = new \DateTime('now');
		//$today = $date->format('Y-m-d H:i:s');
		$today = $date->getTimestamp();
		$query->matching(
			$query->logicalOr(
				$query->greaterThanOrEqual('date_1', $today),
				$query->greaterThanOrEqual('date_2', $today),
				$query->greaterThanOrEqual('date_3', $today),
				$query->greaterThanOrEqual('date_4', $today),
				$query->greaterThanOrEqual('date_5', $today),
				$query->greaterThanOrEqual('date_6', $today),
				$query->greaterThanOrEqual('date_7', $today),
				$query->greaterThanOrEqual('date_8', $today),
				$query->greaterThanOrEqual('date_9', $today),
				$query->greaterThanOrEqual('date_10', $today),
				$query->greaterThanOrEqual('date_11', $today),
				$query->greaterThanOrEqual('date_12', $today),
				$query->greaterThanOrEqual('date_13', $today),
				$query->greaterThanOrEqual('date_14', $today),
				$query->greaterThanOrEqual('date_15', $today),
				$query->greaterThanOrEqual('date_16', $today),
				$query->greaterThanOrEqual('date_17', $today),
				$query->greaterThanOrEqual('date_18', $today),
				$query->greaterThanOrEqual('date_19', $today),
				$query->greaterThanOrEqual('date_20', $today)
			)
		);
		$query
		->setOrderings(['date_1' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING])
		->setLimit($limit);
		
		return $query->execute();
	}

}

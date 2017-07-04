<?php
namespace Azurgruen\AzgrEvents\Controller;

/***
 *
 * This file is part of the "Events" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Bernhard Schütz <schuetz@azurgruen.de>, azurgruen
 *
 ***/

/**
 * EventController
 */
class EventController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * eventRepository
     *
     * @var \Azurgruen\AzgrEvents\Domain\Repository\EventRepository
     * @inject
     */
    protected $eventRepository = null;
    
    /**
     * @param \Azurgruen\AzgrEvents\Domain\Model\Event 
     * @return array
     */
    protected function getDatesAndTickets($event)
    {
	    $countDates = $event->getCountDates();
        $countTickets = $event->getCountTickets();
        for ($i = 1; $i <= $countDates; $i++) {
	        $event->dates[] = $event->getDate($i);
	        //$event->dates[] = $event->getDate($i)->setTimeZone(new \DateTimeZone('Europe/Berlin'));
        }
        for ($i = 1; $i <= $countTickets; $i++) {
	        $event->tickets[] = $event->getTicket($i);
        }
        $sortedTickets = $event->tickets;
        usort($sortedTickets, function($a, $b) {
			return $a['price'] - $b['price'];
		});
        $event->firstDate = $event->dates[0];
        $event->lastDate = $event->dates[$countDates-1];
        $event->ticketsFrom = $sortedTickets[0]['price'];
        $event->ticketsTo = $sortedTickets[$countTickets-1]['price'];
        return $event;
    }
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        //$events = $this->eventRepository->findAll();
        $events = $this->eventRepository->find();
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(get_class_methods($this->eventRepository));
        foreach ($events as $event) {
	        $this->getDatesAndTickets($event);
        }
        $this->view->assign('events', $events);
    }
    
    /**
     * action tease
     *
     * @return void
     */
    public function teaseAction()
    {
        $events = $this->eventRepository->findUpcoming();
        foreach ($events as $event) {
	        $this->getDatesAndTickets($event);
        }
        $this->view->assign('events', $events);
    }
}

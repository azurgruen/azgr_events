<?php
namespace Azurgruen\AzgrEvents\Domain\Model;

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
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * eventtype
     *
     * @var \Azurgruen\AzgrEvents\Domain\Model\Eventtype
     */
    protected $eventtype = null;
    
    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * location
     *
     * @var string
     */
    protected $location = '';
    
    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * streetNumber
     *
     * @var string
     */
    protected $streetNumber = '';

    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';

    /**
     * city
     *
     * @var string
     */
    protected $city = '';

    /**
     * will be populated automatically
     *
     * @var float
     */
    protected $lat = 0.000000;

    /**
     * will be populated automatically
     *
     * @var float
     */
    protected $lng = 0.000000;

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $images = null;
    
    /**
     * countDates
     *
     * @var int
     */
    protected $countDates = 0;
    
    /**
     * dates
     *
     * @var array
     * @cascade remove
     */
    public $dates = [];
    
    /**
     * date1
     *
     * @var \DateTime
     */
    protected $date1 = null;
    
    /**
     * date2
     *
     * @var \DateTime
     */
    protected $date2 = null;
    
    /**
     * date3
     *
     * @var \DateTime
     */
    protected $date3 = null;
    
    /**
     * date4
     *
     * @var \DateTime
     */
    protected $date4 = null;
    
    /**
     * date5
     *
     * @var \DateTime
     */
    protected $date5 = null;
    
    /**
     * date6
     *
     * @var \DateTime
     */
    protected $date6 = null;
    
    /**
     * date7
     *
     * @var \DateTime
     */
    protected $date7 = null;
    
    /**
     * date8
     *
     * @var \DateTime
     */
    protected $date8 = null;
    
    /**
     * date9
     *
     * @var \DateTime
     */
    protected $date9 = null;
    
    /**
     * date10
     *
     * @var \DateTime
     */
    protected $date10 = null;
    
    /**
     * date11
     *
     * @var \DateTime
     */
    protected $date11 = null;
    
    /**
     * date12
     *
     * @var \DateTime
     */
    protected $date12 = null;
    
    /**
     * date13
     *
     * @var \DateTime
     */
    protected $date13 = null;
    
    /**
     * date14
     *
     * @var \DateTime
     */
    protected $date14 = null;
    
    /**
     * date15
     *
     * @var \DateTime
     */
    protected $date15 = null;
    
    /**
     * date16
     *
     * @var \DateTime
     */
    protected $date16 = null;
    
    /**
     * date17
     *
     * @var \DateTime
     */
    protected $date17 = null;
    
    /**
     * date18
     *
     * @var \DateTime
     */
    protected $date18 = null;
    
    /**
     * date19
     *
     * @var \DateTime
     */
    protected $date19 = null;
    
    /**
     * date20
     *
     * @var \DateTime
     */
    protected $date20 = null;
    
    /**
     * countTickets
     *
     * @var int
     */
    protected $countTickets = 0;
    
    /**
     * currency
     *
     * @var string
     */
    protected $currency = 'EUR';
    
    /**
     * tickets
     *
     * @var array
     * @cascade remove
     */
    public $tickets = [];
    
    /**
     * priceTicket1
     *
     * @var float
     */
    protected $priceTicket1 = 0.0;

    /**
     * priceTicket2
     *
     * @var float
     */
    protected $priceTicket2 = 0.0;
    
    /**
     * priceTicket3
     *
     * @var float
     */
    protected $priceTicket3 = 0.0;
    
    /**
     * priceTicket4
     *
     * @var float
     */
    protected $priceTicket4 = 0.0;
    
    /**
     * priceTicket5
     *
     * @var float
     */
    protected $priceTicket5 = 0.0;
    
    /**
     * priceTicket6
     *
     * @var float
     */
    protected $priceTicket6 = 0.0;
    
    /**
     * priceTicket7
     *
     * @var float
     */
    protected $priceTicket7 = 0.0;
    
    /**
     * priceTicket8
     *
     * @var float
     */
    protected $priceTicket8 = 0.0;
    
    /**
     * priceTicket9
     *
     * @var float
     */
    protected $priceTicket9 = 0.0;
    
    /**
     * labelTicket1
     *
     * @var string
     */
    protected $labelTicket1 = '';
    
    /**
     * labelTicket2
     *
     * @var string
     */
    protected $labelTicket2 = '';
    
    /**
     * labelTicket3
     *
     * @var string
     */
    protected $labelTicket3 = '';
    
    /**
     * labelTicket4
     *
     * @var string
     */
    protected $labelTicket4 = '';
    
    /**
     * labelTicket5
     *
     * @var string
     */
    protected $labelTicket5 = '';
    
    /**
     * labelTicket6
     *
     * @var string
     */
    protected $labelTicket6 = '';
    
    /**
     * labelTicket7
     *
     * @var string
     */
    protected $labelTicket7 = '';
    
    /**
     * labelTicket8
     *
     * @var string
     */
    protected $labelTicket8 = '';
    
    /**
     * labelTicket9
     *
     * @var string
     */
    protected $labelTicket9 = '';

    /**
     * ticketurl
     *
     * @var string
     */
    protected $ticketurl = '';
    
    /**
     * misc
     *
     * @var string
     */
    protected $misc = '';

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
        //$this->labelRooms->add('dasd');
    }
    
    /**
     * Returns infos for one ticket
     *
     * @return array $ticket
     */
    public function getTicket($i = 0)
    {
	    $label = 'labelTicket'.$i;
	    $price = 'priceTicket'.$i;
        return ['label' => $this->$label, 'price' => $this->$price];
    }
    
    /**
     * Returns infos for one date
     *
     * @return array $date
     */
    public function getDate($i = 0)
    {
	    $date = 'date'.$i;
        return $this->$date;
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the eventtype
     *
     * @return \Azurgruen\AzgrEvents\Domain\Model\Eventtype
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the streetNumber
     *
     * @return string $streetNumber
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Sets the streetNumber
     *
     * @param string $streetNumber
     * @return void
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Returns the lat
     *
     * @return float $lat
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Sets the lat
     *
     * @param float $lat
     * @return void
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * Returns the lng
     *
     * @return float $lng
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Sets the lng
     *
     * @param float $lng
     * @return void
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    
    /**
     * Returns the countDates
     *
     * @return float $countDates
     */
    public function getCountDates()
    {
        return $this->countDates;
    }
    
    /**
     * Sets the countDates
     *
     * @param float $countDates
     * @return void
     */
    public function setCountDates()
    {
        $this->countRooms = $countRooms;
    }
    
    /**
     * Returns the countTickets
     *
     * @return float $countTickets
     */
    public function getCountTickets()
    {
        return $this->countTickets;
    }
    
    /**
     * Sets the countTickets
     *
     * @param float $countTickets
     * @return void
     */
    public function setCountTickets()
    {
        $this->countTickets = $countTickets;
    }
    
    /**
     * Returns the currency
     *
     * @return string $currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    
    /**
     * Sets the currency
     *
     * @param string $currency
     * @return void
     */
    public function setCurrency()
    {
        $this->currency = $currency;
    }    

    /**
     * Returns the ticketurl
     *
     * @return string $ticketurl
     */
    public function getTicketurl()
    {
        return $this->ticketurl;
    }

    /**
     * Sets the ticketurl
     *
     * @param string $ticketurl
     * @return void
     */
    public function setTicketurl($ticketurl)
    {
        $this->ticketurl = $ticketurl;
    }

    /**
     * Returns the misc
     *
     * @return string $misc
     */
    public function getMisc()
    {
        return $this->misc;
    }

    /**
     * Sets the misc
     *
     * @param string $misc
     * @return void
     */
    public function setMisc($misc)
    {
        $this->misc = $misc;
    }
}

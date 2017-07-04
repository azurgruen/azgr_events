<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event',
        'label' => 'name',
        'default_sortby' => 'ORDER BY name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => 1,
		'versioningWS' => 2,
        'versioning_followPages' => true,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
        'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'eventtype,name,street,street_number,zip,city',
        'iconfile' => 'EXT:azgr_events/Resources/Public/Icons/event.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, eventtype, name, street, street_number, zip, city, lat, lng',
    ],
    'palettes' => [
	    'name' => [
		    'showitem' => 'eventtype, name'
	    ],
	    'location' => [
        	'showitem' => 'location, --linebreak--, street, street_number, --linebreak--, zip, city'
        ],
	    'coords' => [
        	'showitem' => 'lat, lng'
        ],
        'dates' => [
        	'showitem' => 
        		'date_1, --linebreak--,
        		date_2, --linebreak--,
        		date_3, --linebreak--,
        		date_4, --linebreak--,
        		date_5, --linebreak--,
        		date_6, --linebreak--,
        		date_7, --linebreak--,
        		date_8, --linebreak--,
        		date_9, --linebreak--'
        ],
        'tickets' => [
        	'showitem' => 
        		'label_ticket_1, price_ticket_1, --linebreak--,
        		label_ticket_2, price_ticket_2, --linebreak--,
        		label_ticket_3, price_ticket_3, --linebreak--,
        		label_ticket_4, price_ticket_4, --linebreak--,
        		label_ticket_5, price_ticket_5, --linebreak--,
        		label_ticket_6, price_ticket_6, --linebreak--,
        		label_ticket_7, price_ticket_7, --linebreak--,
        		label_ticket_8, price_ticket_8, --linebreak--,
        		label_ticket_9, price_ticket_9, --linebreak--'
        ]
    ],
    'types' => [
        '1' => [
        	'showitem' => 
	        	'sys_language_uid, l10n_parent, l10n_diffsource, hidden, 
	        	--div--;LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.location,
	        	--palette--;Event;name,
	        	--palette--;LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:sectionlabel.address;location, 
	        	--palette--;LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:sectionlabel.coordinates;coords,
	        	images, 
	        	--div--;LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:sectionlabel.dates, count_dates,
	        	--palette--;Dates;dates,
	        	--div--;LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:sectionlabel.tickets, count_tickets, currency, ticketurl,
	        	--palette--;Tickets;tickets,
	        	--div--;LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:sectionlabel.misc, misc,
	        	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages'
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_azgrevents_domain_model_event',
                'foreign_table_where' => 'AND tx_azgrevents_domain_model_event.pid=###CURRENT_PID### AND tx_azgrevents_domain_model_event.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        
        'eventtype' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.eventtype',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_azgrevents_domain_model_eventtype',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	        
	    ],
	    'name' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'location' => [
	        'exclude' => 0,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.location',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'street' => [
	        'exclude' => 0,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'street_number' => [
	        'exclude' => 0,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.street_number',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'zip' => [
	        'exclude' => 0,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'city' => [
	        'exclude' => 0,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'lat' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.lat',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'readOnly' => true
			]
	        
	    ],
	    'lng' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.lng',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'readOnly' => true
			]
	        
	    ],
	    'images' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.images',
	        'config' => 
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'images',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 10
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),

	    ],
		'count_dates' => [
	        'exclude' => 0,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.count_dates',
	        'config' => [
			    'type' => 'select',
			    //'default' => 1,
			    //'size' => 10,
			    //'eval' => 'int',
			    'items' => [
					['1', 1],
					['2', 2],
					['3', 3],
					['4', 4],
					['5', 5],
					['6', 6],
					['7', 7],
					['8', 8],
					['9', 9],
					['10', 10],
					['11', 11],
					['12', 12],
					['13', 13],
					['14', 14],
					['15', 15],
					['16', 16],
					['17', 17],
					['18', 18],
					['19', 19],
					['20', 20]
				]
			]
	    ],
	    'date_1' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
			'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
/*
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
*/
            ],
	        
	    ],
	    'date_2' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:1',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_3' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:2',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_4' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:3',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_5' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:4',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_6' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:5',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_7' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:6',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_8' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:7',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_9' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:8',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_10' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:9',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_11' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:10',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_12' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:11',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_13' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:12',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_14' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:13',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_15' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:14',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_16' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:15',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_17' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:16',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_18' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:17',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_19' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:18',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'date_20' => [
	        'exclude' => 1,
	        'l10n_mode' => 'exclude',
	        'displayCond' => 'FIELD:count_dates:>:19',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.date',
	        'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'ticketurl' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.ticketurl',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'currency' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.currency',
	        'config' => [
			    'type' => 'input',
			    'size' => 5,
			    'eval' => 'trim'
			],
	        
	    ],
	    'count_tickets' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.count_tickets',
	        'config' => [
			    'type' => 'select',
			    //'default' => 1,
			    //'size' => 10,
			    //'eval' => 'int',
			    'items' => [
					['1', 1],
					['2', 2],
					['3', 3],
					['4', 4],
					['5', 5],
					['6', 6],
					['7', 7],
					['8', 8],
					['9', 9]
				]
			]
	    ],
	    'label_ticket_1' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_1' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_2' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:1',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_2' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:1',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_3' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:2',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_3' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:2',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_4' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:3',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_4' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:3',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_5' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:4',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_5' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:4',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_6' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:5',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_6' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:5',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_7' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:6',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_7' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:6',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_8' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:7',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_8' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:7',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_ticket_9' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:8',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.label_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'price_ticket_9' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'displayCond' => 'FIELD:count_tickets:>:8',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.price_ticket',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'misc' => [
	        'exclude' => 0,
	        'l10n_mode' => 'mergeIfNotBlank',
	        'label' => 'LLL:EXT:azgr_events/Resources/Private/Language/locallang_db.xlf:tx_azgrevents_domain_model_event.misc',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	        
	    ],
        
    ],
];

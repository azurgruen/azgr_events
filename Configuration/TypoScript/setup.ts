
plugin.tx_azgrevents_events {
	view {
		templateRootPaths.0 = EXT:azgr_events/Resources/Private/Templates/
		templateRootPaths.1 = {$plugin.tx_azgrevents_events.view.templateRootPath}
		partialRootPaths.0 = EXT:azgr_events/Resources/Private/Partials/
		partialRootPaths.1 = {$plugin.tx_azgrevents_events.view.partialRootPath}
		layoutRootPaths.0 = EXT:azgr_events/Resources/Private/Layouts/
		layoutRootPaths.1 = {$plugin.tx_azgrevents_events.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_azgrevents_events.persistence.storagePid}
		#recursive = 1
	}
	features {
		#skipDefaultArguments = 1
	}
	mvc {
		#callDefaultActionIfActionCantBeResolved = 1
	}
	settings {
		apikey = {$plugin.tx_azgrevents_events.settings.apikey}
		includejQuery = {$plugin.tx_azgrevents_events.settings.includejQuery}
	}
	_LOCAL_LANG {
		default {
			dateFormat = %d.%m.%y
			dateFormatLong = <span class="weekday">%a</span> %d. %B %Y - %H:%M
			label {
				ticketButton = Ticket kaufen
				ticketButtonShort = Tickets
				location = Location
				dates = Daten
				tickets = Tickets
			}
		}
	}
}

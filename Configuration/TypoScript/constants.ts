
plugin.tx_azgrevents_events {
  view {
    # cat=plugin.tx_azgrevents_events/file; type=string; label=Path to template root (FE)
    templateRootPath =
    # cat=plugin.tx_azgrevents_events/file; type=string; label=Path to template partials (FE)
    partialRootPath =
    # cat=plugin.tx_azgrevents_events/file; type=string; label=Path to template layouts (FE)
    layoutRootPath =
  }
  persistence {
    # cat=plugin.tx_azgrevents_events//a; type=string; label=Default storage PID
    storagePid =
  }
  settings {
	# cat=plugin.tx_azgrevents_events//a; type=string; label=Google Maps API-Key
	apikey =
  }
}

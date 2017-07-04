#
# Table structure for table 'tx_azgrevents_domain_model_event'
#
CREATE TABLE tx_azgrevents_domain_model_event (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	eventtype int(11) unsigned DEFAULT '0',
	name varchar(255) DEFAULT '' NOT NULL,
	location varchar(255) DEFAULT '' NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	street_number varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	lat double(11,6) DEFAULT '0.000000' NOT NULL,
	lng double(11,6) DEFAULT '0.000000' NOT NULL,
	images int(11) unsigned DEFAULT '0' NOT NULL,
	count_dates int(11) DEFAULT '1' NOT NULL,
	date_1 int(11) DEFAULT '0' NOT NULL,
	date_2 int(11) DEFAULT '0' NOT NULL,
	date_3 int(11) DEFAULT '0' NOT NULL,
	date_4 int(11) DEFAULT '0' NOT NULL,
	date_5 int(11) DEFAULT '0' NOT NULL,
	date_6 int(11) DEFAULT '0' NOT NULL,
	date_7 int(11) DEFAULT '0' NOT NULL,
	date_8 int(11) DEFAULT '0' NOT NULL,
	date_9 int(11) DEFAULT '0' NOT NULL,
	date_10 int(11) DEFAULT '0' NOT NULL,
	date_11 int(11) DEFAULT '0' NOT NULL,
	date_12 int(11) DEFAULT '0' NOT NULL,
	date_13 int(11) DEFAULT '0' NOT NULL,
	date_14 int(11) DEFAULT '0' NOT NULL,
	date_15 int(11) DEFAULT '0' NOT NULL,
	date_16 int(11) DEFAULT '0' NOT NULL,
	date_17 int(11) DEFAULT '0' NOT NULL,
	date_18 int(11) DEFAULT '0' NOT NULL,
	date_19 int(11) DEFAULT '0' NOT NULL,
	date_20 int(11) DEFAULT '0' NOT NULL,
	count_tickets int(11) DEFAULT '1' NOT NULL,
	label_ticket_1 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_2 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_3 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_4 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_5 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_6 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_7 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_8 varchar(255) DEFAULT '' NOT NULL,
	label_ticket_9 varchar(255) DEFAULT '' NOT NULL,
	price_ticket_1 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_2 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_3 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_4 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_5 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_6 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_7 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_8 double(11,2) DEFAULT '0.00' NOT NULL,
	price_ticket_9 double(11,2) DEFAULT '0.00' NOT NULL,
	ticketurl varchar(255) DEFAULT '' NOT NULL,
	currency varchar(255) DEFAULT '' NOT NULL,
	misc text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_state TEXT DEFAULT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_azgrevents_domain_model_eventtype'
#
CREATE TABLE tx_azgrevents_domain_model_eventtype (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	
	name varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_state TEXT DEFAULT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

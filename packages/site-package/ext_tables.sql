#
# Add SQL definition of database tables
#

--
-- Table structure for table 'tx_bootstrappackage_timeline_item'
--
CREATE TABLE tx_bootstrappackage_timeline_item (
    sorting int(11) unsigned DEFAULT '0',
    subheader varchar(255) DEFAULT '' NOT NULL
);

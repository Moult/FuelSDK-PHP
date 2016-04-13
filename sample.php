<?php

require('ET_Client.php');
require('ExactTargetClient.php');
require('DataExtensionColumn.php');

$client = new ExactTargetClient;
var_dump($client->get_all_data_extensions());
/* var_dump($client->get_data_extension('5B2701BD-28AF-4347-8097-06C2E355C433')); */
/* var_dump($client->get_data_extension_fields('5B2701BD-28AF-4347-8097-06C2E355C433')); */
/* var_dump($client->add_data_extension_row('5B2701BD-28AF-4347-8097-06C2E355C433', [ */
/*     'Cust_id' => 'foo', */
/*     'SiteID' => 1, */
/*     'TableID' => 'bar', */
/*     'BookingTime' => date(DATE_ATOM, time()), */
/*     'EmailAddress' => 'foo@gmail.com', */
/*     'SubscriberKey' => 'foobar' */
/* ])); */

<?php

$val = $_GET['selectvalue'];

$framework1 = array('Singapore Tour','Dubai Tour','New York Tour','Europe Tour','Australia Tour','Sri Lanka Tour');
$framework2 = array('Agra Tour','Goa Tour','South India Tour','Jammu Kashmir Tour','Himachal Tour','Gujrat Tour');
$framework3 = array('Jalesh Cruises Mumabai-Goa-Mumbai','Singapore with 2 Nights Dream Cruise','American Explorer with Bahams Cruise');

switch ($val) {
	case 'Air International Pack': foreach ($framework1 as $framvalue) {
		echo "<option> $framvalue </option>";
	}
		break;

		case 'Domestic Pack': foreach ($framework2 as $framvalue) {
		echo "<option> $framvalue </option>";
	}
		break;

		case 'Cruise Pack': foreach ($framework3 as $framvalue) {
		echo "<option> $framvalue </option>";
	}
		break;
		default: echo "No data has been selected";
		break;
}


  ?>
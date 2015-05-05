<?php
function changemonth($month) {
	switch($month) {
		case "01":
        $month = "jan";
        break;
    case "02":
        $month = "feb";
        break;
    case "03":
        $month = "mar";
        break;
	case "04":
        $month = "apr";
        break;
	case "05":
        $month = "may";
        break;
	case "06":
        $month = "jun";
        break;
	case "07":
        $month = "jul";
        break;
	case "08":
        $month = "aug";
        break;
	case "09":
        $month = "sep";
        break;
	case "10":
        $month = "oct";
        break;
	case "11":
        $month = "nov";
        break;
	case "12":
        $month = "dec";
        break;
	}
	return $month;
}
?>
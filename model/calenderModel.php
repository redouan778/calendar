<?php

  function GetAllBirthday(){
  	$db = openDatabaseConnection();
    $sql = "SELECT * FROM birthdays ORDER BY  month , day , year ASC";
    $query = $db->prepare($sql);
  	$query->execute();
  	$db = null;
  	return $query->fetchAll();
  }


// birthday toevoegen
  function createBirthday($data){
   // $person = ($_POST['person']);    MAG NOOIT DIT
   // $day = ($_POST['day']);
   // $month = ($_POST['month']);
   // $year = ($_POST['year']);

   $db = openDatabaseConnection();
   $sql = "INSERT INTO birthdays (person, day, month, year) VALUES(:person, :day, :month, :year)";
    $query = $db->prepare($sql);
      $query->bindParam(':person', $data['person']);
        $query->bindParam(':day', $data['day']);
          $query->bindParam(':month', $data['month']);
            $query->bindParam(':year', $data['year']);
   $query->execute();


   $db = null;
   // lees : https://www.w3schools.com/php/php_mysql_prepared_statements.asp
   // pas op juiste wijze parameter binding toe, lees artikel op w3 schools
 }

// birthday verwijderen

function deleteProgres($id){
  $db = openDatabaseConnection();
  $sql = "DELETE FROM birthdays WHERE id = :id";
  echo $sql;
  $query = $db->prepare($sql);
  $query->execute(array(
    ':id' => $id));
  $db = null;
  return true;
}


function GetOneBirthday($id){
  $db = openDatabaseConnection();
  $sql = "SELECT * FROM birthdays WHERE id = :id";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':id' => $id));
  $db = null;
  return $query->fetch();
}

// birthday updaten

function editBirthday($dataSafe){
  $db = openDatabaseConnection();
  $sql = "UPDATE birthdays SET person = :person, day = :day, month = :month, year = :year WHERE id = :id";
  $query = $db->prepare($sql);
    $query->bindParam(':person', $dataSafe['person']);
      $query->bindParam(':day', $dataSafe['day']);
        $query->bindParam(':month', $dataSafe['month']);
          $query->bindParam(':year', $dataSafe['year']);
            $query->bindParam(':id', $dataSafe['id']);
              $query->execute();
}




?>

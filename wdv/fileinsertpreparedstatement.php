<?PHP

require_once(dbConnect.php);

try {
  $eventName = "wdv341";
  $eventDescription = "Introduces server side coding.";

$sql = "INSERT INTO wdv341_event (event_name, event_description)
VALUES (NULL, :eName, :eDescription );";

echo $sql;

$statement = $conn->prepare($sql);

$statement->bindParam(':eName' "wdv341 Intro php");
$statement->bindParam(':eDescription' "Introduces Server Side PHP");

$statement->execute();
}
catch (PDOException $e){
  echo "Process failed:". $e->getMessage();
}

?>

<?PHP

require_once(dbConnect.php);

$sql = "INSERT INTO wdv341_event (event_name, event_description)
VALUES (NULL,'WDV341 PHP', 'How to Write PHP.');";

echo $sql;

$statement = $conn->prepare($sql);

$statement->execute();
}
catch (PDOException $e){
  echo "Process failed:". $e->getMessage();
}

?>

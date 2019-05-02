<?php
require_once 'KLogger.php';
class Dao {
  
  private $host = "localhost";
  private $db = "impactmembers";
  private $user = "root";
  private $pass = "";
  protected $logger;
  }
  /*public function getUser ($userName) {
    $conn = $this->getConnection();
    return $conn->query("select *  from user where user_name = {$uid}", PDO::FETCH_ASSOC);
  }*/
  function createUser ($firstName, $lastName) {
    $conn = $this->getConnection();
    $sql = "INSERT INTO exec_members (user_first, user_last) VALUES ('$first', '$last');";
    mysqli_query($conn, $sql);
    $q->execute();
  }
  function saveComment ($comment) {
    $this->logger->LogInfo("Saving a comment [{$comment}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into comment (comment, user_id) values (:comment, 1)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":comment", $comment);
    $q->execute();
  }
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
  function createUser ($firstName, $lastName, $email, $position, $classRank) {
    $conn = $this->getConnection();
    $sql = "INSERT INTO exec_members (user_first, user_last, user_email, user_pos, user_rank) VALUES ('$first', '$last', '$email', '$position', '$classRank');";
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

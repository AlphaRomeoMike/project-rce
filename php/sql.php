<?php 
   $host = "localhost";
   $db = 'project';
   $username = 'dev';
   $password = 'password';

   $conn = mysqli_connect($host, $username, $password, $db);

   if ($conn) {
      'Connection created';
   }
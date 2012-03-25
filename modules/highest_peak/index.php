<?php
if (!defined('FLUX_ROOT')) exit;

/*-----------------------------
* Developed By JayPee Mateo
* Server Highest Peak
*-----------------------------*/

//Highest Peak Table
$hp = Flux::config('FluxTables.HighestPeak'); 

$sql = "SELECT num_users,peak_date FROM {$server->loginDatabase}.$hp LIMIT 1";
$sth = $server->connection->getStatement($sql);
$sth->execute();

$hp = $sth->fetchAll();
?>
<?php
	require_once("connect.php");
	$q = $_GET["q"];
	$q = preg_replace("/(<span).*(span>)/", "", $str);
	if($res = $conn->query("SELECT apiname, hyperlink FROM apicrawldata WHERE category='$q'")) {
		foreach ($res as $row) {
			echo "<a  class=\"list-group-item\" href=\"".$row['hyperlink']."\" >" . $row['apiname'] . "</a>\n";
		}
	}
?>
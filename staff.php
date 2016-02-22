<?php
/*
	PHP Modularization and Abstracting Demo
	Copyright (C) 2008 Doug Vanderweide
	
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

//make sure department variable exists and has value
if(!isset($_POST['department']) || $_POST['department'] == '') {
	header('Location: department.php');
	exit;
}
else {
	//escape variable
	$dept = mysql_real_escape_string($_POST['department']);
}

require_once('connect.php');

if(!$rs = mysql_query("SELECT * FROM staff_table WHERE department = $dept")) {
	//redirect on db error
	header('Location: dberror.php');
	exit;
}

define('PAGE_TITLE', 'Where Your Code Appears Is Important');
define('PAGE_DESC', 'It\'s important to call code in the proper order.');
define('PAGE_KEYWORDS', '');

require_once('header.php');
?>
<h1>Staff Listing</h1>
<?php
if(mysql_num_rows($rs) == 0) {
	//no records? report that fact
	echo "<p>Sorry, we couldn't find any staff members for $_POST[department].</p>";
}
else {
	//show all staff members in table
	echo "<table>\n";
	echo "<tr><th>Name</th><th>Job Title</th><th>Extension</th><th>E-mail</th></tr>\n";
	
	while($row = mysql_fetch_array($rs)) {
		echo "<tr>";
		echo "<td>$row[staff_name]</td>";
		echo "<td>$row[staff_title]</td>";
		echo "<td>$row[staff_extension]</td>";
		echo "<td>$row[staff_email]</td>";
		echo "</tr>\n";
	}
	
	echo "</table><br />\n";
}

require_once('footer.php');
?>

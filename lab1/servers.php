<?php

echo "<table border=1>";

echo "<thead>";
echo "<tr>";

echo "<th>fname</th>";

echo "<th>lname</th>";

echo "<th>address</th>";

echo "<th>country</th>";

echo "<th>Gender</th>";

echo "<th>skills</th>";

echo "</tr>";

echo "</thead>";

echo "<tbody>";

echo "<tr>";

echo "<td>" . $_POST['fname'] . "</td>";

echo "<td>" . $_POST['lname'] . "</td>";

echo "<td>" . $_POST['address'] . "</td>";

echo "<td>" . $_POST['country'] . "</td>";

echo "<td>" . $_POST['gender'] . "</td>";


$skills = isset($_POST['skills']) ? (is_array($_POST['skills']) ? implode(", ", $_POST['skills']) : $_POST['skills']) : "None";
echo "<td>" . $skills . "</td>";

echo "</tr>";
echo "</tbody>";

echo "</table>";

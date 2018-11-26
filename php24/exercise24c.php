<?php
define("MYSQLUSER", "php24sql");
define("MYSQLPASS", "hJQV8RTe5t");
define("HOSTNAME", "localhost");
define("MYSQLDB", "test");

// Make connection to database
$connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
if ($connection->connect_error) {
    die('Connect Error: ' . $connection->connect_error);
} else {

    // Set up the query
    $query = "select type_name, title, CONCAT(last_name, ', ', first_name) as full_name from books as b join authors as a on author = a.id join types as t on b.type_id = t.type_id where title LIKE '%Day%' order by type_name DESC, title";

    // Run the query
    $result_obj = '';
    $result_obj = $connection->query($query);

    // Read the results
    // loop through the results, row by row
    // reading each row into an associative array
    while ($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
        // collect the array
        $items[] = $result;
    }
    // print array when done
    foreach ($items as $item) {
        echo $item['type_name'] . ': ' . $item['title'] . ' by ' . $item['full_name'];
        echo '<br />';
    }
}
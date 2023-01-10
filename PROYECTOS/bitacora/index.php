<?php
require_once "./connection/login.php";

# 1: Connect to MySQL
try {

    # 2: Select the database to use
    $conexion = new PDO(
        "mysql:host=$db_hostname;dbname=$db_database",
        $db_username,
        $db_password
    );

    echo "Conected... <br >";
} catch (PDOException $error) {
    #MESSAGE: error
    echo "Sorry we can't find your request <br >" . $error->getMessage();
}

# 3: Build a query string
$statement = $conexion->prepare("SELECT * FROM classics");

# 4: Perform the query
$statement->execute();

# 5: Retrive the result 
$result = $statement->fetch();

if ($result !== false) {
    # code...
    echo "Todo bien, tengo los datos <br><br>";
} else {
    # MESSAGE: error
    echo "Database access failed: <br><br>";
}

# 6: Print them to a web page
while ($result = $statement->fetch()) {

    # Print data
    echo ("<b>Author: </b>" . $result["author"] . "<br>");
    echo ("<b>Title: </b>" . $result["title"] . "<br>");
    echo ("<b>Category: </b>" . $result["type"] . "<br>");
    echo ("<b>Year: </b>" . $result["year"] . "<br>");
    echo ("<b>ISBN: </b>" . $result["ISBN"] . "<br><br>");

}


?>
    <?php
    $db_driver="mysql";
    $host = "localhost";    
    $database = "iteh2lb1var2";
    $dsn = "$db_driver:host=$host; 
    dbname=$database";
    $username = "root";    
    $password = "";
    $options = array(PDO::ATTR_PERSISTENT => true, PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    try { 
        $dbh = new PDO ($dsn, $username, $password, $options);
//        echo "Connected to database<br>"; //$dbh ->query("SET CHARACTER SET utf8");
        } catch (PDOException $e)
         {echo "Error!: " . $e->getMessage() . "<br/>";
          die();
        }

   ?>
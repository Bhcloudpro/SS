//$con = mysqli_init();
//mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
//mysqli_real_connect($conn, "azmysqlsvr01.mysql.database.azure.com", "aduser", "{Uni@2024!!!}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);

$host = 'azmysqlsvr01.mysql.database.azure.com';
$username = 'aduser';
$password = 'Uni@2024!!!';
$db_name = 'your_database';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
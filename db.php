// db.php

class DB {
private $host = 'localhost';
private $username = 'seu_usuario';
private $password = 'sua_senha';
private $database = 'school';
private $conn;

// Conectar ao banco de dados
public function connect() {
$this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

if ($this->conn->connect_error) {
die('Connection failed: ' . $this->conn->connect_error);
}
}

// Desconectar do banco de dados
public function disconnect() {
$this->conn->close();
}

// Obter a conexão
public function getConnection() {
return $this->conn;
}
}
// student_db.php

require_once 'db.php';

class StudentDB {
private $db;

public function __construct() {
$this->db = new DB();
}

// Métodos CRUD para Student
// Implementar create, read, update, delete
}

// grade_db.php

require_once 'db.php';

class GradeDB {
private $db;

public function __construct() {
$this->db = new DB();
}

// Métodos CRUD para Grade
// Implementar create, read, update, delete
}

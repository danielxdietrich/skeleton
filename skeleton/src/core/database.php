<?php
class Database
{
    protected $connection;
    protected $show_errors = TRUE;

    public function __construct($dbhost, $dbuser, $dbpass, $dbname, $charset = 'utf8')
    {
        $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($this->connection->connect_error) {
            $this->error('Nie udało się połączyć z MySQL - ' . $this->connection->connect_error);
        }
        $this->connection->set_charset($charset);
    }

    function __destruct()
    {
        $this->close();
    }

    public function get_connection()
    {
        return $this->connection;
    }

    public function query_fetch_all($query)
    {
        return $this->connection->query($query)->fetch_all() ?? "";
    }

    public function query_fetch_array($query)
    {
        return $this->connection->query($query)->fetch_array() ?? "";
    }

    public function query_fetch_first($query, $default = "")
    {
        return $this->connection->query($query)->fetch_array()[0] ?? $default;
    }

    public function close()
    {
        return $this->connection->close();
    }

    public function error($error)
    {
        if ($this->show_errors) {
            exit($error);
        }
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Tyler
 * Date: 3/13/2015
 * Time: 7:40 PM
 */

class Site {
    /**
     * Configure the database
     * @param $host
     * @param $prefix
     */
    public function dbConfigure($host, $prefix) {
        $this->dbHost = $host;
        $this->tablePrefix = $prefix;
    }

    /**
     * @return string
     */
    public function getTablePrefix()
    {
        return $this->tablePrefix;
    }

    /**
     * @return string
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param string $root
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Database connection function
     * @returns PDO object that connects to the database
     */
    function pdo() {
        // This ensures we only create the PDO object once
        if($this->pdo !== null) {
            return $this->pdo;
        }

        try {
            $this->pdo = new PDO($this->dbHost, $this->dbUser, $this->dbPassword);
        } catch(PDOException $e) {
            // If we can't connect we die!
            die("Unable to select database");
        }

        return $this->pdo;
    }

    private $pdo = null; ///< The PDO object

    private $email = '';        ///< Site owner email address
    private $dbHost = null;     ///< Database host name
    private $tablePrefix = '';  ///< Database table prefix
    private $root = '';         ///< Site root
}
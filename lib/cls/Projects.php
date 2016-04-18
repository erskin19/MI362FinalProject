<?php

/**
 * Manage users in our system.
 */
class Projects extends Table {

    /**
     * Constructor
     * @param $site The Site object
     */
    public function __construct(Site $site) {
        parent::__construct($site, "project");
    }

    /**
     * Get a project based on the id
     * @param $id ID of the project
     * @returns Project object if successful, null otherwise.
     */
    public function get($id) {
        $sql =<<<SQL
SELECT * from $this->tableName
where id = ?
SQL;
        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);
        $statement->execute(array($id));
        if($statement->rowCount() === 0) {
            return null;
        }

        return new Project($statement->fetch(PDO::FETCH_ASSOC));
    }

    public function getAll() {
        $sql =<<<SQL
SELECT * from $this->tableName
SQL;
        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);
        $statement->execute(array());
        $result = array();  // Empty initial array
        foreach($statement as $row) {
            $result[] = new Project($row);
        }

        return $result;
    }
}
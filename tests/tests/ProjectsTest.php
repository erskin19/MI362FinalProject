<?php
/**
 * Created by PhpStorm.
 * User: Tyler
 * Date: 4/14/2016
 * Time: 5:16 PM
 */

/** @file
 * @brief Testing Projects
 * @cond
 * @brief Unit tests for the Projects class
 */

class ProjectsTest extends \PHPUnit_Extensions_Database_TestCase
{
    /**
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        return $this->createDefaultDBConnection(self::$site->pdo(), 'erskin19');
    }

    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__) . '/db/project.xml');
    }

    private static $site;

    public static function setUpBeforeClass() {
        self::$site = new Site();
        $localize  = require 'localize.inc.php';
        if(is_callable($localize)) {
            $localize(self::$site);
        }
    }

    public function test_construct() {
        $projects = new Projects(self::$site);
        $this->assertInstanceOf('Projects', $projects);
    }

    public function test_get() {
        $projects = new Projects(self::$site);

        // Test a valid login based on user ID
        $project = $projects->get(1);
        $this->assertInstanceOf("Project", $project);
        $this->assertEquals("1", $project->getId());
        $this->assertEquals("Test", $project->getName());

        // Test a failed login
        $project = $projects->get(0);
        $this->assertNull($project);
    }
}

/// @endcond
?>
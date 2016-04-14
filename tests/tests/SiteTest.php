<?php
/** @SiteTest
 * @brief Test Site class
 * @cond 
 * @brief Unit tests for the class 
 */
class SiteTest extends \PHPUnit_Framework_TestCase
{
    public function test_localize() {
        $site = new Site();
        $localize = require 'localize.inc.php';
        if(is_callable($localize)) {
            $localize($site);
        }
        $this->assertEquals('', $site->getTablePrefix());
    }

	public function testGetTablePrefix() {
        $site = new Site();
        $site->dbConfigure("foo", "foobar");
		$this->assertEquals("foobar", $site->getTablePrefix());
	}

    public function testGetSetRoot() {
        $site = new Site();
        $site->setRoot("foo");
        $this->assertEquals("foo", $site->getRoot());
    }

    public function testGetSetEmail() {
        $site = new Site();
        $site->setEmail("foo");
        $this->assertEquals("foo", $site->getEmail());
    }
}

/// @endcond
?>

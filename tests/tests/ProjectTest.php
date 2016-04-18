<?php
/**
 * Created by PhpStorm.
 * User: Tyler
 * Date: 4/14/2016
 * Time: 5:23 PM
 */

/** @file
 * @brief Testing Project
 * @brief Unit tests for the class
 */
class ProjectTest extends \PHPUnit_Framework_TestCase
{
    public function test_construct() {
        $row = array('id' => 12,
            'name' => 'foo',
            'description' => 'foo bar',
            'requirements' => 'foobar',
            'completed' => '2016-04-14',
            'cover' => 'placeholder.png'
        );
        $project = new Project($row);
        $this->assertEquals(12, $project->getId());
        $this->assertEquals('foo', $project->getName());
        $this->assertEquals('foo bar', $project->getDesc());
        $this->assertEquals('foobar', $project->getReq());
        $this->assertEquals('2016-04-14', $project->getDate());
        $this->assertEquals('placeholder.png', $project->getCover());
    }
}

/// @endcond
?>
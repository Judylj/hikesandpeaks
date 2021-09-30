<?php
require_once('../functions.php');

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testFormatImageContainerReturnsValidHtmlGivenValidArray() {
//        arrange - sets up the data for the test (data were going to give function and what expect to get back
        $input = ['image'=>'x.jpg','name'=>'name', 'location'=>'area', 'elevation'=>999, 'level'=>3, 'mountain_range'=>'range'];
        $expected = '<div class="image-container">';
        $expected .= '<div class="image-background">';
        $expected .= '<img src="images/x.jpg">';
        $expected .= "</div>";
        $expected .= '<div class="imagetext">';
        $expected .= "<p><span class='text-label'>Name:</span> name</p>";
        $expected .= "<p><span class='text-label'>Location:</span> area</p>";
        $expected .= "<p><span class='text-label'>Elevation:</span> 999</p>";
        $expected .= "<p><span class='text-label'>Difficulty:</span> 3</p>";
        $expected .= "<p><span class='text-label'>Range:</span> range</p>";
        $expected .= "</div>";
        $expected .= "</div>";
//        act - the action - calling the function
        $result = formatImageContainer($input);
//assert - testing what we got back was what expected
        $this->assertEquals($result,$expected);
    }

    public function testFormatImageContainerThrowsErrorGivenEmptyArray() {
//        arrange - sets up the data for the test (data were going to give function and what expect to get back
        $input = [];
        $this->expectException(InvalidArgumentException::class);
//        act - the action - calling the function
        $result = formatImageContainer($input);
//assert - testing what we got back was what expected

    }

    public function testFormatImageContainerThrowsErrorGivenInvalidArgument() {
//        arrange - sets up the data for the test (data were going to give function and what expect to get back
        $input = 3.0;
        $this->expectException(TypeError::class);
//        act - the action - calling the function
        $result = formatImageContainer($input);
//assert - testing what we got back was what expected

    }
}

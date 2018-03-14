<?php

/**
*  Corresponding Class to test Timeline class
*
*  @author Arturo Ramos
*/
class TimelineTest extends PHPUnit_Framework_TestCase
{
    /**
    * Just check if the YourClass has no syntax error
    *
    * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
    * any typo before you even use this library in a real project.
    *
    */
    public function testIsThereAnySyntaxError() {
        $var = new ircsasw\timeline\Timeline;
        $this->assertTrue(is_object($var));
        unset($var);
    }
}

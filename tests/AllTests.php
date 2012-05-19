<?php
if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'HTML_BBCodeParser_AllTests::main');
}

require_once 'PHPUnit/TextUI/TestRunner.php';


require_once 'HTML_BBCodeParserTest.php';


class HTML_BBCodeParser_AllTests
{
    public static function main()
    {

        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('HTML_BBCodeParserTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'HTML_BBCodeParser_AllTests::main') {
    HTML_BBCodeParser_AllTests::main();
}
?>

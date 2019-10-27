<?php

use PHPUnit\Framework\TestCase;
use Src\Components\Widgets;

class WidgetsTest extends TestCase
{
    /**
     * @dataProvider provideWidgetFalse
     */
    public function testWidgetsFalse($total)
    {
        $widgets = new Widgets;
        $this->assertFalse($widgets->getPacks($total));
    }

    public function provideWidgetFalse()
    {
        return array(
            array((int)'abc'),
            array(false),
            array(null),
            array((int)'0'),
            array((int)'-52'),
            array((int)'')
        );
    }
}
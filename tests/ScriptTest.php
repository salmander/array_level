<?php

require_once __DIR__ . '/../script.php';

class ScriptTest extends PHPUnit_Framework_TestCase
{
    public function testArrayLevel2Array()
    {
        $arr1 = [
            "tut",
            "tut2" => [
                "hier1",
                "hier2",
            ],
        ];

        $this->assertEquals(2, arrayLevel($arr1));
    }

    public function testArrayLevel4Array()
    {
        $arr1 = [
            "hier1" => [
                "hier2" => [
                    "hier3" => [
                        "2",
                    ],
                ],
            ],
        ];

        $this->assertEquals(4, arrayLevel($arr1));
    }

    public function testArrayLevel4Array2()
    {
        $arr1 = [
            "1",
            "2",
            "hier1" => [
                "hier2" => [
                    "hier3" => [
                        "2",
                    ],
                ],
            ],
        ];

        $this->assertEquals(4, arrayLevel($arr1));
    }

    public function testArrayLevel6Array()
    {
        $arr1 = [
            "1",
            "2",
            "3" => [
                "hier2" => [
                    "hier3" => [
                        "2",
                    ],
                ],
            ],
            "4",
            "5",
            "6" => [
                "1",
                "2",
                "3",
                "4" => [
                    "1",
                    "2" => [
                        "1",
                        "2" => [
                            "1",
                            "2",
                            "3" => [
                                "1",
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $this->assertEquals(6, arrayLevel($arr1));
    }

}

<?php
use PHPUnit\Framework\TestCase;

class JoshsTest extends TestCase
{

    public function testMaths()
    {
        // Arrange
        $a = 5;
        $b = 10;

        // Act
        $answer = $a + $b;

        // Assert
        $this->assertEquals(15, $answer);
    }

}

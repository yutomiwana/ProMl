<?php
/**
 * Tests for ProMlInsight
 */

use PHPUnit\Framework\TestCase;
use Promlinsight\Promlinsight;

class PromlinsightTest extends TestCase {
    private Promlinsight $instance;

    protected function setUp(): void {
        $this->instance = new Promlinsight(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Promlinsight::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

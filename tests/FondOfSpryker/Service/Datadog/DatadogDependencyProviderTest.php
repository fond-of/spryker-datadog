<?php

namespace FondOfSpryker\Service\Datadog;

use Codeception\Test\Unit;

class DatadogDependencyProviderTest extends Unit
{
    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();
    }

    /**
     * @return void
     */
    public function test(): void
    {
        $this->assertFalse(false);
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture;

use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use PHPUnit\Framework\TestCase;

#[RunTestsInSeparateProcesses]
final class SeparateProcessesTest extends TestCase
{
    public function testFoo(): void
    {
        $this->assertTrue(true);

        exit(0);
    }

    public function testBar(): void
    {
        $this->assertTrue(true);
        $this->assertTrue(true);

        exit(1);
    }
}

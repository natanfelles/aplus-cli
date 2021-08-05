<?php
/*
 * This file is part of Aplus Framework CLI Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\CLI\Streams;

use Framework\CLI\Streams\Stdin;
use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class StdinTest extends TestCase
{
    public function testStream() : void
    {
        /* TODO: Stdin filter is not working!
         // Make a raw-test:
         Stdin::init();
         $input = fgets(STDIN);
         var_dump($input,Stdin::getContents());
         // Note that Stdin::getContents() always is empty.
         */
        \define('STDIN', \STDOUT); // Simulates the STDIN.
        Stdin::init();
        self::assertSame('', Stdin::getContents());
        \fwrite(\STDIN, 'in');
        self::assertSame('in', Stdin::getContents());
        \fwrite(\STDIN, 'bar');
        self::assertSame('inbar', Stdin::getContents());
        Stdin::reset();
        self::assertSame('', Stdin::getContents());
    }
}

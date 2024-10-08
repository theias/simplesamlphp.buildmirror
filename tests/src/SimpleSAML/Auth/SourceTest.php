<?php

declare(strict_types=1);

namespace SimpleSAML\Test\Auth;

use PHPUnit\Framework\Attributes\CoversClass;
use ReflectionClass;
use SimpleSAML\Auth;
use SimpleSAML\Test\Utils\TestAuthSource;
use SimpleSAML\Test\Utils\TestAuthSourceFactory;
use SimpleSAML\TestUtils\ClearStateTestCase;

/**
 * Tests for \SimpleSAML\Auth\Source
 */
#[CoversClass(Auth\Source::class)]
class SourceTest extends ClearStateTestCase
{
    /**
     */
    public function testParseAuthSource(): void
    {
        $class = new ReflectionClass(Auth\Source::class);
        $method = $class->getMethod('parseAuthSource');
        $method->setAccessible(true);

        // test direct instantiation of the auth source object
        $authSource = $method->invokeArgs(null, ['test', [TestAuthSource::class]]);
        $this->assertInstanceOf(TestAuthSource::class, $authSource);

        // test instantiation via an auth source factory
        $authSource = $method->invokeArgs(null, ['test', [TestAuthSourceFactory::class]]);
        $this->assertInstanceOf(TestAuthSource::class, $authSource);
    }
}

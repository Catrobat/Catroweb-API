<?php
/**
 * MediaPackageResponseTest.
 *
 * PHP version 8.1.1
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.3.0
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Tests\Model;

use OpenAPI\Server\Model\MediaPackageResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * MediaPackageResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description MediaPackageResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\MediaPackageResponse
 *
 * @internal
 */
class MediaPackageResponseTest extends TestCase
{
  protected MediaPackageResponse|MockObject $object;

  /**
   * Setup before running any test case.
   */
  public static function setUpBeforeClass(): void
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    $this->object = $this->getMockBuilder(MediaPackageResponse::class)->getMockForAbstractClass();
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void
  {
  }

  /**
   * @group integration
   *
   * @small
   */
  public function testTestClassExists(): void
  {
    $this->assertTrue(class_exists(MediaPackageResponse::class));
    $this->assertInstanceOf(MediaPackageResponse::class, $this->object);
  }

  /**
   * Test attribute "id".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyId(): void
  {
    $this->markTestSkipped('Test for property id not implemented');
  }

  /**
   * Test attribute "name".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyName(): void
  {
    $this->markTestSkipped('Test for property name not implemented');
  }

  /**
   * Test attribute "url".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyUrl(): void
  {
    $this->markTestSkipped('Test for property url not implemented');
  }

  /**
   * Test attribute "categories".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyCategories(): void
  {
    $this->markTestSkipped('Test for property categories not implemented');
  }
}

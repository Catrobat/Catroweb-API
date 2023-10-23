<?php
/**
 * MediaFileResponseTest.
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
 * The version of the OpenAPI document: v1.1.19
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * MediaFileResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description MediaFileResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\MediaFileResponse
 *
 * @internal
 */
class MediaFileResponseTest extends TestCase
{
  protected MediaFileResponse|MockObject $object;

  /**
   * Setup before running any test case.
   */
  public static function setUpBeforeClass(): void {}

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    $this->object = $this->getMockBuilder(MediaFileResponse::class)->getMockForAbstractClass();
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void {}

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void {}

  /**
   * @group integration
   *
   * @small
   */
  public function testTestClassExists(): void
  {
    $this->assertTrue(class_exists(MediaFileResponse::class));
    $this->assertInstanceOf(MediaFileResponse::class, $this->object);
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
   * Test attribute "flavors".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFlavors(): void
  {
    $this->markTestSkipped('Test for property flavors not implemented');
  }

  /**
   * Test attribute "packages".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyPackages(): void
  {
    $this->markTestSkipped('Test for property packages not implemented');
  }

  /**
   * Test attribute "category".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyCategory(): void
  {
    $this->markTestSkipped('Test for property category not implemented');
  }

  /**
   * Test attribute "author".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyAuthor(): void
  {
    $this->markTestSkipped('Test for property author not implemented');
  }

  /**
   * Test attribute "extension".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyExtension(): void
  {
    $this->markTestSkipped('Test for property extension not implemented');
  }

  /**
   * Test attribute "download_url".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyDownloadUrl(): void
  {
    $this->markTestSkipped('Test for property download_url not implemented');
  }

  /**
   * Test attribute "size".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertySize(): void
  {
    $this->markTestSkipped('Test for property size not implemented');
  }

  /**
   * Test attribute "file_type".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFileType(): void
  {
    $this->markTestSkipped('Test for property file_type not implemented');
  }
}

<?php
/**
 * JWTResponseTest.
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
 * The version of the OpenAPI document: v1.4.1
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Tests\Model;

use OpenAPI\Server\Model\JWTResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * JWTResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description JWTResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\JWTResponse
 *
 * @internal
 */
class JWTResponseTest extends TestCase
{
  protected JWTResponse|MockObject $object;

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
    $this->object = $this->getMockBuilder(JWTResponse::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(JWTResponse::class));
    $this->assertInstanceOf(JWTResponse::class, $this->object);
  }

  /**
   * Test attribute "token".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyToken(): void
  {
    $this->markTestSkipped('Test for property token not implemented');
  }

  /**
   * Test attribute "refresh_token".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyRefreshToken(): void
  {
    $this->markTestSkipped('Test for property refresh_token not implemented');
  }
}

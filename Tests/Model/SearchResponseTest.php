<?php
/**
 * SearchResponseTest.
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

use OpenAPI\Server\Model\SearchResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * SearchResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description SearchResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\SearchResponse
 *
 * @internal
 */
class SearchResponseTest extends TestCase
{
  protected SearchResponse|MockObject $object;

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
    $this->object = $this->getMockBuilder(SearchResponse::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(SearchResponse::class));
    $this->assertInstanceOf(SearchResponse::class, $this->object);
  }

  /**
   * Test attribute "projects".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyProjects(): void
  {
    $this->markTestSkipped('Test for property projects not implemented');
  }

  /**
   * Test attribute "projects_total".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyProjectsTotal(): void
  {
    $this->markTestSkipped('Test for property projects_total not implemented');
  }

  /**
   * Test attribute "users".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyUsers(): void
  {
    $this->markTestSkipped('Test for property users not implemented');
  }

  /**
   * Test attribute "users_total".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyUsersTotal(): void
  {
    $this->markTestSkipped('Test for property users_total not implemented');
  }
}

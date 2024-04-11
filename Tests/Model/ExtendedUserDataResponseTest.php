<?php
/**
 * ExtendedUserDataResponseTest.
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

use OpenAPI\Server\Model\ExtendedUserDataResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * ExtendedUserDataResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description ExtendedUserDataResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\ExtendedUserDataResponse
 *
 * @internal
 */
class ExtendedUserDataResponseTest extends TestCase
{
  protected ExtendedUserDataResponse|MockObject $object;

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
    $this->object = $this->getMockBuilder(ExtendedUserDataResponse::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(ExtendedUserDataResponse::class));
    $this->assertInstanceOf(ExtendedUserDataResponse::class, $this->object);
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
   * Test attribute "username".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyUsername(): void
  {
    $this->markTestSkipped('Test for property username not implemented');
  }

  /**
   * Test attribute "picture".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyPicture(): void
  {
    $this->markTestSkipped('Test for property picture not implemented');
  }

  /**
   * Test attribute "about".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyAbout(): void
  {
    $this->markTestSkipped('Test for property about not implemented');
  }

  /**
   * Test attribute "currently_working_on".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyCurrentlyWorkingOn(): void
  {
    $this->markTestSkipped('Test for property currently_working_on not implemented');
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
   * Test attribute "followers".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFollowers(): void
  {
    $this->markTestSkipped('Test for property followers not implemented');
  }

  /**
   * Test attribute "following".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFollowing(): void
  {
    $this->markTestSkipped('Test for property following not implemented');
  }

  /**
   * Test attribute "ranking_score".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyRankingScore(): void
  {
    $this->markTestSkipped('Test for property ranking_score not implemented');
  }

  /**
   * Test attribute "email".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyEmail(): void
  {
    $this->markTestSkipped('Test for property email not implemented');
  }
}

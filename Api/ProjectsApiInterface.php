<?php
/**
 * ProjectsApiInterface.
 *
 * PHP version 8.1.1
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
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
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\ProjectReportRequest;
use OpenAPI\Server\Model\UpdateProjectRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * ProjectsApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface ProjectsApiInterface
{
  /**
   * Sets authentication method PandaAuth.
   *
   * @param string|null $value value of the PandaAuth authentication method
   */
  public function setPandaAuth(?string $value): void;

  /**
   * Operation projectIdCatrobatGet.
   *
   * Download the .catrobat (=zip) file of a project
   *
   * @param string $id              (required)
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectIdCatrobatGet(string $id, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectIdDelete.
   *
   * Delete a project
   *
   * @param string $id              (required)
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectIdDelete(string $id, int &$responseCode, array &$responseHeaders): void;

  /**
   * Operation projectIdGet.
   *
   * Get the information of a project
   *
   * @param string $id              (required)
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectIdGet(string $id, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectIdPut.
   *
   * Update details of a project
   *
   * @param string               $id                     (required)
   * @param UpdateProjectRequest $update_project_request (required)
   * @param string               $accept_language        (optional, default to 'en')
   * @param int                  &$responseCode          The HTTP Response Code
   * @param array                $responseHeaders        Additional HTTP headers to return with the response ()
   */
  public function projectIdPut(string $id, UpdateProjectRequest $update_project_request, string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectIdRecommendationsGet.
   *
   * Get recommended projects related to the specific project
   *
   * @param string $id              (required)
   * @param string $category        * &#x60;similar&#x60; - Get similar projects to the specific project  * &#x60;also_downloaded&#x60; - Get projects that users who downloaded the specific project also downloaded  * &#x60;more_from_user&#x60; - Get more projects from the owner of the specific project (required)
   * @param string $accept_language (optional, default to 'en')
   * @param string $max_version     Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; (optional, default to '')
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectIdRecommendationsGet(string $id, string $category, string $accept_language, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectIdReportPost.
   *
   * Report a project -- StatusCode: 501 - Not yet implemented
   *
   * @param string               $id                     (required)
   * @param ProjectReportRequest $project_report_request (required)
   * @param int                  &$responseCode          The HTTP Response Code
   * @param array                $responseHeaders        Additional HTTP headers to return with the response ()
   */
  public function projectIdReportPost(string $id, ProjectReportRequest $project_report_request, int &$responseCode, array &$responseHeaders): void;

  /**
   * Operation projectsCategoriesGet.
   *
   * Get default number of projects per category (Most downloaded etc.)
   *
   * @param string $max_version     Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param string $accept_language (optional, default to 'en')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsCategoriesGet(string $max_version, string $flavor, string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsExtensionsGet.
   *
   * Get all possible project extensions. Extensions are automatically added to projects based on their bricks.
   *
   * @param string $accept_language (optional, default to 'en')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsExtensionsGet(string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsFeaturedGet.
   *
   * Get the currently featured projects
   *
   * @param string $platform        Indication for which platform the response should be optimized (ios, android) (optional, default to '')
   * @param string $max_version     Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; (optional, default to '')
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsFeaturedGet(string $platform, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsGet.
   *
   * Get projects
   *
   * @param string $category        (required)
   * @param string $accept_language (optional, default to 'en')
   * @param string $max_version     Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; (optional, default to '')
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsGet(string $category, string $accept_language, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsPost.
   *
   * Upload a catrobat project
   *
   * @param string       $checksum        Checksum of the *.catrobat file (required)
   * @param UploadedFile $file            The *.catrobat project file (required)
   * @param string       $accept_language (optional, default to 'en')
   * @param string       $flavor          The flavor of this project (optional, default to 'pocketcode')
   * @param bool         $private         Indicates whether a program should be private (optional, default to false)
   * @param int          &$responseCode   The HTTP Response Code
   * @param array        $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsPost(string $checksum, UploadedFile $file, string $accept_language, string $flavor, bool $private, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsSearchGet.
   *
   * Search for projects associated with a keywords
   *
   * @param string $query           (required)
   * @param string $max_version     Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; (optional, default to '')
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsSearchGet(string $query, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsTagsGet.
   *
   * Get all possible project tags. Some Tags will only be availabe during events.
   *
   * @param string $accept_language (optional, default to 'en')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsTagsGet(string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsUserGet.
   *
   * Get the projects of the logged in user
   *
   * @param string $max_version     Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; (optional, default to '')
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsUserGet(string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null;

  /**
   * Operation projectsUserIdGet.
   *
   * Get the public projects of a given user
   *
   * @param string $id              (required)
   * @param string $max_version     Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; (optional, default to '')
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function projectsUserIdGet(string $id, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null;
}

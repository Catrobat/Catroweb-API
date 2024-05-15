<?php
/**
 * MediaLibraryApiInterface.
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
 * The version of the OpenAPI document: v1.4.3
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

/**
 * MediaLibraryApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface MediaLibraryApiInterface
{
  /**
   * Operation mediaFileIdGet.
   *
   * Get the information of a specific media file
   *
   * @param int    $id              ID of any given media file (required)
   * @param string $attributes      (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function mediaFileIdGet(
    int $id,
    string $attributes,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;

  /**
   * Operation mediaFilesGet.
   *
   * Get *all* content of the media library.
   *
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function mediaFilesGet(
    int $limit,
    int $offset,
    string $attributes,
    string $flavor,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;

  /**
   * Operation mediaFilesSearchGet.
   *
   * Search for mediafiles associated with keywords
   *
   * @param string $query           (required)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param string $flavor          (optional, default to '')
   * @param string $package_name    In which package you want to search (for more fine tuned results) (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function mediaFilesSearchGet(
    string $query,
    int $limit,
    int $offset,
    string $attributes,
    string $flavor,
    string $package_name,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;

  /**
   * Operation mediaPackageNameGet.
   *
   * Get media-library asstes of a named package
   *
   * @param string $name            Name of the package (required)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $attributes      (optional, default to '')
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function mediaPackageNameGet(
    string $name,
    int $limit,
    int $offset,
    string $attributes,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;
}

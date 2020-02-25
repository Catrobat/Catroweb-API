<?php

/**
 * MediaLibraryController
 * PHP version 5.
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
 * The version of the OpenAPI document: v1.0.14
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Controller;

use Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use OpenAPI\Server\Api\MediaLibraryApiInterface;
use OpenAPI\Server\Model\Package;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MediaLibraryController Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class MediaLibraryController extends Controller
{
  /**
   * Operation mediaPackagePackageNameGet.
   *
   * Get media-library asstes of a named package
   *
   * @param Request $request     the Symfony request to handle
   * @param mixed   $packageName
   *
   * @return Response the Symfony response
   */
  public function mediaPackagePackageNameGetAction(Request $request, $packageName)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat)
    {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try
    {
      $packageName = $this->deserialize($packageName, 'string', 'string');
    }
    catch (SerializerRuntimeException $exception)
    {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($packageName, $asserts);
    if ($response instanceof Response)
    {
      return $response;
    }

    try
    {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];
      $result = $handler->mediaPackagePackageNameGet($packageName, $responseCode, $responseHeaders);

      // Find default response message
      $message = 'Valid request';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'Valid request';
                    break;
                case 400:
                    $message = 'NOT OK - BAD Request';
                    break;
                case 404:
                    $message = 'Package name not found';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    }
    catch (Exception $fallthrough)
    {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Returns the handler for this API controller.
   *
   * @return MediaLibraryApiInterface
   */
  public function getApiHandler()
  {
    return $this->apiServer->getApiHandler('mediaLibrary');
  }
}

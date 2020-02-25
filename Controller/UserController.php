<?php

/**
 * UserController
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
use OpenAPI\Server\Api\UserApiInterface;
use OpenAPI\Server\Model\Register;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserController Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class UserController extends Controller
{
  /**
   * Operation userPost.
   *
   * Register a user
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function userPostAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    $inputFormat = $request->headers->has('Content-Type') ? $request->headers->get('Content-Type') : $consumes[0];
    if (!in_array($inputFormat, $consumes, true))
    {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Handle authentication
    // Authentication 'pandaAuth' required
    // HTTP basic authentication required
    $securitypandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables
    $acceptLanguage = $request->headers->get('Accept-Language');
    $register = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try
    {
      $register = $this->deserialize($register, 'OpenAPI\Server\Model\Register', $inputFormat);
      $acceptLanguage = $this->deserialize($acceptLanguage, 'string', 'string');
    }
    catch (SerializerRuntimeException $exception)
    {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\Register');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($register, $asserts);
    if ($response instanceof Response)
    {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($acceptLanguage, $asserts);
    if ($response instanceof Response)
    {
      return $response;
    }

    try
    {
      $handler = $this->getApiHandler();

      // Set authentication method 'pandaAuth'
      $handler->setpandaAuth($securitypandaAuth);

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];
      $result = $handler->userPost($register, $acceptLanguage, $responseCode, $responseHeaders);

      // Find default response message
      $message = 'OK - User registerd';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK - User registerd';
                    break;
                case 400:
                    $message = 'NOT OK - BAD Request';
                    break;
                case 422:
                    $message = 'NOT OK - Unable to process entity';
                    break;
            }

      return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
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
   * @return UserApiInterface
   */
  public function getApiHandler()
  {
    return $this->apiServer->getApiHandler('user');
  }
}

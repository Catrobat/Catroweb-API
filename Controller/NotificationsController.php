<?php

/**
 * NotificationsController
 * PHP version 7.1.3.
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
 * The version of the OpenAPI document: v1.0.55
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
use OpenAPI\Server\Api\NotificationsApiInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * NotificationsController Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class NotificationsController extends Controller
{
  /**
   * Operation notificationsCountGet.
   *
   * Count the number of unseen notifications
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function notificationsCountGetAction(Request $request)
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
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Validate the input values

    try
    {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];
      $result = $handler->notificationsCountGet($responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 401:
                    $message = 'Invalid JWT token | JWT token not found | JWT token expired';
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
   * Operation notificationsGet.
   *
   * Get user notifications
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function notificationsGetAction(Request $request)
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
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables
    $limit = $request->query->get('limit');
    $offset = $request->query->get('offset');
    $type = $request->query->get('type');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try
    {
      $limit = $this->deserialize($limit, 'int', 'string');
      $offset = $this->deserialize($offset, 'int', 'string');
      $type = $this->deserialize($type, 'OpenAPI\Server\Model\NotificationsType', 'string');
    }
    catch (SerializerRuntimeException $exception)
    {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($limit, $asserts);
    if ($response instanceof Response)
    {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($offset, $asserts);
    if ($response instanceof Response)
    {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\NotificationsType');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($type, $asserts);
    if ($response instanceof Response)
    {
      return $response;
    }

    try
    {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];
      $result = $handler->notificationsGet($limit, $offset, $type, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 401:
                    $message = 'Invalid JWT token | JWT token not found | JWT token expired';
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
   * Operation notificationsIdReadPut.
   *
   * Mark specified notification as read
   *
   * @param Request $request the Symfony request to handle
   * @param mixed   $id
   *
   * @return Response the Symfony response
   */
  public function notificationsIdReadPutAction(Request $request, $id)
  {
    // Handle authentication
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try
    {
      $id = $this->deserialize($id, 'int', 'string');
    }
    catch (SerializerRuntimeException $exception)
    {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($id, $asserts);
    if ($response instanceof Response)
    {
      return $response;
    }

    try
    {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];
      $result = $handler->notificationsIdReadPut($id, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 204:
                    $message = 'No Content';
                    break;
                case 401:
                    $message = 'Invalid JWT token | JWT token not found | JWT token expired';
                    break;
                case 404:
                    $message = 'Not found';
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
   * Operation notificationsReadPut.
   *
   * Mark all notifications as read
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function notificationsReadPutAction(Request $request)
  {
    // Handle authentication
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Validate the input values

    try
    {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];
      $result = $handler->notificationsReadPut($responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 204:
                    $message = 'No Content';
                    break;
                case 401:
                    $message = 'Invalid JWT token | JWT token not found | JWT token expired';
                    break;
                case 404:
                    $message = 'Not found';
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
   * @return NotificationsApiInterface
   */
  public function getApiHandler()
  {
    return $this->apiServer->getApiHandler('notifications');
  }
}

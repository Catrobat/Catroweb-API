<?php

/**
 * UserController
 * PHP version 8.1.1.
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
 * The version of the OpenAPI document: v1.3.0
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Controller;

use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use OpenAPI\Server\Api\UserApiInterface;
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
   * Operation userDelete.
   *
   * Delete user account
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function userDeleteAction(Request $request)
  {
    // Handle authentication

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Validate the input values

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];

      $handler->userDelete($responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
        case 204:
          $message = 'User successfully deleted.';
          break;
        case 401:
          $message = 'Invalid JWT token | JWT token not found | JWT token expired';
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
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation userGet.
   *
   * Get your private user data
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function userGetAction(Request $request)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Validate the input values

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->userGet($responseCode, $responseHeaders);

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
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
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
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation userIdGet.
   *
   * Get public user data
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function userIdGetAction(Request $request, $id)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $id = $this->deserialize($id, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $asserts[] = new Assert\Regex('/^[a-zA-Z0-9\\-]+$/');
    $response = $this->validate($id, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->userIdGet($id, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
        case 200:
          $message = 'OK';
          break;
        case 404:
          $message = 'Not found';
          break;
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
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
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation userPost.
   *
   * Register
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function userPostAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    if (!static::isContentTypeAllowed($request, $consumes)) {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $accept_language = $request->headers->get('Accept-Language', 'en');
    $register_request = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $inputFormat = $request->getMimeType($request->getContentType());
      $register_request = $this->deserialize($register_request, 'OpenAPI\Server\Model\RegisterRequest', $inputFormat);
      $accept_language = $this->deserialize($accept_language, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\RegisterRequest');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($register_request, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($accept_language, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->userPost($register_request, $accept_language, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
        case 201:
          $message = 'User successfully registered';
          break;
        case 204:
          $message = 'Dry-run successful (No Validation Error)';
          break;
        case 400:
          $message = 'Bad request (Invalid, or missing parameters)';
          break;
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
          break;
        case 415:
          $message = 'Unsupported Media Type - request must use application/json as content type';
          break;
        case 422:
          $message = 'Unprocessable Entity (Specific error messages will be translated to the locale)';
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
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation userPut.
   *
   * Update User
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function userPutAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    if (!static::isContentTypeAllowed($request, $consumes)) {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $accept_language = $request->headers->get('Accept-Language', 'en');
    $update_user_request = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $inputFormat = $request->getMimeType($request->getContentType());
      $update_user_request = $this->deserialize($update_user_request, 'OpenAPI\Server\Model\UpdateUserRequest', $inputFormat);
      $accept_language = $this->deserialize($accept_language, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\UpdateUserRequest');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($update_user_request, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($accept_language, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->userPut($update_user_request, $accept_language, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
        case 204:
          $message = 'User successfully updated';
          break;
        case 401:
          $message = 'Invalid credentials';
          break;
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
          break;
        case 422:
          $message = 'Unprocessable Entity. (Specific error messages will be translated to the locale)';
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
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation userResetPasswordPost.
   *
   * Request email to reset password
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function userResetPasswordPostAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    if (!static::isContentTypeAllowed($request, $consumes)) {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $accept_language = $request->headers->get('Accept-Language', 'en');
    $reset_password_request = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $inputFormat = $request->getMimeType($request->getContentType());
      $reset_password_request = $this->deserialize($reset_password_request, 'OpenAPI\Server\Model\ResetPasswordRequest', $inputFormat);
      $accept_language = $this->deserialize($accept_language, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\ResetPasswordRequest');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($reset_password_request, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($accept_language, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->userResetPasswordPost($reset_password_request, $accept_language, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
        case 204:
          $message = 'If an account with this email exists, an email to reset the password will be send to the user';
          break;
        case 400:
          $message = 'Bad request (Invalid, or missing parameters)';
          break;
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
          break;
        case 415:
          $message = 'Unsupported Media Type - request must use application/json as content type';
          break;
        case 422:
          $message = 'Unprocessable Entity. (Specific error messages will be translated to the locale)';
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
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation usersGet.
   *
   * Get users
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function usersGetAction(Request $request)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $query = $request->query->get('query');
    $limit = $request->query->get('limit', 20);
    $offset = $request->query->get('offset', 0);

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $query = $this->deserialize($query, 'string', 'string');
      $limit = $this->deserialize($limit, 'int', 'string');
      $offset = $this->deserialize($offset, 'int', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($query, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($limit, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($offset, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->usersGet($query, $limit, $offset, $responseCode, $responseHeaders);

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
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
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
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation usersSearchGet.
   *
   * Search for users
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function usersSearchGetAction(Request $request)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $query = $request->query->get('query');
    $limit = $request->query->get('limit', 20);
    $offset = $request->query->get('offset', 0);
    $attributes = $request->query->get('attributes', '');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $query = $this->deserialize($query, 'string', 'string');
      $limit = $this->deserialize($limit, 'int', 'string');
      $offset = $this->deserialize($offset, 'int', 'string');
      $attributes = $this->deserialize($attributes, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($query, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($limit, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($offset, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $asserts[] = new Assert\Regex('/^[a-zA-Z0-9\\-_]+(,[a-zA-Z0-9\\-_]+)*$/');
    $response = $this->validate($attributes, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->usersSearchGet($query, $limit, $offset, $attributes, $responseCode, $responseHeaders);

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
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
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
    } catch (\Throwable $fallthrough) {
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

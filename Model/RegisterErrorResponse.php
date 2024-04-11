<?php
/**
 * RegisterErrorResponse.
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
 * The version of the OpenAPI document: v1.4.1
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the RegisterErrorResponse model.
 *
 * @author  OpenAPI Generator team
 */
class RegisterErrorResponse
{
  /**
   * @SerializedName("email")
   *
   * @Assert\Choice({ "Email already in use", "Email invalid", "Email missing" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $email = null;

  /**
   * @SerializedName("username")
   *
   * @Assert\Choice({ "Username too short", "Username too long", "Username already in use", "Username missing", "Username must not contain an email address" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $username = null;

  /**
   * @SerializedName("password")
   *
   * @Assert\Choice({ "Password too short", "Password too long", "Password contains invalid chars", "Password missing" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $password = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->email = array_key_exists('email', $data) ? $data['email'] : $this->email;
      $this->username = array_key_exists('username', $data) ? $data['username'] : $this->username;
      $this->password = array_key_exists('password', $data) ? $data['password'] : $this->password;
    }
  }

  /**
   * Gets email.
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * Sets email.
   *
   * @return $this
   */
  public function setEmail(?string $email = null): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Gets username.
   */
  public function getUsername(): ?string
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @return $this
   */
  public function setUsername(?string $username = null): self
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets password.
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  /**
   * Sets password.
   *
   * @return $this
   */
  public function setPassword(?string $password = null): self
  {
    $this->password = $password;

    return $this;
  }
}

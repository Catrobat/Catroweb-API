<?php
/**
 * UploadErrorResponse.
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
 * The version of the OpenAPI document: v1.6.0
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
 * Class representing the UploadErrorResponse model.
 *
 * @author  OpenAPI Generator team
 */
class UploadErrorResponse
{
  #[Assert\Type('string')]
  #[SerializedName('error')]
  #[Type('string')]
  protected ?string $error = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->error = array_key_exists('error', $data) ? $data['error'] : $this->error;
    }
  }

  /**
   * Gets error.
   */
  public function getError(): ?string
  {
    return $this->error;
  }

  /**
   * Sets error.
   *
   * @return $this
   */
  public function setError(?string $error = null): self
  {
    $this->error = $error;

    return $this;
  }
}

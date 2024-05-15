<?php
/**
 * DryRun.
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

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the DryRun model.
 *
 * @author  OpenAPI Generator team
 */
class DryRun
{
  /**
   * Indicates wether a request should only be verified or executed.
   *
   * @SerializedName("dry-run")
   *
   * @Assert\Type("bool")
   *
   * @Type("bool")
   */
  protected ?bool $dry_run = false;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->dry_run = array_key_exists('dry_run', $data) ? $data['dry_run'] : $this->dry_run;
    }
  }

  /**
   * Gets dry_run.
   */
  public function isDryRun(): ?bool
  {
    return $this->dry_run;
  }

  /**
   * Sets dry_run.
   *
   * @param bool|null $dry_run Indicates wether a request should only be verified or executed
   *
   * @return $this
   */
  public function setDryRun(?bool $dry_run = null): self
  {
    $this->dry_run = $dry_run;

    return $this;
  }
}

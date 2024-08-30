<?php
/**
 * NotificationResponse.
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
 * Class representing the NotificationResponse model.
 *
 * @author  OpenAPI Generator team
 */
class NotificationResponse
{
  /**
   * Id of the notification.
   */
  #[SerializedName('id')]
  #[Assert\Type('int')]
  #[Type('int')]
  protected ?int $id = null;

  /**
   * Notification Type.
   */
  #[SerializedName('type')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $type = null;

  /**
   * Seen status of the notification.
   */
  #[SerializedName('seen')]
  #[Assert\Type('bool')]
  #[Type('bool')]
  protected ?bool $seen = null;

  /**
   * @var NotificationContent[]|null
   *
   * @Assert\All({
   *
   *   @Assert\Type("OpenAPI\Server\Model\NotificationContent")
   * })
   */
  #[SerializedName('content')]
  #[Type('array<OpenAPI\Server\Model\NotificationContent>')]
  protected ?array $content = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->id = array_key_exists('id', $data) ? $data['id'] : $this->id;
      $this->type = array_key_exists('type', $data) ? $data['type'] : $this->type;
      $this->seen = array_key_exists('seen', $data) ? $data['seen'] : $this->seen;
      $this->content = array_key_exists('content', $data) ? $data['content'] : $this->content;
    }
  }

  /**
   * Gets id.
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param int|null $id Id of the notification
   *
   * @return $this
   */
  public function setId(?int $id = null): self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets type.
   */
  public function getType(): ?string
  {
    return $this->type;
  }

  /**
   * Sets type.
   *
   * @param string|null $type Notification Type
   *
   * @return $this
   */
  public function setType(?string $type = null): self
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Gets seen.
   */
  public function isSeen(): ?bool
  {
    return $this->seen;
  }

  /**
   * Sets seen.
   *
   * @param bool|null $seen Seen status of the notification
   *
   * @return $this
   */
  public function setSeen(?bool $seen = null): self
  {
    $this->seen = $seen;

    return $this;
  }

  /**
   * Gets content.
   *
   * @return NotificationContent[]|null
   */
  public function getContent(): ?array
  {
    return $this->content;
  }

  /**
   * Sets content.
   *
   * @param NotificationContent[]|null $content
   *
   * @return $this
   */
  public function setContent(?array $content = null): self
  {
    $this->content = $content;

    return $this;
  }
}

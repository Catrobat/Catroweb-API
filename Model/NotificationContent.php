<?php
/**
 * NotificationContent.
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
 * Class representing the NotificationContent model.
 *
 * @author  OpenAPI Generator team
 */
class NotificationContent
{
  /**
   * Id of the user who caused the notification.
   *
   * @SerializedName("from")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   *
   * @Assert\Regex("/^[a-zA-Z0-9\\-]+$/")
   */
  protected ?string $from = null;

  /**
   * Username of the user who caused the notification.
   *
   * @SerializedName("from_name")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $from_name = null;

  /**
   * Id of the program for which the notification is about.
   *
   * @SerializedName("program")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   *
   * @Assert\Regex("/^[a-zA-Z0-9\\-]+$/")
   */
  protected ?string $program = null;

  /**
   * Name of the program for which the notification is about.
   *
   * @SerializedName("program_name")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $program_name = null;

  /**
   * Avatar of the user who caused the notification.
   *
   * @SerializedName("avatar")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $avatar = null;

  /**
   * Id of the remixed program.
   *
   * @SerializedName("remixed_program")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   *
   * @Assert\Regex("/^[a-zA-Z0-9\\-]+$/")
   */
  protected ?string $remixed_program = null;

  /**
   * Name of the remixed program.
   *
   * @SerializedName("remixed_program_name")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $remixed_program_name = null;

  /**
   * Notification message.
   *
   * @SerializedName("message")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $message = null;

  /**
   * Prize for anniversary notifications.
   *
   * @SerializedName("prize")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $prize = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->from = array_key_exists('from', $data) ? $data['from'] : $this->from;
      $this->from_name = array_key_exists('from_name', $data) ? $data['from_name'] : $this->from_name;
      $this->program = array_key_exists('program', $data) ? $data['program'] : $this->program;
      $this->program_name = array_key_exists('program_name', $data) ? $data['program_name'] : $this->program_name;
      $this->avatar = array_key_exists('avatar', $data) ? $data['avatar'] : $this->avatar;
      $this->remixed_program = array_key_exists('remixed_program', $data) ? $data['remixed_program'] : $this->remixed_program;
      $this->remixed_program_name = array_key_exists('remixed_program_name', $data) ? $data['remixed_program_name'] : $this->remixed_program_name;
      $this->message = array_key_exists('message', $data) ? $data['message'] : $this->message;
      $this->prize = array_key_exists('prize', $data) ? $data['prize'] : $this->prize;
    }
  }

  /**
   * Gets from.
   */
  public function getFrom(): ?string
  {
    return $this->from;
  }

  /**
   * Sets from.
   *
   * @param string|null $from Id of the user who caused the notification
   *
   * @return $this
   */
  public function setFrom(?string $from = null): self
  {
    $this->from = $from;

    return $this;
  }

  /**
   * Gets from_name.
   */
  public function getFromName(): ?string
  {
    return $this->from_name;
  }

  /**
   * Sets from_name.
   *
   * @param string|null $from_name Username of the user who caused the notification
   *
   * @return $this
   */
  public function setFromName(?string $from_name = null): self
  {
    $this->from_name = $from_name;

    return $this;
  }

  /**
   * Gets program.
   */
  public function getProgram(): ?string
  {
    return $this->program;
  }

  /**
   * Sets program.
   *
   * @param string|null $program Id of the program for which the notification is about
   *
   * @return $this
   */
  public function setProgram(?string $program = null): self
  {
    $this->program = $program;

    return $this;
  }

  /**
   * Gets program_name.
   */
  public function getProgramName(): ?string
  {
    return $this->program_name;
  }

  /**
   * Sets program_name.
   *
   * @param string|null $program_name Name of the program for which the notification is about
   *
   * @return $this
   */
  public function setProgramName(?string $program_name = null): self
  {
    $this->program_name = $program_name;

    return $this;
  }

  /**
   * Gets avatar.
   */
  public function getAvatar(): ?string
  {
    return $this->avatar;
  }

  /**
   * Sets avatar.
   *
   * @param string|null $avatar Avatar of the user who caused the notification
   *
   * @return $this
   */
  public function setAvatar(?string $avatar = null): self
  {
    $this->avatar = $avatar;

    return $this;
  }

  /**
   * Gets remixed_program.
   */
  public function getRemixedProgram(): ?string
  {
    return $this->remixed_program;
  }

  /**
   * Sets remixed_program.
   *
   * @param string|null $remixed_program Id of the remixed program
   *
   * @return $this
   */
  public function setRemixedProgram(?string $remixed_program = null): self
  {
    $this->remixed_program = $remixed_program;

    return $this;
  }

  /**
   * Gets remixed_program_name.
   */
  public function getRemixedProgramName(): ?string
  {
    return $this->remixed_program_name;
  }

  /**
   * Sets remixed_program_name.
   *
   * @param string|null $remixed_program_name Name of the remixed program
   *
   * @return $this
   */
  public function setRemixedProgramName(?string $remixed_program_name = null): self
  {
    $this->remixed_program_name = $remixed_program_name;

    return $this;
  }

  /**
   * Gets message.
   */
  public function getMessage(): ?string
  {
    return $this->message;
  }

  /**
   * Sets message.
   *
   * @param string|null $message Notification message
   *
   * @return $this
   */
  public function setMessage(?string $message = null): self
  {
    $this->message = $message;

    return $this;
  }

  /**
   * Gets prize.
   */
  public function getPrize(): ?string
  {
    return $this->prize;
  }

  /**
   * Sets prize.
   *
   * @param string|null $prize Prize for anniversary notifications
   *
   * @return $this
   */
  public function setPrize(?string $prize = null): self
  {
    $this->prize = $prize;

    return $this;
  }
}

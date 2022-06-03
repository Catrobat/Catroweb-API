<?php
/**
 * NotificationsCountResponse.
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
 * The version of the OpenAPI document: v1.1.2
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
 * Class representing the NotificationsCountResponse model.
 *
 * @author  OpenAPI Generator team
 */
class NotificationsCountResponse
{
  /**
   * @SerializedName("total")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $total;

  /**
   * @SerializedName("like")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $like;

  /**
   * @SerializedName("follower")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $follower;

  /**
   * @SerializedName("comment")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $comment;

  /**
   * @SerializedName("remix")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $remix;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->total = $data['total'] ?? null;
    $this->like = $data['like'] ?? null;
    $this->follower = $data['follower'] ?? null;
    $this->comment = $data['comment'] ?? null;
    $this->remix = $data['remix'] ?? null;
  }

  /**
   * Gets total.
   */
  public function getTotal(): ?int
  {
    return $this->total;
  }

  /**
   * Sets total.
   *
   * @return $this
   */
  public function setTotal(int $total = null): self
  {
    $this->total = $total;

    return $this;
  }

  /**
   * Gets like.
   */
  public function getLike(): ?int
  {
    return $this->like;
  }

  /**
   * Sets like.
   *
   * @return $this
   */
  public function setLike(int $like = null): self
  {
    $this->like = $like;

    return $this;
  }

  /**
   * Gets follower.
   */
  public function getFollower(): ?int
  {
    return $this->follower;
  }

  /**
   * Sets follower.
   *
   * @return $this
   */
  public function setFollower(int $follower = null): self
  {
    $this->follower = $follower;

    return $this;
  }

  /**
   * Gets comment.
   */
  public function getComment(): ?int
  {
    return $this->comment;
  }

  /**
   * Sets comment.
   *
   * @return $this
   */
  public function setComment(int $comment = null): self
  {
    $this->comment = $comment;

    return $this;
  }

  /**
   * Gets remix.
   */
  public function getRemix(): ?int
  {
    return $this->remix;
  }

  /**
   * Sets remix.
   *
   * @return $this
   */
  public function setRemix(int $remix = null): self
  {
    $this->remix = $remix;

    return $this;
  }
}

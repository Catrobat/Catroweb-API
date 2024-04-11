<?php
/**
 * ExtendedUserDataResponse.
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
 * The version of the OpenAPI document: v1.4.2
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
 * Class representing the ExtendedUserDataResponse model.
 *
 * @author  OpenAPI Generator team
 */
class ExtendedUserDataResponse
{
  /**
   * Unique ID of the user.
   *
   * @SerializedName("id")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $id = null;

  /**
   * Nickname of the user.
   *
   * @SerializedName("username")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $username = null;

  /**
   * The profile picture of the user in data URI scheme.
   *
   * @SerializedName("picture")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $picture = null;

  /**
   * An introduction of the user.
   *
   * @SerializedName("about")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $about = null;

  /**
   * A short description about the project the user is currently working on.
   *
   * @SerializedName("currentlyWorkingOn")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $currently_working_on = null;

  /**
   * Amount of projects of the user.
   *
   * @SerializedName("projects")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $projects = null;

  /**
   * Amount of users that follow this user.
   *
   * @SerializedName("followers")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $followers = null;

  /**
   * Amount of users followed by this user.
   *
   * @SerializedName("following")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $following = null;

  /**
   * Ranking score of this user.
   *
   * @SerializedName("ranking_score")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $ranking_score = null;

  /**
   * EMail of the user.
   *
   * @SerializedName("email")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $email = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->id = array_key_exists('id', $data) ? $data['id'] : $this->id;
      $this->username = array_key_exists('username', $data) ? $data['username'] : $this->username;
      $this->picture = array_key_exists('picture', $data) ? $data['picture'] : $this->picture;
      $this->about = array_key_exists('about', $data) ? $data['about'] : $this->about;
      $this->currently_working_on = array_key_exists('currently_working_on', $data) ? $data['currently_working_on'] : $this->currently_working_on;
      $this->projects = array_key_exists('projects', $data) ? $data['projects'] : $this->projects;
      $this->followers = array_key_exists('followers', $data) ? $data['followers'] : $this->followers;
      $this->following = array_key_exists('following', $data) ? $data['following'] : $this->following;
      $this->ranking_score = array_key_exists('ranking_score', $data) ? $data['ranking_score'] : $this->ranking_score;
      $this->email = array_key_exists('email', $data) ? $data['email'] : $this->email;
    }
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param string|null $id Unique ID of the user
   *
   * @return $this
   */
  public function setId(?string $id = null): self
  {
    $this->id = $id;

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
   * @param string|null $username Nickname of the user
   *
   * @return $this
   */
  public function setUsername(?string $username = null): self
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets picture.
   */
  public function getPicture(): ?string
  {
    return $this->picture;
  }

  /**
   * Sets picture.
   *
   * @param string|null $picture the profile picture of the user in data URI scheme
   *
   * @return $this
   */
  public function setPicture(?string $picture = null): self
  {
    $this->picture = $picture;

    return $this;
  }

  /**
   * Gets about.
   */
  public function getAbout(): ?string
  {
    return $this->about;
  }

  /**
   * Sets about.
   *
   * @param string|null $about an introduction of the user
   *
   * @return $this
   */
  public function setAbout(?string $about = null): self
  {
    $this->about = $about;

    return $this;
  }

  /**
   * Gets currently_working_on.
   */
  public function getCurrentlyWorkingOn(): ?string
  {
    return $this->currently_working_on;
  }

  /**
   * Sets currently_working_on.
   *
   * @param string|null $currently_working_on a short description about the project the user is currently working on
   *
   * @return $this
   */
  public function setCurrentlyWorkingOn(?string $currently_working_on = null): self
  {
    $this->currently_working_on = $currently_working_on;

    return $this;
  }

  /**
   * Gets projects.
   */
  public function getProjects(): ?int
  {
    return $this->projects;
  }

  /**
   * Sets projects.
   *
   * @param int|null $projects Amount of projects of the user
   *
   * @return $this
   */
  public function setProjects(?int $projects = null): self
  {
    $this->projects = $projects;

    return $this;
  }

  /**
   * Gets followers.
   */
  public function getFollowers(): ?int
  {
    return $this->followers;
  }

  /**
   * Sets followers.
   *
   * @param int|null $followers Amount of users that follow this user
   *
   * @return $this
   */
  public function setFollowers(?int $followers = null): self
  {
    $this->followers = $followers;

    return $this;
  }

  /**
   * Gets following.
   */
  public function getFollowing(): ?int
  {
    return $this->following;
  }

  /**
   * Sets following.
   *
   * @param int|null $following Amount of users followed by this user
   *
   * @return $this
   */
  public function setFollowing(?int $following = null): self
  {
    $this->following = $following;

    return $this;
  }

  /**
   * Gets ranking_score.
   */
  public function getRankingScore(): ?int
  {
    return $this->ranking_score;
  }

  /**
   * Sets ranking_score.
   *
   * @param int|null $ranking_score Ranking score of this user
   *
   * @return $this
   */
  public function setRankingScore(?int $ranking_score = null): self
  {
    $this->ranking_score = $ranking_score;

    return $this;
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
   * @param string|null $email EMail of the user
   *
   * @return $this
   */
  public function setEmail(?string $email = null): self
  {
    $this->email = $email;

    return $this;
  }
}

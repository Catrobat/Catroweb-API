<?php
/**
 * ProjectsCategory.
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
 * Class representing the ProjectsCategory model.
 *
 * @author  OpenAPI Generator team
 */
class ProjectsCategory
{
  /**
   * The name of the categories in english.
   */
  #[SerializedName('type')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $type = null;

  /**
   * Translated name according to the language header.
   */
  #[SerializedName('name')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $name = null;

  /**
   * Array of projects (deprecated - use projects_list).
   *
   * @var ProjectResponse[]|null
   *
   * @Assert\All({
   *
   *   @Assert\Type("OpenAPI\Server\Model\ProjectResponse")
   * })
   */
  #[SerializedName('projectsList')]
  #[Type('array<OpenAPI\Server\Model\ProjectResponse>')]
  protected ?array $projects_list = null;

  /**
   * Array of projects.
   *
   * @var ProjectResponse[]|null
   *
   * @Assert\All({
   *
   *   @Assert\Type("OpenAPI\Server\Model\ProjectResponse")
   * })
   */
  #[SerializedName('projects_list')]
  #[Type('array<OpenAPI\Server\Model\ProjectResponse>')]
  protected ?array $projects_list = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->type = array_key_exists('type', $data) ? $data['type'] : $this->type;
      $this->name = array_key_exists('name', $data) ? $data['name'] : $this->name;
      $this->projects_list = array_key_exists('projects_list', $data) ? $data['projects_list'] : $this->projects_list;
      $this->projects_list = array_key_exists('projects_list', $data) ? $data['projects_list'] : $this->projects_list;
    }
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
   * @param string|null $type the name of the categories in english
   *
   * @return $this
   */
  public function setType(?string $type = null): self
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @param string|null $name Translated name according to the language header
   *
   * @return $this
   */
  public function setName(?string $name = null): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets projects_list.
   *
   * @return ProjectResponse[]|null
   */
  public function getProjectsList(): ?array
  {
    return $this->projects_list;
  }

  /**
   * Sets projects_list.
   *
   * @param ProjectResponse[]|null $projects_list Array of projects (deprecated - use projects_list)
   *
   * @return $this
   */
  public function setProjectsList(?array $projects_list = null): self
  {
    $this->projects_list = $projects_list;

    return $this;
  }

  /**
   * Gets projects_list.
   *
   * @return ProjectResponse[]|null
   */
  public function getProjectsList(): ?array
  {
    return $this->projects_list;
  }

  /**
   * Sets projects_list.
   *
   * @param ProjectResponse[]|null $projects_list Array of projects
   *
   * @return $this
   */
  public function setProjectsList(?array $projects_list = null): self
  {
    $this->projects_list = $projects_list;

    return $this;
  }
}

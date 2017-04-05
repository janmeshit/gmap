<?php
// src/AppBundle/Entity/Location.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="location")
 */
class Location
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

     /**
     * @ORM\Column(type="decimal", scale=2)
     */
   
    private $latitude;
     /**
     * @ORM\Column(type="decimal", scale=2)
     */
   
    private $longitude;

     /**
     * @ORM\Column(type="string", length=100)
     */
   
    private $webaddress;

     /**
     * @ORM\Column(type="string", length=100)
     */
   
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Location
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Location
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Location
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set webaddress
     *
     * @param string $webaddress
     *
     * @return Location
     */
    public function setWebaddress($webaddress)
    {
        $this->webaddress = $webaddress;

        return $this;
    }

    /**
     * Get webaddress
     *
     * @return string
     */
    public function getWebaddress()
    {
        return $this->webaddress;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Location
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Location
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

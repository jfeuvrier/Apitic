<?php

namespace Ap\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
On a une seule classe : animal. On reconnaît les reptiles, oiseaux et mammifères
par l'attribut "category". L'intégralité des fonctionnalités demandées sont maintenues.
Idéalement, on aurait Animal en abstract class et Reptile, Oiseau et Mammifère
en classes héritant d'Animal, mais j'ai eu des erreurs et difficultés quant à
l'implémentation de cette classe abstraite.
Quitte à faire sans classe abstraite, j'ai jugé qu'une classe unique serait plus
propre à implémenter.
*/

/**
 * Animal
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=255)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="skinqualifier", type="string", length=255)
     */
    private $skinqualifier;


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
     * @return Animal
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
     * Set category
     *
     * @param string $category
     * @return Animal
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set espece
     *
     * @param string $espece
     * @return Animal
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * Get espece
     *
     * @return string
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set skinqualifier
     *
     * @param string $skinqualifier
     * @return Animal
     */
    public function setSkinqualifier($skinqualifier)
    {
        $this->skinqualifier = $skinqualifier;

        return $this;
    }

    /**
     * Get skinqualifier
     *
     * @return string
     */
    public function getSkinqualifier()
    {
        return $this->skinqualifier;
    }


    //On a différentes formulations en fonction du type de l'animal
    public function call()
    {
        if($this->category=="reptile"){
          return("Je suis un/une ".strtolower($this->espece)." et mes écailes sont ".strtolower($this->skinqualifier));
        }else{
            if($this->category=="mammifère"){
                return("Je suis un/une ".strtolower($this->espece)." et ma fourrure est ".strtolower($this->skinqualifier));
            }else{
              if($this->category=="oiseau"){
                return("Je suis un/une ".strtolower($this->espece)." et mon plumage est ".strtolower($this->skinqualifier));
              }else{
                return("Je suis un/une ".strtolower($this-espece));
              }
            }
        }
    }
}

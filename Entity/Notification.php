<?php
// src/APNet/Bundle/APMetronicBundle/Entuty/Notification.php

namespace APNet\Bundle\APMetronicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_notifiche")
 */
class Notification 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id_notifica;
	
	/**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $data_notifica;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $text;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isShown;
	
	/**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="notifiche")
     * @ORM\JoinColumn(name="id_utente", referencedColumnName="id_utente")
     */
    private $User;

    public function __construct() {
        parent::__construct();
        // your own logic
	}
	

    /**
     * Get idNotifica
     *
     * @return integer
     */
    public function getIdNotifica()
    {
        return $this->id_notifica;
    }

    /**
     * Set dataNotifica
     *
     * @param string $dataNotifica
     *
     * @return Notification
     */
    public function setDataNotifica($dataNotifica)
    {
        $this->data_notifica = $dataNotifica;

        return $this;
    }

    /**
     * Get dataNotifica
     *
     * @return string
     */
    public function getDataNotifica()
    {
        return $this->data_notifica;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Notification
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Notification
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set isShown
     *
     * @param boolean $isShown
     *
     * @return Notification
     */
    public function setIsShown($isShown)
    {
        $this->isShown = $isShown;

        return $this;
    }

    /**
     * Get isShown
     *
     * @return boolean
     */
    public function getIsShown()
    {
        return $this->isShown;
    }

    /**
     * Set user
     *
     * @param \APNet\Bundle\APMetronicBundle\Entity\User $user
     *
     * @return Notification
     */
    public function setUser(\APNet\Bundle\APMetronicBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \APNet\Bundle\APMetronicBundle\Entity\User
     */
    public function getUser()
    {
        return $this->User;
    }
}

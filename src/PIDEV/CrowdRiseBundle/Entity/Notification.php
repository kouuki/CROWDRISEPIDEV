<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Notification
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
     * @ORM\Column(name="producer", type="string", length=255)
     */
    private $producer;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver", type="string", length=255)
     */
    private $receiver;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;


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
     * Set producer
     *
     * @param string $producer
     * @return Notification
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return string 
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set receiver
     *
     * @param string $receiver
     * @return Notification
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return string 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}

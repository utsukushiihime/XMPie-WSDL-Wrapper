<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS;

class GetRecipientList
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var int $recipientListId
     */
    protected $recipientListId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $recipientListId
     */
    public function __construct($username = null, $password = null, $recipientListId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->recipientListId = $recipientListId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\GetRecipientList
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\GetRecipientList
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientListId()
    {
      return $this->recipientListId;
    }

    /**
     * @param int $recipientListId
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\GetRecipientList
     */
    public function setRecipientListId($recipientListId)
    {
      $this->recipientListId = $recipientListId;
      return $this;
    }

}

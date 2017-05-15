<?php
namespace Telus\Shared\TIUserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use FR3D\LdapBundle\Model\LdapUserInterface;

/**
 * User
 */
class User extends BaseUser implements LdapUserInterface
{
    protected $id;
    
    // Esta variable sirve para almacenar (cache) la ruta del usuario en el LDAP
    protected $dn;
    
    protected $employeeid;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set Ldap Distinguished Name
     *
     * @param string $dn Distinguished Name
     */
    public function setDn($dn){
        $this->dn = $dn;

        return $this;
    }

    /**
     * Get Ldap Distinguished Name
     *
     * @return string Distinguished Name
     */
    public function getDn(){
         return $this->dn;
    }
    
    
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;

        return $this;        
    }
    
    public function getEmployeeid(){
        return $this->employeeid;
    }

    public function serialize()
    {
        return serialize(array(
            $this->password,
            $this->salt,
            $this->usernameCanonical,
            $this->username,
            $this->emailCanonical,
            $this->email,
            $this->expired,
            $this->locked,
            $this->credentialsExpired,
            $this->enabled,
            $this->id,
            $this->roles,
            $this->dn,
        ));
    }

    public function unserialize($serialized)
    {
        list(
            $this->password,
            $this->salt,
            $this->usernameCanonical,
            $this->username,
            $this->emailCanonical,
            $this->email,
            $this->expired,
            $this->locked,
            $this->credentialsExpired,
            $this->enabled,
            $this->id,
            $this->roles,
            $this->dn,
        ) = unserialize($serialized);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Nassreddine
 * Date: 07/03/2019
 * Time: 11:31
 */

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */

class User extends  BaseUser
{
 /**
  *@ORM\Id
  *@ORM\Column(type="integer")
  *@ORM\GeneratedValue(strategy="AUTO")
  */
    protected $id;

    public function __construct() {
        parent::__construct();
    }
}
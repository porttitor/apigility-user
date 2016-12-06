<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2016/11/22
 * Time: 13:46
 */
namespace ApigilityUser\Service;

use ApigilityCatworkFoundation\Base\ApigilityEventAwareObject;
use ApigilityUser\DoctrineEntity\User;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\Hydrator\ClassMethods as ClassMethodsHydrator;
use Zend\Hydrator\ObjectProperty as ObjectPropertyHydrator;

class UserService extends ApigilityEventAwareObject
{
    const EVENT_USER_CREATED = 'UserService.EventUserCreated';

    protected $em;
    protected $classMethodsHydrator;
    protected $objectPropertyHydrator;

    /**
     * @var \ZF\MvcAuth\Identity\AuthenticatedIdentity
     */
    protected $authIdentity;

    protected $services;

    public function __construct(ServiceManager $services)
    {
        $this->services = $services;
        $this->em = $services->get('Doctrine\ORM\EntityManager');
        $this->classMethodsHydrator = new ClassMethodsHydrator();
        $this->objectPropertyHydrator = new ObjectPropertyHydrator();
    }

    /**
     * 创建一个用户
     * @param $data
     * @return User
     */
    public function createUser($data)
    {
        $user = new User();
        $user->setId($data->user_id);

        $this->em->persist($user);
        $this->em->flush();

        $this->getEventManager()->trigger(self::EVENT_USER_CREATED, $this, ['user' => $user]);

        return $user;
    }

    /**
     * 获取单个用户信息
     *
     * @param $user_id
     * @return mixed
     * @throws Exception\UserNotExistException
     */
    public function getUser($user_id)
    {
        $user = $this->em->find('ApigilityUser\DoctrineEntity\User', $user_id);
        if (empty($user)) throw new Exception\UserNotExistException();

        return $user;
    }

    /**
     * 更新单个用户信息
     *
     * @param $user_id
     * @param $data
     * @return mixed
     */
    public function updateUser($user_id, $data)
    {
        $user = $this->getUser($user_id);
        if (isset($data->birthday)) {
            $datetime = new \DateTime();
            $datetime->setTimestamp($data->birthday);
            $data->birthday = $datetime;
        }
        $this->classMethodsHydrator->hydrate($this->objectPropertyHydrator->extract($data), $user);

        $this->em->flush();

        return $user;
    }

    /**
     * 获取已登录的用户对象
     * @return \ApigilityUser\DoctrineEntity\User
     */
    public function getAuthUser()
    {
        $this->authIdentity = $this->services->get('api-identity');
        return  $this->getUser($this->authIdentity->getRoleId());
    }
}
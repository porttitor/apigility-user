<?php
namespace ApigilityUser\V1\Rest\PersonalCertification;

use ApigilityCatworkFoundation\Base\ApigilityObjectStorageAwareEntity;

class PersonalCertificationEntity extends ApigilityObjectStorageAwareEntity
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", length=50, unique=true)
     */
    protected $identity_card_number;

    /**
     * @Column(type="string", length=255, unique=true)
     */
    protected $identity_card_image_front;

    /**
     * @Column(type="string", length=255, unique=true)
     */
    protected $identity_card_image_back;

    /**
     * 用户
     *
     * @OneToOne(targetEntity="User", inversedBy="personalCertification")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * 审核状态
     *
     * @Column(type="smallint", nullable=false)
     */
    protected $status;



    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setIdentityCardNumber($identity_card_number)
    {
        $this->identity_card_number = $identity_card_number;
        return $this;
    }

    public function getIdentityCardNumber()
    {
        return $this->identity_card_number;
    }

    public function setIdentityCardImageFront($identity_card_image_front)
    {
        $this->identity_card_image_front = $identity_card_image_front;
        return $this;
    }

    public function getIdentityCardImageFront()
    {
        return $this->identity_card_image_front;
    }

    public function setIdentityCardImageBack($identity_card_image_back)
    {
        $this->identity_card_image_back = $identity_card_image_back;
        return $this;
    }

    public function getIdentityCardImageBack()
    {
        return $this->identity_card_image_back;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

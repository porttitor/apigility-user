<?php
return [
    'service_manager' => [
        'factories' => [
            \ApigilityUser\V1\Rest\User\UserResource::class => \ApigilityUser\V1\Rest\User\UserResourceFactory::class,
            \ApigilityUser\V1\Rest\Identity\IdentityResource::class => \ApigilityUser\V1\Rest\Identity\IdentityResourceFactory::class,
            \ApigilityUser\V1\Rest\PersonalCertification\PersonalCertificationResource::class => \ApigilityUser\V1\Rest\PersonalCertification\PersonalCertificationResourceFactory::class,
            \ApigilityUser\V1\Rest\ProfessionalCertification\ProfessionalCertificationResource::class => \ApigilityUser\V1\Rest\ProfessionalCertification\ProfessionalCertificationResourceFactory::class,
            \ApigilityUser\V1\Rest\Occupation\OccupationResource::class => \ApigilityUser\V1\Rest\Occupation\OccupationResourceFactory::class,
            \ApigilityUser\V1\Rest\IncomeLevel\IncomeLevelResource::class => \ApigilityUser\V1\Rest\IncomeLevel\IncomeLevelResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'apigility-user.rest.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'ApigilityUser\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
            'apigility-user.rest.identity' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user/identity[/:identity_id]',
                    'defaults' => [
                        'controller' => 'ApigilityUser\\V1\\Rest\\Identity\\Controller',
                    ],
                ],
            ],
            'apigility-user.rest.personal-certification' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user/personal-certification[/:personal_certification_id]',
                    'defaults' => [
                        'controller' => 'ApigilityUser\\V1\\Rest\\PersonalCertification\\Controller',
                    ],
                ],
            ],
            'apigility-user.rest.professional-certification' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user/professional-certification[/:professional_certification_id]',
                    'defaults' => [
                        'controller' => 'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Controller',
                    ],
                ],
            ],
            'apigility-user.rest.occupation' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user/occupation[/:occupation_id]',
                    'defaults' => [
                        'controller' => 'ApigilityUser\\V1\\Rest\\Occupation\\Controller',
                    ],
                ],
            ],
            'apigility-user.rest.income-level' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user/income-level[/:income_level_id]',
                    'defaults' => [
                        'controller' => 'ApigilityUser\\V1\\Rest\\IncomeLevel\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'apigility-user.rest.user',
            1 => 'apigility-user.rest.identity',
            2 => 'apigility-user.rest.personal-certification',
            3 => 'apigility-user.rest.professional-certification',
            4 => 'apigility-user.rest.occupation',
            5 => 'apigility-user.rest.income-level',
        ],
    ],
    'zf-rest' => [
        'ApigilityUser\\V1\\Rest\\User\\Controller' => [
            'listener' => \ApigilityUser\V1\Rest\User\UserResource::class,
            'route_name' => 'apigility-user.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityUser\V1\Rest\User\UserEntity::class,
            'collection_class' => \ApigilityUser\V1\Rest\User\UserCollection::class,
            'service_name' => 'User',
        ],
        'ApigilityUser\\V1\\Rest\\Identity\\Controller' => [
            'listener' => \ApigilityUser\V1\Rest\Identity\IdentityResource::class,
            'route_name' => 'apigility-user.rest.identity',
            'route_identifier_name' => 'identity_id',
            'collection_name' => 'identity',
            'entity_http_methods' => [
                0 => 'PATCH',
                1 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'POST',
                1 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'phone',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityUser\V1\Rest\Identity\IdentityEntity::class,
            'collection_class' => \ApigilityUser\V1\Rest\Identity\IdentityCollection::class,
            'service_name' => 'Identity',
        ],
        'ApigilityUser\\V1\\Rest\\PersonalCertification\\Controller' => [
            'listener' => \ApigilityUser\V1\Rest\PersonalCertification\PersonalCertificationResource::class,
            'route_name' => 'apigility-user.rest.personal-certification',
            'route_identifier_name' => 'personal_certification_id',
            'collection_name' => 'personal_certification',
            'entity_http_methods' => [
                0 => 'PATCH',
            ],
            'collection_http_methods' => [
                0 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityUser\V1\Rest\PersonalCertification\PersonalCertificationEntity::class,
            'collection_class' => \ApigilityUser\V1\Rest\PersonalCertification\PersonalCertificationCollection::class,
            'service_name' => 'PersonalCertification',
        ],
        'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Controller' => [
            'listener' => \ApigilityUser\V1\Rest\ProfessionalCertification\ProfessionalCertificationResource::class,
            'route_name' => 'apigility-user.rest.professional-certification',
            'route_identifier_name' => 'professional_certification_id',
            'collection_name' => 'professional_certification',
            'entity_http_methods' => [
                0 => 'PATCH',
            ],
            'collection_http_methods' => [
                0 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityUser\V1\Rest\ProfessionalCertification\ProfessionalCertificationEntity::class,
            'collection_class' => \ApigilityUser\V1\Rest\ProfessionalCertification\ProfessionalCertificationCollection::class,
            'service_name' => 'ProfessionalCertification',
        ],
        'ApigilityUser\\V1\\Rest\\Occupation\\Controller' => [
            'listener' => \ApigilityUser\V1\Rest\Occupation\OccupationResource::class,
            'route_name' => 'apigility-user.rest.occupation',
            'route_identifier_name' => 'occupation_id',
            'collection_name' => 'occupation',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityUser\V1\Rest\Occupation\OccupationEntity::class,
            'collection_class' => \ApigilityUser\V1\Rest\Occupation\OccupationCollection::class,
            'service_name' => 'Occupation',
        ],
        'ApigilityUser\\V1\\Rest\\IncomeLevel\\Controller' => [
            'listener' => \ApigilityUser\V1\Rest\IncomeLevel\IncomeLevelResource::class,
            'route_name' => 'apigility-user.rest.income-level',
            'route_identifier_name' => 'income_level_id',
            'collection_name' => 'income_level',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityUser\V1\Rest\IncomeLevel\IncomeLevelEntity::class,
            'collection_class' => \ApigilityUser\V1\Rest\IncomeLevel\IncomeLevelCollection::class,
            'service_name' => 'IncomeLevel',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'ApigilityUser\\V1\\Rest\\User\\Controller' => 'HalJson',
            'ApigilityUser\\V1\\Rest\\Identity\\Controller' => 'HalJson',
            'ApigilityUser\\V1\\Rest\\PersonalCertification\\Controller' => 'HalJson',
            'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Controller' => 'HalJson',
            'ApigilityUser\\V1\\Rest\\Occupation\\Controller' => 'HalJson',
            'ApigilityUser\\V1\\Rest\\IncomeLevel\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'ApigilityUser\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\Identity\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\PersonalCertification\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\Occupation\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\IncomeLevel\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'ApigilityUser\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\Identity\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\PersonalCertification\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\Occupation\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/json',
            ],
            'ApigilityUser\\V1\\Rest\\IncomeLevel\\Controller' => [
                0 => 'application/vnd.apigility-user.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \ApigilityUser\V1\Rest\User\UserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityUser\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ],
            \ApigilityUser\V1\Rest\Identity\IdentityEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.identity',
                'route_identifier_name' => 'identity_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityUser\V1\Rest\Identity\IdentityCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.identity',
                'route_identifier_name' => 'identity_id',
                'is_collection' => true,
            ],
            \ApigilityUser\V1\Rest\PersonalCertification\PersonalCertificationEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.personal-certification',
                'route_identifier_name' => 'personal_certification_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityUser\V1\Rest\PersonalCertification\PersonalCertificationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.personal-certification',
                'route_identifier_name' => 'personal_certification_id',
                'is_collection' => true,
            ],
            \ApigilityUser\V1\Rest\ProfessionalCertification\ProfessionalCertificationEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.professional-certification',
                'route_identifier_name' => 'professional_certification_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityUser\V1\Rest\ProfessionalCertification\ProfessionalCertificationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.professional-certification',
                'route_identifier_name' => 'professional_certification_id',
                'is_collection' => true,
            ],
            \ApigilityUser\V1\Rest\Occupation\OccupationEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.occupation',
                'route_identifier_name' => 'occupation_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityUser\V1\Rest\Occupation\OccupationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.occupation',
                'route_identifier_name' => 'occupation_id',
                'is_collection' => true,
            ],
            \ApigilityUser\V1\Rest\IncomeLevel\IncomeLevelEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.income-level',
                'route_identifier_name' => 'income_level_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityUser\V1\Rest\IncomeLevel\IncomeLevelCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-user.rest.income-level',
                'route_identifier_name' => 'income_level_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'ApigilityUser\\V1\\Rest\\Identity\\Controller' => [
            'input_filter' => 'ApigilityUser\\V1\\Rest\\Identity\\Validator',
        ],
        'ApigilityUser\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'ApigilityUser\\V1\\Rest\\User\\Validator',
        ],
        'ApigilityUser\\V1\\Rest\\PersonalCertification\\Controller' => [
            'input_filter' => 'ApigilityUser\\V1\\Rest\\PersonalCertification\\Validator',
        ],
        'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Controller' => [
            'input_filter' => 'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'ApigilityUser\\V1\\Rest\\Session\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'max' => '11',
                            'min' => '11',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [
                            'charlist' => '',
                        ],
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                        'options' => [],
                    ],
                ],
                'name' => 'phone',
                'description' => '手机号码',
                'field_type' => 'string',
                'error_message' => '请输入手机号码',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'password',
                'description' => '密码',
                'error_message' => '请输入密码',
            ],
        ],
        'ApigilityUser\\V1\\Rest\\Identity\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'description' => '用户标识。在创建资源时，是自动生成的，不需要输入。',
                'field_type' => 'string',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'phone',
                'description' => '手机号码',
                'field_type' => 'string',
                'allow_empty' => false,
                'error_message' => '请输入手机号码',
                'continue_if_empty' => true,
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'password',
                'description' => '用户密码',
                'field_type' => 'string',
                'error_message' => '请输入密码',
                'allow_empty' => false,
                'continue_if_empty' => true,
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'type',
                'description' => '帐号类型',
                'field_type' => 'string',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
        ],
        'ApigilityUser\\V1\\Rest\\User\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'description' => '用户标识',
                'field_type' => 'string',
            ],
            1 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'nickname',
                'description' => '昵称',
                'error_message' => '请输入昵称',
                'field_type' => 'string',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'avatar',
                'description' => '头像',
                'field_type' => 'string',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'sex',
                'description' => '性别',
                'field_type' => 'int',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            4 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'age',
                'description' => '年龄',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            5 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'birthday',
                'description' => '生日',
                'error_message' => '请输入生日',
                'field_type' => 'timestamp',
            ],
            6 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'stature',
                'description' => '身高',
                'error_message' => '请输入身高',
                'field_type' => 'int',
            ],
            7 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'weight',
                'description' => '体重',
                'error_message' => '请输入体重',
                'field_type' => 'int',
            ],
            8 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'education',
                'description' => '学历',
                'field_type' => 'int',
                'error_message' => '请输入学历',
            ],
            9 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'emotion',
                'description' => '感情状况',
                'error_message' => '请输入感情状况',
                'field_type' => 'int',
            ],
            10 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'zodiac',
                'description' => '星座',
                'field_type' => 'int',
                'error_message' => '请输入星座',
            ],
            11 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'chinese_zodiac',
                'description' => '生肖',
                'field_type' => 'int',
                'error_message' => '请输入生肖',
            ],
            12 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'residence_address',
                'description' => '居住地址',
                'field_type' => 'int',
                'error_message' => '请输入居住地址',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            13 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'census_register_address',
                'description' => '户口地址',
                'field_type' => 'int',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'error_message' => '请输入户口地址',
            ],
            14 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'occupation',
                'field_type' => 'int',
                'description' => '职业',
                'error_message' => '请输入职业',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            15 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'income_level',
                'description' => '收入等级',
                'field_type' => 'int',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'error_message' => '请输入收入等级',
            ],
        ],
        'ApigilityUser\\V1\\Rest\\PersonalCertification\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'field_type' => 'int',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            1 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'identity_card_number',
                'description' => '身份证号码',
                'field_type' => 'string',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'error_message' => '请输入身份证号码',
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'identity_card_image_front',
                'error_message' => '请输入身份证正面照',
                'description' => '身份证正面照',
                'field_type' => 'string',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'identity_card_image_back',
                'error_message' => '请输入身份证反面照',
                'description' => '身份证反面照',
                'field_type' => 'string',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            4 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'holding_identity_card_image',
                'description' => '手持身份证照片',
                'field_type' => 'string',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'error_message' => '请输入手持身份证照片',
            ],
        ],
        'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'field_type' => 'int',
            ],
            1 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'identity_card_number',
                'error_message' => '请输入身份证号码',
                'description' => '身份证号码',
                'field_type' => 'string',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'certification_image_front',
                'continue_if_empty' => true,
                'allow_empty' => true,
                'error_message' => '请输入证书正面照',
                'description' => '证书正面照',
                'field_type' => 'string',
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'error_message' => '请输入证书反面照',
                'description' => '证书反面照',
                'field_type' => 'string',
                'name' => 'certification_image_back',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'ApigilityUser\\V1\\Rest\\ProfessionalCertification\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            'ApigilityUser\\V1\\Rest\\PersonalCertification\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];

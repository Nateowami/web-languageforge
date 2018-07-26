<?php

namespace Api\Model\Shared;

use Api\Model\Shared\Mapper\MapperListModel;
use Api\Model\Shared\Mapper\MongoMapper;

/**
 * List of users who are members of the specified project
 */
class InviteeListProjectModel extends MapperListModel
{
    /**
     * InviteeListProjectModel constructor.
     * @param string $projectId
     */
    public function __construct($projectId)
    {
        parent::__construct(
                UserModelMongoMapper::instance(),
                array('last_login' => array('$exists' => false), 'projects' => array('$in' => array(MongoMapper::mongoID($projectId)))),
                array('username', 'email', 'name')
        );
    }
}

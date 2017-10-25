<?php

namespace AppVerk\UserBundle\Entity;

use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use AppVerk\UserBundle\Model\Role as AbstractRole;

abstract class Role extends AbstractRole
{
    use TimestampableEntity;
    use SoftDeleteableEntity;

    /**
     * Get deletable
     *
     * @return boolean
     */
    public function getDeletable()
    {
        return $this->deletable;
    }
}
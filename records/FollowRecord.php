<?php
/**
 * @link      https://dukt.net/craft/follow/
 * @copyright Copyright (c) 2016, Dukt
 * @license   https://dukt.net/craft/follow/docs/license
 */

namespace Craft;

class FollowRecord extends BaseRecord
{
    /**
     * Get Table Name
     */
    public function getTableName()
    {
        return 'follows';
    }

    /**
     * Define Attributes
     */
    public function defineAttributes()
    {
        return array();
    }

    /**
     * @return array
     */
    public function defineIndexes()
    {
        return array(
            array('columns' => array('userId', 'elementId'), 'unique' => true),
        );
    }

    public function defineRelations()
    {
        return array(
            'user' => array(static::BELONGS_TO, 'UserRecord', 'userId', 'required' => true),
            'element' => array(static::BELONGS_TO, 'ElementRecord', 'elementId', 'required' => true)
        );
    }
}
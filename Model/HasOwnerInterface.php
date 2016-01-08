<?php

namespace Sonata\UserBundle\Model;

/**
 * Interface HasOwnerInterface
 * @package Sonata\UserBundle\Model
 */
interface HasOwnerInterface
{
    /**
     * Return array of owner fields
     *
     * @return array
     */
    public static function getOwnerFields();
}
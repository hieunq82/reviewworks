<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\CommentBundle\Model\Comment as AbstractedComment;

/**
 * Comment entity
 */
class BaseComment extends AbstractedComment
{

}
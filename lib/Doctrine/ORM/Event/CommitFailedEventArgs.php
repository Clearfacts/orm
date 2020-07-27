<?php

declare(strict_types=1);

namespace Doctrine\ORM\Event;

use Doctrine\Common\EventArgs;
use Doctrine\ORM\EntityManagerInterface;

class CommitFailedEventArgs extends EventArgs
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;
    /**
     * @var string
     */
    private $originalException;

    /**
     * Constructor.
     *
     * @param EntityManagerInterface $em
     * @param \Throwable             $exception
     */
    public function __construct(EntityManagerInterface $em, \Throwable $exception)
    {
        $this->em = $em;
        $this->originalException = $exception;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        return $this->em;
    }

    public function getOriginalException()
    {
        return $this->originalException;
    }
}
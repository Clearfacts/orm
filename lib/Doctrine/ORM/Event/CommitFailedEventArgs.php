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
    private $exceptionMessage;

    /**
     * Constructor.
     *
     * @param EntityManagerInterface $em
     * @param string                 $exceptionMessage
     */
    public function __construct(EntityManagerInterface $em, string $exceptionMessage)
    {
        $this->em = $em;
        $this->exceptionMessage = $exceptionMessage;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        return $this->em;
    }

    public function getOriginalExceptionMessage()
    {
        return $this->exceptionMessage;
    }
}
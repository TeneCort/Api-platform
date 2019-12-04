<?php
// api/src/Entity/Answer.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Question;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\JoinColumn;

/**
 * @ORM\Entity
 * @ApiResource
 */
class Answer
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column
     */
    public $content;

    /**
     * @ORM\OneToOne(targetEntity="Question", mappedBy="answer")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    public $question;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(Question $question): void
    {
        $this->question = $question;
    }
}
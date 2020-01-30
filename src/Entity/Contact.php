<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Asserts;

class Contact
{
    /**
     * @var string|null
     * @Asserts\NotBlank()
     * @Asserts\Length(min=2, max=100)
     */
    private $firstname;

    /**
     * @var string|null
     * @Asserts\NotBlank()
     * @Asserts\Length(min=2, max=100)
     */
    private $lastname;

    /**
     * @var string|null
     */
    private $telephone;
    
    /**
     * @var string|null
     * @Asserts\Length(min=2, max=100)
     */
    private $email;

    /**
     * @var string|null
     * @Asserts\NotBlank()
     * @Asserts\Length(min=10)
     */
    private $message;


    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }
    
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
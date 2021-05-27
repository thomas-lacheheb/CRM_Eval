<?php

namespace tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Contact;

class ContactTest extends TestCase {

    protected $contact;

    protected function setUp(): void
    {
        $this->contact = new Contact();
        $this->contact->setFirstname("John");
        $this->contact->setLastname("Doe");
        $this->contact->setEmail("example@mail.com");
        $this->contact->setPhoneNumber("555788561");
        $this->contact->setTag("123544");
    }

    public function testFirstNameNotEmpty() {
        $this->assertNotEmpty($this->contact->getFirstname());
    }

    public function testLastNameNotEmpty() {
        $this->assertNotEmpty($this->contact->getLastname());
    }

    public function testValidEmail() {
        $this->assertSame($this->contact->getEmail(), filter_var($this->contact->getEmail(), FILTER_VALIDATE_EMAIL));
    }
}
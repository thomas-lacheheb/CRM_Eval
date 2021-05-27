<?php

namespace tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Contact;

class ContactTest extends TestCase {

    protected $contact;

    protected function setUp(): void
    {
        $this->contact = new Contact();
    }

    public function testFirstNameNotEmpty() {
        $this->assertEmpty($this->contact->getFirstname());
        $this->contact->setFirstname("John");
        $this->assertNotEmpty($this->contact->getFirstname());
    }

    public function testLastNameNotEmpty() {
        $this->assertEmpty($this->contact->getLastname());
        $this->contact->setLastname("Doe");
        $this->assertNotEmpty($this->contact->getLastname());
    }

    public function testValidEmail() {
        $this->assertEmpty($this->contact->getEmail());
        $this->contact->setEmail("example@mail.com");
        $this->assertNotEmpty($this->contact->getEmail());
        $this->assertSame($this->contact->getEmail(), filter_var($this->contact->getEmail(), FILTER_VALIDATE_EMAIL));
    }

    public function testPhoneNumber() {
        $this->assertEmpty($this->contact->getPhoneNumber());
        $this->contact->setPhoneNumber("0605040302");
        $this->assertNotEmpty($this->contact->getPhoneNumber());
        $this->assertGreaterThanOrEqual(10, strlen($this->contact->getPhoneNumber()));
    }

    public function testTag() {
        $this->assertEmpty($this->contact->getTag());
        $this->contact->setTag("123544");
        $this->assertNotEmpty($this->contact->getTag());
    }
}
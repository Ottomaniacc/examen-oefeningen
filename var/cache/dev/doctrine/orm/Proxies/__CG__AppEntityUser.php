<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'address' => [parent::class, 'address', null],
        "\0".parent::class."\0".'appointmentSpecialist' => [parent::class, 'appointmentSpecialist', null],
        "\0".parent::class."\0".'appointments' => [parent::class, 'appointments', null],
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'firstName' => [parent::class, 'firstName', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'lastName' => [parent::class, 'lastName', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'specialization' => [parent::class, 'specialization', null],
        "\0".parent::class."\0".'zipCode' => [parent::class, 'zipCode', null],
        'address' => [parent::class, 'address', null],
        'appointmentSpecialist' => [parent::class, 'appointmentSpecialist', null],
        'appointments' => [parent::class, 'appointments', null],
        'city' => [parent::class, 'city', null],
        'email' => [parent::class, 'email', null],
        'firstName' => [parent::class, 'firstName', null],
        'id' => [parent::class, 'id', null],
        'lastName' => [parent::class, 'lastName', null],
        'password' => [parent::class, 'password', null],
        'roles' => [parent::class, 'roles', null],
        'specialization' => [parent::class, 'specialization', null],
        'zipCode' => [parent::class, 'zipCode', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}

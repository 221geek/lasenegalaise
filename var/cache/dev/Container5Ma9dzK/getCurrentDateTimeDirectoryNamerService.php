<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer' shared service.

include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/DirectoryNamerInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/ConfigurableInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/CurrentDateTimeDirectoryNamer.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/DateTimeHelper.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/CurrentDateTimeHelper.php';

return $this->services['Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer(new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper(), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));

<?php
namespace Composer\Installers;

class ComponentInstaller extends BaseInstaller
{
    protected $locations = array(
        'component' => 'components/{$name}/',
    );
}

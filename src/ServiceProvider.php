<?php

declare(strict_types=1);

namespace BombenProdukt\BladeIcons\IcoMoon;

use BombenProdukt\BladeIcons\Facades\IconFamilyRegistry;
use BombenProdukt\BladeIcons\IconFamily;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            IconFamily::fromDirectory('icomoon', __DIR__.'/../resources/svg'),
        );
    }
}

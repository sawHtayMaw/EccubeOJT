<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC54augf\EccubeProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC54augf/EccubeProdProjectContainer.php') {
    touch(__DIR__.'/ContainerC54augf.legacy');

    return;
}

if (!\class_exists(EccubeProdProjectContainer::class, false)) {
    \class_alias(\ContainerC54augf\EccubeProdProjectContainer::class, EccubeProdProjectContainer::class, false);
}

return new \ContainerC54augf\EccubeProdProjectContainer([
    'container.build_hash' => 'C54augf',
    'container.build_id' => 'aebf2213',
    'container.build_time' => 1615545233,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC54augf');

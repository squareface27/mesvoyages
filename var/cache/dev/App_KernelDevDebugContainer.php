<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUgQrh3r\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUgQrh3r/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUgQrh3r.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUgQrh3r\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUgQrh3r\App_KernelDevDebugContainer([
    'container.build_hash' => 'UgQrh3r',
    'container.build_id' => 'a7b20fa6',
    'container.build_time' => 1694117327,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUgQrh3r');

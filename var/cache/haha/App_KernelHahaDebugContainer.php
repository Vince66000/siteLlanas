<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUSENz0O\App_KernelHahaDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUSENz0O/App_KernelHahaDebugContainer.php') {
    touch(__DIR__.'/ContainerUSENz0O.legacy');

    return;
}

if (!\class_exists(App_KernelHahaDebugContainer::class, false)) {
    \class_alias(\ContainerUSENz0O\App_KernelHahaDebugContainer::class, App_KernelHahaDebugContainer::class, false);
}

return new \ContainerUSENz0O\App_KernelHahaDebugContainer([
    'container.build_hash' => 'USENz0O',
    'container.build_id' => 'b4eef8a0',
    'container.build_time' => 1586791991,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUSENz0O');
<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRFoCNag\App_KernelProductionDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRFoCNag/App_KernelProductionDebugContainer.php') {
    touch(__DIR__.'/ContainerRFoCNag.legacy');

    return;
}

if (!\class_exists(App_KernelProductionDebugContainer::class, false)) {
    \class_alias(\ContainerRFoCNag\App_KernelProductionDebugContainer::class, App_KernelProductionDebugContainer::class, false);
}

return new \ContainerRFoCNag\App_KernelProductionDebugContainer([
    'container.build_hash' => 'RFoCNag',
    'container.build_id' => 'f1a622ce',
    'container.build_time' => 1586791959,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRFoCNag');

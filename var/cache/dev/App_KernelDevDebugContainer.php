<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKDI5gQZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKDI5gQZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKDI5gQZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKDI5gQZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKDI5gQZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'KDI5gQZ',
    'container.build_id' => 'c8fad1dd',
    'container.build_time' => 1581434930,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKDI5gQZ');

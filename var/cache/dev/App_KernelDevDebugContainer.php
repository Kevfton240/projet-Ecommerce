<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWKKTV8N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWKKTV8N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWKKTV8N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWKKTV8N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWKKTV8N\App_KernelDevDebugContainer([
    'container.build_hash' => 'WKKTV8N',
    'container.build_id' => '3403dfa5',
    'container.build_time' => 1690078872,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWKKTV8N');
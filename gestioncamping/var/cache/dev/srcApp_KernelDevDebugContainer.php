<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQjCaYiu\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQjCaYiu/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQjCaYiu.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQjCaYiu\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQjCaYiu\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QjCaYiu',
    'container.build_id' => '7e81a8e9',
    'container.build_time' => 1649745424,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQjCaYiu');
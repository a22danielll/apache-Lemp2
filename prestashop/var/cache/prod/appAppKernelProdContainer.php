<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDDOxxkT\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDDOxxkT/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerDDOxxkT.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerDDOxxkT\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerDDOxxkT\appAppKernelProdContainer([
    'container.build_hash' => 'DDOxxkT',
    'container.build_id' => '718ed7b1',
    'container.build_time' => 1685535473,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDDOxxkT');

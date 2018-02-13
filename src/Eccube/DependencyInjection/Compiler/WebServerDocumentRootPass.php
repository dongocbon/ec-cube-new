<?php

namespace Eccube\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class WebServerDocumentRootPass implements CompilerPassInterface
{
    /**
     * @var string
     */
    protected $docroot;

    public function __construct($docroot = '%kernel.project_dir%/')
    {
        $this->docroot = $docroot;
    }

    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('web_server.command.server_run')) {
            return;
        }

        // WebServerBundleのドキュメントルート指定をpublicからルートディレクトリに変更する.
        $run = $container->findDefinition('web_server.command.server_run');
        $run->replaceArgument(0, $this->docroot);

        $start = $container->findDefinition('web_server.command.server_start');
        $start->replaceArgument(0, $this->docroot);
    }
}
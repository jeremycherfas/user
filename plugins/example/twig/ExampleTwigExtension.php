<?php
namespace Grav\Plugin;
class ExampleTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'ExampleTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('example', [$this, 'exampleFunction'])
        ];
    }
    public function exampleFunction()
    {
        return 'something';
    }
}
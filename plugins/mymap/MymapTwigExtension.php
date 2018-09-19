<?php
namespace Grav\Plugin;
class MymapTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'MymapTwigExtension';
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
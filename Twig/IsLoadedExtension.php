<?php

namespace APNet\Bundle\APMetronicBundle\Twig;

class IsLoadedExtension extends \Twig_Extension
{
    /**
     * @var \Twig_Environment
     */
    protected $environment;

    public function __construct(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getTests()
    {
        return array(
                new \Twig_SimpleTest('loaded', array($this, 'hasExtension')),
        );
    }

    /**
     * @param string $name
     * @return boolean
     */
    function hasExtension($name)
    {
        return $this->environment->hasExtension($name);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'IsLoadedExtension';
    }

}

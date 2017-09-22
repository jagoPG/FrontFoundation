<?php

/* node_modules/core-js/es7/weak-set.js */
class __TwigTemplate_dd0fd3c4fd3731bc36204a305b27a426c0dd64e83dedec7584b5f9d09a521c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f6deb116214c24e665430a9e9ef208e18e7182c14fda846f8dc114ef70f0843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6deb116214c24e665430a9e9ef208e18e7182c14fda846f8dc114ef70f0843->enter($__internal_9f6deb116214c24e665430a9e9ef208e18e7182c14fda846f8dc114ef70f0843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/weak-set.js"));

        // line 1
        echo "require('../modules/es7.weak-set.of');
require('../modules/es7.weak-set.from');
module.exports = require('../modules/_core').WeakSet;
";
        
        $__internal_9f6deb116214c24e665430a9e9ef208e18e7182c14fda846f8dc114ef70f0843->leave($__internal_9f6deb116214c24e665430a9e9ef208e18e7182c14fda846f8dc114ef70f0843_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.weak-set.of');
require('../modules/es7.weak-set.from');
module.exports = require('../modules/_core').WeakSet;
", "node_modules/core-js/es7/weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/weak-set.js");
    }
}

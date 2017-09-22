<?php

/* node_modules/core-js/fn/string/repeat.js */
class __TwigTemplate_bd3117d54ddb241e93436c1df2f4ed6982d0727691a3e6416e7a40b43b8c2aac extends Twig_Template
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
        $__internal_bbc3bfb80f65949b746a0ecb0a54fb3d1109a4887f4cfb13e628e3425138dda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc3bfb80f65949b746a0ecb0a54fb3d1109a4887f4cfb13e628e3425138dda2->enter($__internal_bbc3bfb80f65949b746a0ecb0a54fb3d1109a4887f4cfb13e628e3425138dda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/repeat.js"));

        // line 1
        echo "require('../../modules/es6.string.repeat');
module.exports = require('../../modules/_core').String.repeat;
";
        
        $__internal_bbc3bfb80f65949b746a0ecb0a54fb3d1109a4887f4cfb13e628e3425138dda2->leave($__internal_bbc3bfb80f65949b746a0ecb0a54fb3d1109a4887f4cfb13e628e3425138dda2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.repeat');
module.exports = require('../../modules/_core').String.repeat;
", "node_modules/core-js/fn/string/repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/repeat.js");
    }
}

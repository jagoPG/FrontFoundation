<?php

/* node_modules/core-js/fn/object/make.js */
class __TwigTemplate_c1fab85cd28c8b24815111270a270037cf6bdf678557c6b2a864d73c6da964ef extends Twig_Template
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
        $__internal_67ac91255a256e3b5b2efb6a7e5e48a163f2b921cc8c733242f60891847ef836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ac91255a256e3b5b2efb6a7e5e48a163f2b921cc8c733242f60891847ef836->enter($__internal_67ac91255a256e3b5b2efb6a7e5e48a163f2b921cc8c733242f60891847ef836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/make.js"));

        // line 1
        echo "require('../../modules/core.object.make');
module.exports = require('../../modules/_core').Object.make;
";
        
        $__internal_67ac91255a256e3b5b2efb6a7e5e48a163f2b921cc8c733242f60891847ef836->leave($__internal_67ac91255a256e3b5b2efb6a7e5e48a163f2b921cc8c733242f60891847ef836_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/make.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.make');
module.exports = require('../../modules/_core').Object.make;
", "node_modules/core-js/fn/object/make.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/make.js");
    }
}

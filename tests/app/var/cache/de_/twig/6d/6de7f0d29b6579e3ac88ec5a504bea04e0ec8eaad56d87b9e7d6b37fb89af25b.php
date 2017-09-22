<?php

/* node_modules/core-js/library/fn/reflect/own-keys.js */
class __TwigTemplate_4b8de4dbe1cb1b8cf1a2d76e55b02ff37db7fd2849024883b5fbb4fad07bd418 extends Twig_Template
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
        $__internal_d190ac819977e6db8c1431116bd7873f658f18bee3b0c127de6c3a7576483cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d190ac819977e6db8c1431116bd7873f658f18bee3b0c127de6c3a7576483cab->enter($__internal_d190ac819977e6db8c1431116bd7873f658f18bee3b0c127de6c3a7576483cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/own-keys.js"));

        // line 1
        echo "require('../../modules/es6.reflect.own-keys');
module.exports = require('../../modules/_core').Reflect.ownKeys;
";
        
        $__internal_d190ac819977e6db8c1431116bd7873f658f18bee3b0c127de6c3a7576483cab->leave($__internal_d190ac819977e6db8c1431116bd7873f658f18bee3b0c127de6c3a7576483cab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/own-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.own-keys');
module.exports = require('../../modules/_core').Reflect.ownKeys;
", "node_modules/core-js/library/fn/reflect/own-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/own-keys.js");
    }
}

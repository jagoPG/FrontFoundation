<?php

/* node_modules/core-js/library/fn/reflect/apply.js */
class __TwigTemplate_4e8bfd1bf94e5ae324c0aad8db4c936e613c48535a41b5a0b6b4e325ec88b94e extends Twig_Template
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
        $__internal_7711ff0d424decd260702e0a753a17d2054b019cb0a107d6960f0158e889a6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7711ff0d424decd260702e0a753a17d2054b019cb0a107d6960f0158e889a6ba->enter($__internal_7711ff0d424decd260702e0a753a17d2054b019cb0a107d6960f0158e889a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/apply.js"));

        // line 1
        echo "require('../../modules/es6.reflect.apply');
module.exports = require('../../modules/_core').Reflect.apply;
";
        
        $__internal_7711ff0d424decd260702e0a753a17d2054b019cb0a107d6960f0158e889a6ba->leave($__internal_7711ff0d424decd260702e0a753a17d2054b019cb0a107d6960f0158e889a6ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/apply.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.apply');
module.exports = require('../../modules/_core').Reflect.apply;
", "node_modules/core-js/library/fn/reflect/apply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/apply.js");
    }
}

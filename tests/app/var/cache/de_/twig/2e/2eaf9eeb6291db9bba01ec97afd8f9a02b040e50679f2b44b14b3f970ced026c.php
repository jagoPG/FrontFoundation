<?php

/* node_modules/core-js/fn/string/virtual/trim-start.js */
class __TwigTemplate_098021d054fc67ab4013dacc0f36cfd22cb3670a9c8681d6145f2b13921856fb extends Twig_Template
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
        $__internal_5b1c35322ff9525c9e8ca4cf12b7c55adbad26440326d5e9ffd3986bf4b8b94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1c35322ff9525c9e8ca4cf12b7c55adbad26440326d5e9ffd3986bf4b8b94d->enter($__internal_5b1c35322ff9525c9e8ca4cf12b7c55adbad26440326d5e9ffd3986bf4b8b94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/trim-start.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
";
        
        $__internal_5b1c35322ff9525c9e8ca4cf12b7c55adbad26440326d5e9ffd3986bf4b8b94d->leave($__internal_5b1c35322ff9525c9e8ca4cf12b7c55adbad26440326d5e9ffd3986bf4b8b94d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/trim-start.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
", "node_modules/core-js/fn/string/virtual/trim-start.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/trim-start.js");
    }
}

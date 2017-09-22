<?php

/* node_modules/core-js/library/fn/string/virtual/trim-left.js */
class __TwigTemplate_6b65f2130863370de09847565107ce40584fc3c1dd46260e44039cb68d4a301f extends Twig_Template
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
        $__internal_88223e9a05873dc586bdf7fcbd0c47cf33d9492fd4d078f81d308fde7b7ad3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88223e9a05873dc586bdf7fcbd0c47cf33d9492fd4d078f81d308fde7b7ad3b8->enter($__internal_88223e9a05873dc586bdf7fcbd0c47cf33d9492fd4d078f81d308fde7b7ad3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/trim-left.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
";
        
        $__internal_88223e9a05873dc586bdf7fcbd0c47cf33d9492fd4d078f81d308fde7b7ad3b8->leave($__internal_88223e9a05873dc586bdf7fcbd0c47cf33d9492fd4d078f81d308fde7b7ad3b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/trim-left.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
", "node_modules/core-js/library/fn/string/virtual/trim-left.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/trim-left.js");
    }
}

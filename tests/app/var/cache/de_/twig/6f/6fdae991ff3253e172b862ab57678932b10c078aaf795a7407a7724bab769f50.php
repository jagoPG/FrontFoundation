<?php

/* node_modules/core-js/fn/string/virtual/fontsize.js */
class __TwigTemplate_5586717ed5ecc292371c27d50397674323c4a25cc8f361bb470d20ac7503e831 extends Twig_Template
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
        $__internal_90400665434c4f7276450da506553b62371f66506faf4e9dfbdcd16f44eef555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90400665434c4f7276450da506553b62371f66506faf4e9dfbdcd16f44eef555->enter($__internal_90400665434c4f7276450da506553b62371f66506faf4e9dfbdcd16f44eef555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/fontsize.js"));

        // line 1
        echo "require('../../../modules/es6.string.fontsize');
module.exports = require('../../../modules/_entry-virtual')('String').fontsize;
";
        
        $__internal_90400665434c4f7276450da506553b62371f66506faf4e9dfbdcd16f44eef555->leave($__internal_90400665434c4f7276450da506553b62371f66506faf4e9dfbdcd16f44eef555_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/fontsize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.fontsize');
module.exports = require('../../../modules/_entry-virtual')('String').fontsize;
", "node_modules/core-js/fn/string/virtual/fontsize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/fontsize.js");
    }
}

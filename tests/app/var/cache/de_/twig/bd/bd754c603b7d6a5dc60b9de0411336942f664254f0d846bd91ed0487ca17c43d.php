<?php

/* node_modules/core-js/fn/string/virtual/trim-right.js */
class __TwigTemplate_9bd2958d5882c66aa94068b42aee8d00242ebd579a972deacfce1004eb358b3d extends Twig_Template
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
        $__internal_ea4086c4d2c677ada97eda8ac3426675e65a80de80cb5ece35cf55ea0c7be199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4086c4d2c677ada97eda8ac3426675e65a80de80cb5ece35cf55ea0c7be199->enter($__internal_ea4086c4d2c677ada97eda8ac3426675e65a80de80cb5ece35cf55ea0c7be199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/trim-right.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
";
        
        $__internal_ea4086c4d2c677ada97eda8ac3426675e65a80de80cb5ece35cf55ea0c7be199->leave($__internal_ea4086c4d2c677ada97eda8ac3426675e65a80de80cb5ece35cf55ea0c7be199_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/trim-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
", "node_modules/core-js/fn/string/virtual/trim-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/trim-right.js");
    }
}

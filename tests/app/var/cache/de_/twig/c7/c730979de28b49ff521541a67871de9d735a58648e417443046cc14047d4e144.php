<?php

/* node_modules/core-js/fn/object/define-getter.js */
class __TwigTemplate_646e9cad608fb0cc736d680797f5ffc4f66d86e069e2757a77987a371cf285ca extends Twig_Template
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
        $__internal_2f9df2f3164c0035e7cf17cc4966e7e17a96e6fa0a57e6108ed0f2d8559016cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9df2f3164c0035e7cf17cc4966e7e17a96e6fa0a57e6108ed0f2d8559016cb->enter($__internal_2f9df2f3164c0035e7cf17cc4966e7e17a96e6fa0a57e6108ed0f2d8559016cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/define-getter.js"));

        // line 1
        echo "require('../../modules/es7.object.define-getter');
module.exports = require('../../modules/_core').Object.__defineGetter__;
";
        
        $__internal_2f9df2f3164c0035e7cf17cc4966e7e17a96e6fa0a57e6108ed0f2d8559016cb->leave($__internal_2f9df2f3164c0035e7cf17cc4966e7e17a96e6fa0a57e6108ed0f2d8559016cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/define-getter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.define-getter');
module.exports = require('../../modules/_core').Object.__defineGetter__;
", "node_modules/core-js/fn/object/define-getter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/define-getter.js");
    }
}

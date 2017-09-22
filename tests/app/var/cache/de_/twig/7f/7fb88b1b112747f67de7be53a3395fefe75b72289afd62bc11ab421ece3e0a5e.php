<?php

/* node_modules/core-js/library/es7/global.js */
class __TwigTemplate_126eb93a2505f2b7f3f6247440a098f21fa3bfef977fea301d93435d5c317843 extends Twig_Template
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
        $__internal_0fc172b5d0ddc10161bdcb6dc40eafa267a9a8c9d22cc4954abd050fff785fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc172b5d0ddc10161bdcb6dc40eafa267a9a8c9d22cc4954abd050fff785fa9->enter($__internal_0fc172b5d0ddc10161bdcb6dc40eafa267a9a8c9d22cc4954abd050fff785fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/global.js"));

        // line 1
        echo "require('../modules/es7.global');
module.exports = require('../modules/_core').global;
";
        
        $__internal_0fc172b5d0ddc10161bdcb6dc40eafa267a9a8c9d22cc4954abd050fff785fa9->leave($__internal_0fc172b5d0ddc10161bdcb6dc40eafa267a9a8c9d22cc4954abd050fff785fa9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.global');
module.exports = require('../modules/_core').global;
", "node_modules/core-js/library/es7/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/global.js");
    }
}

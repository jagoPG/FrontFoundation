<?php

/* node_modules/core-js/library/modules/_html.js */
class __TwigTemplate_cb48224d017234a0cae0b19b022da91676d7c40fa97bf34b2e74c620c1f239b2 extends Twig_Template
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
        $__internal_26ccc96f68ff593906fe4ec6285f5f5a829d8bd5f4f87d2e85de6343934b79af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ccc96f68ff593906fe4ec6285f5f5a829d8bd5f4f87d2e85de6343934b79af->enter($__internal_26ccc96f68ff593906fe4ec6285f5f5a829d8bd5f4f87d2e85de6343934b79af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_html.js"));

        // line 1
        echo "var document = require('./_global').document;
module.exports = document && document.documentElement;
";
        
        $__internal_26ccc96f68ff593906fe4ec6285f5f5a829d8bd5f4f87d2e85de6343934b79af->leave($__internal_26ccc96f68ff593906fe4ec6285f5f5a829d8bd5f4f87d2e85de6343934b79af_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var document = require('./_global').document;
module.exports = document && document.documentElement;
", "node_modules/core-js/library/modules/_html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_html.js");
    }
}

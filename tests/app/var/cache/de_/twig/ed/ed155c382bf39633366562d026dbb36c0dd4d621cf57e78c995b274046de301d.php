<?php

/* node_modules/querystring/test/tap-index.js */
class __TwigTemplate_07f24230ea11b30dc6de737ab040d479c11d0954e36fc0c33ede7f45965958dd extends Twig_Template
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
        $__internal_f87c9abc06fe2733463bfdddcda415972366df6bdeb3a453c2c0136c2103809a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87c9abc06fe2733463bfdddcda415972366df6bdeb3a453c2c0136c2103809a->enter($__internal_f87c9abc06fe2733463bfdddcda415972366df6bdeb3a453c2c0136c2103809a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/querystring/test/tap-index.js"));

        // line 1
        echo "\"use strict\";

require(\"retape\")(require(\"./index\"))";
        
        $__internal_f87c9abc06fe2733463bfdddcda415972366df6bdeb3a453c2c0136c2103809a->leave($__internal_f87c9abc06fe2733463bfdddcda415972366df6bdeb3a453c2c0136c2103809a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/querystring/test/tap-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

require(\"retape\")(require(\"./index\"))", "node_modules/querystring/test/tap-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/querystring/test/tap-index.js");
    }
}

<?php

/* node_modules/es5-ext/test/number/is-finite/implement.js */
class __TwigTemplate_eb2f8382202f3b8cfa21c25c9118418572c251db09ca9a9b102bfc8a591544d6 extends Twig_Template
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
        $__internal_308bf3c4c0cdb5e19284a0e0cc812548caf0d605c0960f7610ad2a7de916667c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308bf3c4c0cdb5e19284a0e0cc812548caf0d605c0960f7610ad2a7de916667c->enter($__internal_308bf3c4c0cdb5e19284a0e0cc812548caf0d605c0960f7610ad2a7de916667c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-finite/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../number/is-finite/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_308bf3c4c0cdb5e19284a0e0cc812548caf0d605c0960f7610ad2a7de916667c->leave($__internal_308bf3c4c0cdb5e19284a0e0cc812548caf0d605c0960f7610ad2a7de916667c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-finite/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../number/is-finite/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/number/is-finite/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-finite/implement.js");
    }
}

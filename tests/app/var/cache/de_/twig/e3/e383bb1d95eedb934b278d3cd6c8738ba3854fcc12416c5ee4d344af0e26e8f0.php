<?php

/* node_modules/es5-ext/reg-exp/#/search/shim.js */
class __TwigTemplate_63e26314e7cdfd8d269f2899dd582a45903ea6242bea826fd6af776e32b4c9c2 extends Twig_Template
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
        $__internal_b61ae8f6523537dbf39568e6ce9574f1d07457a6ba2f4e4a31b5a51737f50812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61ae8f6523537dbf39568e6ce9574f1d07457a6ba2f4e4a31b5a51737f50812->enter($__internal_b61ae8f6523537dbf39568e6ce9574f1d07457a6ba2f4e4a31b5a51737f50812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/search/shim.js"));

        // line 1
        echo "\"use strict\";

var validRegExp = require(\"../../valid-reg-exp\");

module.exports = function (string) {
\tvalidRegExp(this);
\treturn String(string).search(this);
};
";
        
        $__internal_b61ae8f6523537dbf39568e6ce9574f1d07457a6ba2f4e4a31b5a51737f50812->leave($__internal_b61ae8f6523537dbf39568e6ce9574f1d07457a6ba2f4e4a31b5a51737f50812_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/search/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var validRegExp = require(\"../../valid-reg-exp\");

module.exports = function (string) {
\tvalidRegExp(this);
\treturn String(string).search(this);
};
", "node_modules/es5-ext/reg-exp/#/search/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/search/shim.js");
    }
}

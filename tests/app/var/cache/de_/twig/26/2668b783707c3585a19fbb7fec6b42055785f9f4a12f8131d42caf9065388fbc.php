<?php

/* node_modules/es5-ext/test/array/#/entries/implement.js */
class __TwigTemplate_2876e0d2cd56ea116766f15fa916b91e11c638b5947522594db1ad6e0cb14796 extends Twig_Template
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
        $__internal_99ce8bbf2ddcec87f73eec6e1b94936606df843dfbe448129fcc0a96f385a791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ce8bbf2ddcec87f73eec6e1b94936606df843dfbe448129fcc0a96f385a791->enter($__internal_99ce8bbf2ddcec87f73eec6e1b94936606df843dfbe448129fcc0a96f385a791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/entries/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/entries/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_99ce8bbf2ddcec87f73eec6e1b94936606df843dfbe448129fcc0a96f385a791->leave($__internal_99ce8bbf2ddcec87f73eec6e1b94936606df843dfbe448129fcc0a96f385a791_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/entries/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/entries/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/entries/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/entries/implement.js");
    }
}

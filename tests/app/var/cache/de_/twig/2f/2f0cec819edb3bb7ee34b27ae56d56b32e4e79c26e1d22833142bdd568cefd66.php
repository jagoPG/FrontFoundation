<?php

/* node_modules/es5-ext/test/number/is-nan/implement.js */
class __TwigTemplate_14b957f2f8359846cd42161a4af7e58032b26299c1d389cfdc6551e8fa0b8162 extends Twig_Template
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
        $__internal_2cc44cb16221b0937e9e9dfec5fa8c14f80b4cbe8554be52ae6be0b789d6b4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc44cb16221b0937e9e9dfec5fa8c14f80b4cbe8554be52ae6be0b789d6b4ee->enter($__internal_2cc44cb16221b0937e9e9dfec5fa8c14f80b4cbe8554be52ae6be0b789d6b4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-nan/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../number/is-nan/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_2cc44cb16221b0937e9e9dfec5fa8c14f80b4cbe8554be52ae6be0b789d6b4ee->leave($__internal_2cc44cb16221b0937e9e9dfec5fa8c14f80b4cbe8554be52ae6be0b789d6b4ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-nan/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../number/is-nan/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/number/is-nan/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-nan/implement.js");
    }
}

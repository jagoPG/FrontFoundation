<?php

/* node_modules/es5-ext/reg-exp/is-reg-exp.js */
class __TwigTemplate_79010b5c32b63634e53dec230443807c04542224078620ed217f9ce08f344f1f extends Twig_Template
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
        $__internal_89f6079f5e84339b29e308e728e58b46c42db2437ac86bfdf4a3e6efef189bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f6079f5e84339b29e308e728e58b46c42db2437ac86bfdf4a3e6efef189bce->enter($__internal_89f6079f5e84339b29e308e728e58b46c42db2437ac86bfdf4a3e6efef189bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/is-reg-exp.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(/a/);

module.exports = function (value) {
\treturn (value && (value instanceof RegExp || objToString.call(value) === id)) || false;
};
";
        
        $__internal_89f6079f5e84339b29e308e728e58b46c42db2437ac86bfdf4a3e6efef189bce->leave($__internal_89f6079f5e84339b29e308e728e58b46c42db2437ac86bfdf4a3e6efef189bce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/is-reg-exp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(/a/);

module.exports = function (value) {
\treturn (value && (value instanceof RegExp || objToString.call(value) === id)) || false;
};
", "node_modules/es5-ext/reg-exp/is-reg-exp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/is-reg-exp.js");
    }
}

<?php

/* node_modules/core-js/library/modules/_shared-key.js */
class __TwigTemplate_5b882e6754d3bdcf78c92fa089c038b53d28b83d66d01bdd935c4ec4bab415a2 extends Twig_Template
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
        $__internal_3cd57cff94f42bd20041110459d1697d8839c968dd7fc2f799a1d9caabc4d907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd57cff94f42bd20041110459d1697d8839c968dd7fc2f799a1d9caabc4d907->enter($__internal_3cd57cff94f42bd20041110459d1697d8839c968dd7fc2f799a1d9caabc4d907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_shared-key.js"));

        // line 1
        echo "var shared = require('./_shared')('keys');
var uid = require('./_uid');
module.exports = function (key) {
  return shared[key] || (shared[key] = uid(key));
};
";
        
        $__internal_3cd57cff94f42bd20041110459d1697d8839c968dd7fc2f799a1d9caabc4d907->leave($__internal_3cd57cff94f42bd20041110459d1697d8839c968dd7fc2f799a1d9caabc4d907_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_shared-key.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var shared = require('./_shared')('keys');
var uid = require('./_uid');
module.exports = function (key) {
  return shared[key] || (shared[key] = uid(key));
};
", "node_modules/core-js/library/modules/_shared-key.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_shared-key.js");
    }
}

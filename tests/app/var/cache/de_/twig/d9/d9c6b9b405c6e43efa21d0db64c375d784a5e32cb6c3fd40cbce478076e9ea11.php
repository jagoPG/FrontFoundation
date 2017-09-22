<?php

/* node_modules/core-js/modules/_dom-create.js */
class __TwigTemplate_cd80d4d8310e6a2566531bbfee1a70a21a14a26ef043c5b51dc26ea7b578a8ab extends Twig_Template
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
        $__internal_7345c45f6c97bbb07cf63d3d263b5584d77275b5a811de2b26c04996cffbf8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7345c45f6c97bbb07cf63d3d263b5584d77275b5a811de2b26c04996cffbf8c7->enter($__internal_7345c45f6c97bbb07cf63d3d263b5584d77275b5a811de2b26c04996cffbf8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_dom-create.js"));

        // line 1
        echo "var isObject = require('./_is-object');
var document = require('./_global').document;
// typeof document.createElement is 'object' in old IE
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};
";
        
        $__internal_7345c45f6c97bbb07cf63d3d263b5584d77275b5a811de2b26c04996cffbf8c7->leave($__internal_7345c45f6c97bbb07cf63d3d263b5584d77275b5a811de2b26c04996cffbf8c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_dom-create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
var document = require('./_global').document;
// typeof document.createElement is 'object' in old IE
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};
", "node_modules/core-js/modules/_dom-create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_dom-create.js");
    }
}

<?php

/* node_modules/es5-ext/object/validate-array-like-object.js */
class __TwigTemplate_95939f5f50850292b9ffde4de1b7dc9f2557a678e0b6ff4450789d775ad12764 extends Twig_Template
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
        $__internal_42f51edd308512dfeb5b489c4bff2a72ff47d68c1a24357897a4ee003af69143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f51edd308512dfeb5b489c4bff2a72ff47d68c1a24357897a4ee003af69143->enter($__internal_42f51edd308512dfeb5b489c4bff2a72ff47d68c1a24357897a4ee003af69143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/validate-array-like-object.js"));

        // line 1
        echo "\"use strict\";

var isArrayLike = require(\"./is-array-like\")
  , isObject    = require(\"./is-object\");

module.exports = function (obj) {
\tif (isObject(obj) && isArrayLike(obj)) return obj;
\tthrow new TypeError(obj + \" is not array-like object\");
};
";
        
        $__internal_42f51edd308512dfeb5b489c4bff2a72ff47d68c1a24357897a4ee003af69143->leave($__internal_42f51edd308512dfeb5b489c4bff2a72ff47d68c1a24357897a4ee003af69143_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/validate-array-like-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isArrayLike = require(\"./is-array-like\")
  , isObject    = require(\"./is-object\");

module.exports = function (obj) {
\tif (isObject(obj) && isArrayLike(obj)) return obj;
\tthrow new TypeError(obj + \" is not array-like object\");
};
", "node_modules/es5-ext/object/validate-array-like-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/validate-array-like-object.js");
    }
}

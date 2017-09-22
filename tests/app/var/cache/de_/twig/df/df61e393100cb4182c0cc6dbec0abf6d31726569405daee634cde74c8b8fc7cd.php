<?php

/* node_modules/es5-ext/object/get-property-names.js */
class __TwigTemplate_49d13da6de9a037e213ee90b9b10de5fd2b5c8bdcd7571ba074db14805feed24 extends Twig_Template
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
        $__internal_b6811208422217a5c6278544caa51d1b214164e327c7a9470b0a200d05d7e4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6811208422217a5c6278544caa51d1b214164e327c7a9470b0a200d05d7e4c6->enter($__internal_b6811208422217a5c6278544caa51d1b214164e327c7a9470b0a200d05d7e4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/get-property-names.js"));

        // line 1
        echo "\"use strict\";

var uniq                = require(\"../array/#/uniq\")
  , value               = require(\"./valid-value\")
  , push                = Array.prototype.push
  , getOwnPropertyNames = Object.getOwnPropertyNames
  , getPrototypeOf      = Object.getPrototypeOf;

module.exports = function (obj) {
\tvar keys;
\tobj = Object(value(obj));
\tkeys = getOwnPropertyNames(obj);
\twhile ((obj = getPrototypeOf(obj))) {
\t\tpush.apply(keys, getOwnPropertyNames(obj));
\t}
\treturn uniq.call(keys);
};
";
        
        $__internal_b6811208422217a5c6278544caa51d1b214164e327c7a9470b0a200d05d7e4c6->leave($__internal_b6811208422217a5c6278544caa51d1b214164e327c7a9470b0a200d05d7e4c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/get-property-names.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var uniq                = require(\"../array/#/uniq\")
  , value               = require(\"./valid-value\")
  , push                = Array.prototype.push
  , getOwnPropertyNames = Object.getOwnPropertyNames
  , getPrototypeOf      = Object.getPrototypeOf;

module.exports = function (obj) {
\tvar keys;
\tobj = Object(value(obj));
\tkeys = getOwnPropertyNames(obj);
\twhile ((obj = getPrototypeOf(obj))) {
\t\tpush.apply(keys, getOwnPropertyNames(obj));
\t}
\treturn uniq.call(keys);
};
", "node_modules/es5-ext/object/get-property-names.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/get-property-names.js");
    }
}

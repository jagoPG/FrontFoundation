<?php

/* node_modules/es5-ext/object/is-plain-object.js */
class __TwigTemplate_42c1b8f9cc3c4fc1222ce67e4fceeda43bd9628649757d46c227a8a09a53357c extends Twig_Template
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
        $__internal_2dc5af6fa290009d3492eee1145ba2ccb65fe766774402d7baf2d668b468728e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc5af6fa290009d3492eee1145ba2ccb65fe766774402d7baf2d668b468728e->enter($__internal_2dc5af6fa290009d3492eee1145ba2ccb65fe766774402d7baf2d668b468728e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-plain-object.js"));

        // line 1
        echo "\"use strict\";

var getPrototypeOf = Object.getPrototypeOf
  , prototype = Object.prototype
  , objToString = prototype.toString
  , id = Object().toString();

module.exports = function (value) {
\tvar proto, valueConstructor;
\tif (!value || typeof value !== \"object\" || objToString.call(value) !== id) {
\t\treturn false;
\t}
\tproto = getPrototypeOf(value);
\tif (proto === null) {
\t\tvalueConstructor = value.constructor;
\t\tif (typeof valueConstructor !== \"function\") return true;
\t\treturn valueConstructor.prototype !== value;
\t}
\treturn proto === prototype || getPrototypeOf(proto) === null;
};
";
        
        $__internal_2dc5af6fa290009d3492eee1145ba2ccb65fe766774402d7baf2d668b468728e->leave($__internal_2dc5af6fa290009d3492eee1145ba2ccb65fe766774402d7baf2d668b468728e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-plain-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var getPrototypeOf = Object.getPrototypeOf
  , prototype = Object.prototype
  , objToString = prototype.toString
  , id = Object().toString();

module.exports = function (value) {
\tvar proto, valueConstructor;
\tif (!value || typeof value !== \"object\" || objToString.call(value) !== id) {
\t\treturn false;
\t}
\tproto = getPrototypeOf(value);
\tif (proto === null) {
\t\tvalueConstructor = value.constructor;
\t\tif (typeof valueConstructor !== \"function\") return true;
\t\treturn valueConstructor.prototype !== value;
\t}
\treturn proto === prototype || getPrototypeOf(proto) === null;
};
", "node_modules/es5-ext/object/is-plain-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-plain-object.js");
    }
}

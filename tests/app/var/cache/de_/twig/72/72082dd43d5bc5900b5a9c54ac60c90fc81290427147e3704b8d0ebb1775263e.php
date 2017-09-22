<?php

/* node_modules/es5-ext/optional-chaining.js */
class __TwigTemplate_ee4dd2849703ac44d78d371fc2241702f9da43ef8e7bcf0050f532a27a0301b6 extends Twig_Template
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
        $__internal_bbffbc6885932e083ef6050e0f41d1e5013aeea16ce433ec1253b47e0a41c6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbffbc6885932e083ef6050e0f41d1e5013aeea16ce433ec1253b47e0a41c6ac->enter($__internal_bbffbc6885932e083ef6050e0f41d1e5013aeea16ce433ec1253b47e0a41c6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/optional-chaining.js"));

        // line 1
        echo "\"use strict\";

var isValue = require(\"./object/is-value\");

var slice = Array.prototype.slice;

// eslint-disable-next-line no-unused-vars
module.exports = function (value, propertyName1 /*, …propertyNamen*/) {
\tvar propertyNames = slice.call(arguments, 1), index = 0, length = propertyNames.length;
\twhile (isValue(value) && index < length) value = value[propertyNames[index++]];
\treturn index === length ? value : undefined;
};
";
        
        $__internal_bbffbc6885932e083ef6050e0f41d1e5013aeea16ce433ec1253b47e0a41c6ac->leave($__internal_bbffbc6885932e083ef6050e0f41d1e5013aeea16ce433ec1253b47e0a41c6ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/optional-chaining.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValue = require(\"./object/is-value\");

var slice = Array.prototype.slice;

// eslint-disable-next-line no-unused-vars
module.exports = function (value, propertyName1 /*, …propertyNamen*/) {
\tvar propertyNames = slice.call(arguments, 1), index = 0, length = propertyNames.length;
\twhile (isValue(value) && index < length) value = value[propertyNames[index++]];
\treturn index === length ? value : undefined;
};
", "node_modules/es5-ext/optional-chaining.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/optional-chaining.js");
    }
}

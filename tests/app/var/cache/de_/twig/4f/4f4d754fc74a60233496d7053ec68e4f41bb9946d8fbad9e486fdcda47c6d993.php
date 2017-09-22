<?php

/* node_modules/object-keys/isArguments.js */
class __TwigTemplate_e64a68d0a8e3d1cc2c6355d160b66ec726e3f2e8ac48ae1ddb8f85f19502be9d extends Twig_Template
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
        $__internal_0d7533d8be06a6bb68fd3f54d1e7124a44a76a6078b30db7df86ef6cfe81cf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7533d8be06a6bb68fd3f54d1e7124a44a76a6078b30db7df86ef6cfe81cf3a->enter($__internal_0d7533d8be06a6bb68fd3f54d1e7124a44a76a6078b30db7df86ef6cfe81cf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-keys/isArguments.js"));

        // line 1
        echo "'use strict';

var toStr = Object.prototype.toString;

module.exports = function isArguments(value) {
\tvar str = toStr.call(value);
\tvar isArgs = str === '[object Arguments]';
\tif (!isArgs) {
\t\tisArgs = str !== '[object Array]' &&
\t\t\tvalue !== null &&
\t\t\ttypeof value === 'object' &&
\t\t\ttypeof value.length === 'number' &&
\t\t\tvalue.length >= 0 &&
\t\t\ttoStr.call(value.callee) === '[object Function]';
\t}
\treturn isArgs;
};
";
        
        $__internal_0d7533d8be06a6bb68fd3f54d1e7124a44a76a6078b30db7df86ef6cfe81cf3a->leave($__internal_0d7533d8be06a6bb68fd3f54d1e7124a44a76a6078b30db7df86ef6cfe81cf3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-keys/isArguments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var toStr = Object.prototype.toString;

module.exports = function isArguments(value) {
\tvar str = toStr.call(value);
\tvar isArgs = str === '[object Arguments]';
\tif (!isArgs) {
\t\tisArgs = str !== '[object Array]' &&
\t\t\tvalue !== null &&
\t\t\ttypeof value === 'object' &&
\t\t\ttypeof value.length === 'number' &&
\t\t\tvalue.length >= 0 &&
\t\t\ttoStr.call(value.callee) === '[object Function]';
\t}
\treturn isArgs;
};
", "node_modules/object-keys/isArguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-keys/isArguments.js");
    }
}

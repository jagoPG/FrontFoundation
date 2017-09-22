<?php

/* node_modules/es5-ext/array/#/compact.js */
class __TwigTemplate_4b282586bc729eda5319d87b5d4a7373518e9b1b79485aba391a283e96ad8651 extends Twig_Template
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
        $__internal_f9c3157973fc2558ffe0cb9b737d64f0829b7f4bc7412dbad8a77b7449a1f5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c3157973fc2558ffe0cb9b737d64f0829b7f4bc7412dbad8a77b7449a1f5eb->enter($__internal_f9c3157973fc2558ffe0cb9b737d64f0829b7f4bc7412dbad8a77b7449a1f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/compact.js"));

        // line 1
        echo "// Inspired by: http://documentcloud.github.com/underscore/#compact

\"use strict\";

var isValue = require(\"../../object/is-value\");

var filter = Array.prototype.filter;

module.exports = function () {
\treturn filter.call(this, function (val) {
\t\treturn isValue(val);
\t});
};
";
        
        $__internal_f9c3157973fc2558ffe0cb9b737d64f0829b7f4bc7412dbad8a77b7449a1f5eb->leave($__internal_f9c3157973fc2558ffe0cb9b737d64f0829b7f4bc7412dbad8a77b7449a1f5eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/compact.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Inspired by: http://documentcloud.github.com/underscore/#compact

\"use strict\";

var isValue = require(\"../../object/is-value\");

var filter = Array.prototype.filter;

module.exports = function () {
\treturn filter.call(this, function (val) {
\t\treturn isValue(val);
\t});
};
", "node_modules/es5-ext/array/#/compact.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/compact.js");
    }
}

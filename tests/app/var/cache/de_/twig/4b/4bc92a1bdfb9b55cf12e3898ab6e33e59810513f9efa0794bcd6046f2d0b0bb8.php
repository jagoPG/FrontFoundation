<?php

/* node_modules/es5-ext/string/#/case-insensitive-compare.js */
class __TwigTemplate_595089e9e0042387f4489401ca0af2069424eb28fbbf4425c6b262988e28cb53 extends Twig_Template
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
        $__internal_a36420889f8c0b17c21b3194e174821519760c6f34b085a54dd9f5ba69da367a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36420889f8c0b17c21b3194e174821519760c6f34b085a54dd9f5ba69da367a->enter($__internal_a36420889f8c0b17c21b3194e174821519760c6f34b085a54dd9f5ba69da367a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/case-insensitive-compare.js"));

        // line 1
        echo "\"use strict\";

var toLowerCase = String.prototype.toLowerCase;

module.exports = function (other) {
\treturn toLowerCase.call(this).localeCompare(toLowerCase.call(String(other)));
};
";
        
        $__internal_a36420889f8c0b17c21b3194e174821519760c6f34b085a54dd9f5ba69da367a->leave($__internal_a36420889f8c0b17c21b3194e174821519760c6f34b085a54dd9f5ba69da367a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/case-insensitive-compare.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toLowerCase = String.prototype.toLowerCase;

module.exports = function (other) {
\treturn toLowerCase.call(this).localeCompare(toLowerCase.call(String(other)));
};
", "node_modules/es5-ext/string/#/case-insensitive-compare.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/case-insensitive-compare.js");
    }
}

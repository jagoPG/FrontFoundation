<?php

/* node_modules/es5-ext/reg-exp/#/sticky/is-implemented.js */
class __TwigTemplate_16e4cf3a22822c43b5775695ceddd184919355b810c24215b4319fda4f57322e extends Twig_Template
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
        $__internal_a2c1a1375015c0ed1618a9fb4e9d8aba23824f9a8d931a9831c992c61ef061d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c1a1375015c0ed1618a9fb4e9d8aba23824f9a8d931a9831c992c61ef061d8->enter($__internal_a2c1a1375015c0ed1618a9fb4e9d8aba23824f9a8d931a9831c992c61ef061d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/sticky/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar dummyRegExp = /a/;
\t// We need to do check on instance and not on prototype due to how ES2015 spec evolved:
\t// https://github.com/tc39/ecma262/issues/262
\t// https://github.com/tc39/ecma262/pull/263
\t// https://bugs.chromium.org/p/v8/issues/detail?id=4617
\treturn \"sticky\" in dummyRegExp;
};
";
        
        $__internal_a2c1a1375015c0ed1618a9fb4e9d8aba23824f9a8d931a9831c992c61ef061d8->leave($__internal_a2c1a1375015c0ed1618a9fb4e9d8aba23824f9a8d931a9831c992c61ef061d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/sticky/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar dummyRegExp = /a/;
\t// We need to do check on instance and not on prototype due to how ES2015 spec evolved:
\t// https://github.com/tc39/ecma262/issues/262
\t// https://github.com/tc39/ecma262/pull/263
\t// https://bugs.chromium.org/p/v8/issues/detail?id=4617
\treturn \"sticky\" in dummyRegExp;
};
", "node_modules/es5-ext/reg-exp/#/sticky/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/sticky/is-implemented.js");
    }
}

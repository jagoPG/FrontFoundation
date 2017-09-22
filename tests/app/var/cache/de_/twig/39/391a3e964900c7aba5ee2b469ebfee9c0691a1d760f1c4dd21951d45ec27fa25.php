<?php

/* node_modules/es5-ext/reg-exp/#/unicode/is-implemented.js */
class __TwigTemplate_15eeb85fd0c0d1cdde28486572f04e77dd66348cc67876abfacf80e6ef20f2bd extends Twig_Template
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
        $__internal_03915ab53cf87c87129c09d152fa932fbcd69a420e8bf48cffd0275e0f0406c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03915ab53cf87c87129c09d152fa932fbcd69a420e8bf48cffd0275e0f0406c3->enter($__internal_03915ab53cf87c87129c09d152fa932fbcd69a420e8bf48cffd0275e0f0406c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/unicode/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar dummyRegExp = /a/;
\t// We need to do check on instance and not on prototype due to how ES2015 spec evolved:
\t// https://github.com/tc39/ecma262/issues/262
\t// https://github.com/tc39/ecma262/pull/263
\t// https://bugs.chromium.org/p/v8/issues/detail?id=4617
\treturn \"unicode\" in dummyRegExp;
};
";
        
        $__internal_03915ab53cf87c87129c09d152fa932fbcd69a420e8bf48cffd0275e0f0406c3->leave($__internal_03915ab53cf87c87129c09d152fa932fbcd69a420e8bf48cffd0275e0f0406c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/unicode/is-implemented.js";
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
\treturn \"unicode\" in dummyRegExp;
};
", "node_modules/es5-ext/reg-exp/#/unicode/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/unicode/is-implemented.js");
    }
}

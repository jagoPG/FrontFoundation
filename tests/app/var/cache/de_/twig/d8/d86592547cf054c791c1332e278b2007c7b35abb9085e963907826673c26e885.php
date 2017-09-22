<?php

/* node_modules/es5-ext/test/object/ensure-finite-number.js */
class __TwigTemplate_5fe0dc08277b57a8d96a768ef8e87533a08021861e10e632b023b9968b525721 extends Twig_Template
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
        $__internal_1626e796e0c9badcb09362489eed18fe34a88ae6601aab44b5d7ff3d7c90259e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1626e796e0c9badcb09362489eed18fe34a88ae6601aab44b5d7ff3d7c90259e->enter($__internal_1626e796e0c9badcb09362489eed18fe34a88ae6601aab44b5d7ff3d7c90259e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/ensure-finite-number.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.throws(
\t\tfunction () {
\t\t\tt(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta(t(0), 0, \"Zero\");
\ta.throws(
\t\tfunction () {
\t\t\tt(NaN);
\t\t},
\t\tTypeError,
\t\t\"NaN\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(Infinity);
\t\t},
\t\tTypeError,
\t\t\"Infinity\"
\t);
\ta(t(12), 12, \"Number\");
\ta(t(false), 0, \"Boolean\");
\ta(t(new Date(1000000)), 1000000, \"Date\");
\ta(t(new Number(2)), 2, \"Number object\");
\ta.throws(
\t\tfunction () {
\t\t\tt(\"asdfaf\");
\t\t},
\t\tTypeError,
\t\t\"String\"
\t);
\ta(t(\"\"), 0, \"Empty String\");
\tif (typeof Symbol === \"function\") {
\t\ta.throws(
\t\t\tfunction () {
\t\t\t\tt(Symbol(\"test\"));
\t\t\t},
\t\t\tTypeError,
\t\t\t\"Symbol\"
\t\t);
\t}
};
";
        
        $__internal_1626e796e0c9badcb09362489eed18fe34a88ae6601aab44b5d7ff3d7c90259e->leave($__internal_1626e796e0c9badcb09362489eed18fe34a88ae6601aab44b5d7ff3d7c90259e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/ensure-finite-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.throws(
\t\tfunction () {
\t\t\tt(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta(t(0), 0, \"Zero\");
\ta.throws(
\t\tfunction () {
\t\t\tt(NaN);
\t\t},
\t\tTypeError,
\t\t\"NaN\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(Infinity);
\t\t},
\t\tTypeError,
\t\t\"Infinity\"
\t);
\ta(t(12), 12, \"Number\");
\ta(t(false), 0, \"Boolean\");
\ta(t(new Date(1000000)), 1000000, \"Date\");
\ta(t(new Number(2)), 2, \"Number object\");
\ta.throws(
\t\tfunction () {
\t\t\tt(\"asdfaf\");
\t\t},
\t\tTypeError,
\t\t\"String\"
\t);
\ta(t(\"\"), 0, \"Empty String\");
\tif (typeof Symbol === \"function\") {
\t\ta.throws(
\t\t\tfunction () {
\t\t\t\tt(Symbol(\"test\"));
\t\t\t},
\t\t\tTypeError,
\t\t\t\"Symbol\"
\t\t);
\t}
};
", "node_modules/es5-ext/test/object/ensure-finite-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/ensure-finite-number.js");
    }
}

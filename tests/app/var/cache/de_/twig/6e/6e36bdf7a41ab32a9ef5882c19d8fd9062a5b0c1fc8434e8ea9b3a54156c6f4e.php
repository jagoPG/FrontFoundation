<?php

/* node_modules/es5-ext/test/iterable/validate-object.js */
class __TwigTemplate_82c5a937fb55759d5b3aa983e30600b1e20d22616e1701809f9be66fe319d041 extends Twig_Template
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
        $__internal_e884a23a277429d739ff1518af53d673a72506d2354b66dd74c911fbb6f0c3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e884a23a277429d739ff1518af53d673a72506d2354b66dd74c911fbb6f0c3ac->enter($__internal_e884a23a277429d739ff1518af53d673a72506d2354b66dd74c911fbb6f0c3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/iterable/validate-object.js"));

        // line 1
        echo "\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function (t, a) {
\tvar x;
\ta.throws(function () {
 t(0);
}, TypeError, \"0\");
\ta.throws(function () {
 t(false);
}, TypeError, \"false\");
\ta.throws(function () {
 t(\"\");
}, TypeError, \"String\");
\ta.throws(function () {
 t({});
}, TypeError, \"Plain Object\");
\ta.throws(function () {
 t(function () {});
}, TypeError, \"Function\");
\ta(t(x = new String(\"raz\")), x, \"String object\"); // Jslint: ignore

\ta(t(x = { length: 1 }), x, \"Array like\");
\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"null\");
\tx = {};
\tx[iteratorSymbol] = function () {};
\ta(t(x), x, \"Iterable\");
};
";
        
        $__internal_e884a23a277429d739ff1518af53d673a72506d2354b66dd74c911fbb6f0c3ac->leave($__internal_e884a23a277429d739ff1518af53d673a72506d2354b66dd74c911fbb6f0c3ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/iterable/validate-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function (t, a) {
\tvar x;
\ta.throws(function () {
 t(0);
}, TypeError, \"0\");
\ta.throws(function () {
 t(false);
}, TypeError, \"false\");
\ta.throws(function () {
 t(\"\");
}, TypeError, \"String\");
\ta.throws(function () {
 t({});
}, TypeError, \"Plain Object\");
\ta.throws(function () {
 t(function () {});
}, TypeError, \"Function\");
\ta(t(x = new String(\"raz\")), x, \"String object\"); // Jslint: ignore

\ta(t(x = { length: 1 }), x, \"Array like\");
\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"null\");
\tx = {};
\tx[iteratorSymbol] = function () {};
\ta(t(x), x, \"Iterable\");
};
", "node_modules/es5-ext/test/iterable/validate-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/iterable/validate-object.js");
    }
}

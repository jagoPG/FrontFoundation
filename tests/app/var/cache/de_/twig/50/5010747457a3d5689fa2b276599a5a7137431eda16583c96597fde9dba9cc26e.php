<?php

/* node_modules/es5-ext/test/object/ensure-promise.js */
class __TwigTemplate_9dce8eaf1c6149a9f6cda0c652a0e4bd38e2118f15247ef154d4601df86a437c extends Twig_Template
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
        $__internal_c1411f03e043e56a2a9be91a548a507f6e0d04467afc92c6d57c183f1ed7aa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1411f03e043e56a2a9be91a548a507f6e0d04467afc92c6d57c183f1ed7aa61->enter($__internal_c1411f03e043e56a2a9be91a548a507f6e0d04467afc92c6d57c183f1ed7aa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/ensure-promise.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar promise;
\ta.throws(function () {
 t();
}, TypeError);
\ta.throws(function () {
 t(null);
}, TypeError);
\ta.throws(function () {
 t(\"promise\");
}, TypeError);
\ta.throws(function () {
 t({});
}, TypeError);
\ta.throws(function () {
 t(function () {});
}, TypeError);
\ta.throws(function () {
 t({ then: {} });
}, TypeError);
\tpromise = { then: function () {} };
\ta(t(promise), promise);
\tpromise = function () {};
\tpromise.then = {};
\ta.throws(function () {
 t(promise);
}, TypeError);
\tpromise.then = function () {};
\ta(t(promise), promise);
};
";
        
        $__internal_c1411f03e043e56a2a9be91a548a507f6e0d04467afc92c6d57c183f1ed7aa61->leave($__internal_c1411f03e043e56a2a9be91a548a507f6e0d04467afc92c6d57c183f1ed7aa61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/ensure-promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar promise;
\ta.throws(function () {
 t();
}, TypeError);
\ta.throws(function () {
 t(null);
}, TypeError);
\ta.throws(function () {
 t(\"promise\");
}, TypeError);
\ta.throws(function () {
 t({});
}, TypeError);
\ta.throws(function () {
 t(function () {});
}, TypeError);
\ta.throws(function () {
 t({ then: {} });
}, TypeError);
\tpromise = { then: function () {} };
\ta(t(promise), promise);
\tpromise = function () {};
\tpromise.then = {};
\ta.throws(function () {
 t(promise);
}, TypeError);
\tpromise.then = function () {};
\ta(t(promise), promise);
};
", "node_modules/es5-ext/test/object/ensure-promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/ensure-promise.js");
    }
}

<?php

/* node_modules/es5-ext/test/object/is-promise.js */
class __TwigTemplate_4645e8621c8e23d65b8153ef4abf0092ec8b02fae6aa0a5114146cf6aee4e177 extends Twig_Template
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
        $__internal_1e85a46ba95bde9fb2192a6ba703663668bd193463b7f0306dfc55f994207579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e85a46ba95bde9fb2192a6ba703663668bd193463b7f0306dfc55f994207579->enter($__internal_1e85a46ba95bde9fb2192a6ba703663668bd193463b7f0306dfc55f994207579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-promise.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar promise;
\ta(t(), false);
\ta(t(null), false);
\ta(t(\"promise\"), false);
\ta(t({}), false);
\ta(t(function () {}), false);
\ta(t({ then: {} }), false);
\ta(t({ then: function () {} }), true);
\tpromise = function () {};
\tpromise.then = {};
\ta(t(promise), false);
\tpromise.then = function () {};
\ta(t(promise), true);
};
";
        
        $__internal_1e85a46ba95bde9fb2192a6ba703663668bd193463b7f0306dfc55f994207579->leave($__internal_1e85a46ba95bde9fb2192a6ba703663668bd193463b7f0306dfc55f994207579_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-promise.js";
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
\ta(t(), false);
\ta(t(null), false);
\ta(t(\"promise\"), false);
\ta(t({}), false);
\ta(t(function () {}), false);
\ta(t({ then: {} }), false);
\ta(t({ then: function () {} }), true);
\tpromise = function () {};
\tpromise.then = {};
\ta(t(promise), false);
\tpromise.then = function () {};
\ta(t(promise), true);
};
", "node_modules/es5-ext/test/object/is-promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-promise.js");
    }
}

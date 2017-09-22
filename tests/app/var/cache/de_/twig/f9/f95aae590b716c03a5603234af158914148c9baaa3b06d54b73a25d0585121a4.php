<?php

/* node_modules/es5-ext/test/string/random-uniq.js */
class __TwigTemplate_ede4e1b4cf1b0e85f664f23cd0ad851b311475d45dd2332f58c6564bb9e552ec extends Twig_Template
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
        $__internal_d443a2215da127d71a48b0bb92741fac7659c61cc8ccc67d6cb1891d1a7a27f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d443a2215da127d71a48b0bb92741fac7659c61cc8ccc67d6cb1891d1a7a27f2->enter($__internal_d443a2215da127d71a48b0bb92741fac7659c61cc8ccc67d6cb1891d1a7a27f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/random-uniq.js"));

        // line 1
        echo "\"use strict\";

var isValidFormat = RegExp.prototype.test.bind(/^[a-z0-9]+\$/);

module.exports = function (t, a) {
\ta(typeof t(), \"string\");
\ta.ok(t().length > 7);
\ta.not(t(), t());
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
};
";
        
        $__internal_d443a2215da127d71a48b0bb92741fac7659c61cc8ccc67d6cb1891d1a7a27f2->leave($__internal_d443a2215da127d71a48b0bb92741fac7659c61cc8ccc67d6cb1891d1a7a27f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/random-uniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValidFormat = RegExp.prototype.test.bind(/^[a-z0-9]+\$/);

module.exports = function (t, a) {
\ta(typeof t(), \"string\");
\ta.ok(t().length > 7);
\ta.not(t(), t());
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
\ta.ok(isValidFormat(t()));
};
", "node_modules/es5-ext/test/string/random-uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/random-uniq.js");
    }
}

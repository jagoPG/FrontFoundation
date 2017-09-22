<?php

/* node_modules/es5-ext/test/reg-exp/#/index.js */
class __TwigTemplate_6aa215e205edf691bf60ffea2df83230a03f7ea8f859744b8aa0f2c5c2790e99 extends Twig_Template
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
        $__internal_0b1e1a37c57337bfd452278c80cdf12bb6bd97f971539dc72a76a78d9e948510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1e1a37c57337bfd452278c80cdf12bb6bd97f971539dc72a76a78d9e948510->enter($__internal_0b1e1a37c57337bfd452278c80cdf12bb6bd97f971539dc72a76a78d9e948510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/index.js"));

        // line 1
        echo "/* eslint-env node */

\"use strict\";

var indexTest = require(\"tad/lib/utils/index-test\")
  , path      = require(\"path\").resolve(__dirname, \"../../../reg-exp/#\");

module.exports = function (t, a, d) {
\tindexTest(
\t\tindexTest.readDir(path).aside(function (data) {
\t\t\tdelete data.sticky;
\t\t\tdelete data.unicode;
\t\t})
\t)(t, a, d);
};
";
        
        $__internal_0b1e1a37c57337bfd452278c80cdf12bb6bd97f971539dc72a76a78d9e948510->leave($__internal_0b1e1a37c57337bfd452278c80cdf12bb6bd97f971539dc72a76a78d9e948510_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint-env node */

\"use strict\";

var indexTest = require(\"tad/lib/utils/index-test\")
  , path      = require(\"path\").resolve(__dirname, \"../../../reg-exp/#\");

module.exports = function (t, a, d) {
\tindexTest(
\t\tindexTest.readDir(path).aside(function (data) {
\t\t\tdelete data.sticky;
\t\t\tdelete data.unicode;
\t\t})
\t)(t, a, d);
};
", "node_modules/es5-ext/test/reg-exp/#/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/index.js");
    }
}

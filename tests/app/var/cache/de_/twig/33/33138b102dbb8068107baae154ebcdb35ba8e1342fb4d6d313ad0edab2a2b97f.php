<?php

/* node_modules/es5-ext/test/object/first-key.js */
class __TwigTemplate_0534448b82bdd533f139c63c542ea0d4a37813f781ad26e0b042b403cd2ecb1d extends Twig_Template
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
        $__internal_1521aa4bc18109c6eb581879b6c152537b88f3c4e0ce8c606cf8d1085b8e6bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1521aa4bc18109c6eb581879b6c152537b88f3c4e0ce8c606cf8d1085b8e6bda->enter($__internal_1521aa4bc18109c6eb581879b6c152537b88f3c4e0ce8c606cf8d1085b8e6bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/first-key.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = Object.create(null);
\ta(t(x), null, \"Normal: Empty\");
\ta(t(y), null, \"Null extension: Empty\");
\tx.foo = \"raz\";
\tx.bar = 343;
\ta([\"foo\", \"bar\"].indexOf(t(x)) !== -1, true, \"Normal\");
\ty.elo = \"foo\";
\ty.mar = \"wew\";
\ta([\"elo\", \"mar\"].indexOf(t(y)) !== -1, true, \"Null extension\");
};
";
        
        $__internal_1521aa4bc18109c6eb581879b6c152537b88f3c4e0ce8c606cf8d1085b8e6bda->leave($__internal_1521aa4bc18109c6eb581879b6c152537b88f3c4e0ce8c606cf8d1085b8e6bda_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/first-key.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = Object.create(null);
\ta(t(x), null, \"Normal: Empty\");
\ta(t(y), null, \"Null extension: Empty\");
\tx.foo = \"raz\";
\tx.bar = 343;
\ta([\"foo\", \"bar\"].indexOf(t(x)) !== -1, true, \"Normal\");
\ty.elo = \"foo\";
\ty.mar = \"wew\";
\ta([\"elo\", \"mar\"].indexOf(t(y)) !== -1, true, \"Null extension\");
};
", "node_modules/es5-ext/test/object/first-key.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/first-key.js");
    }
}

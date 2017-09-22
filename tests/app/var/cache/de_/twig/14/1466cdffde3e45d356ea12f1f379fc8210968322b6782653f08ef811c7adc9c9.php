<?php

/* node_modules/es5-ext/test/string/is-string.js */
class __TwigTemplate_f74249d8cae9e7d153683333a41344f09cd63c026a79d7cc924c954deccf9872 extends Twig_Template
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
        $__internal_eeaecdeae19f5afd3c94aef6f571bd613b744a51a85ef247bed6da42dde6b31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeaecdeae19f5afd3c94aef6f571bd613b744a51a85ef247bed6da42dde6b31f->enter($__internal_eeaecdeae19f5afd3c94aef6f571bd613b744a51a85ef247bed6da42dde6b31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/is-string.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(null), false, \"Null\");
\ta(t(\"\"), true, \"Empty string\");
\ta(t(12), false, \"Number\");
\ta(t(false), false, \"Boolean\");
\ta(t(new Date()), false, \"Date\");
\ta(t(new String(\"raz\")), true, \"String object\");
\ta(t(\"asdfaf\"), true, \"String\");
};
";
        
        $__internal_eeaecdeae19f5afd3c94aef6f571bd613b744a51a85ef247bed6da42dde6b31f->leave($__internal_eeaecdeae19f5afd3c94aef6f571bd613b744a51a85ef247bed6da42dde6b31f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/is-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(null), false, \"Null\");
\ta(t(\"\"), true, \"Empty string\");
\ta(t(12), false, \"Number\");
\ta(t(false), false, \"Boolean\");
\ta(t(new Date()), false, \"Date\");
\ta(t(new String(\"raz\")), true, \"String object\");
\ta(t(\"asdfaf\"), true, \"String\");
};
", "node_modules/es5-ext/test/string/is-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/is-string.js");
    }
}

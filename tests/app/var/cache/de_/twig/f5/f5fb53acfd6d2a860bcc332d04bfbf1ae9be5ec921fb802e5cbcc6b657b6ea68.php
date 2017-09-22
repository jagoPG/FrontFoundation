<?php

/* node_modules/es5-ext/test/string/#/repeat/shim.js */
class __TwigTemplate_dd84fec2f4bae76cc759d3e14c324029b56f7443808bb8ec90efcfb88f900502 extends Twig_Template
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
        $__internal_019a4387e13461f284ae450974556dbd741372b75df5ba9e7fc57e3e250b7f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019a4387e13461f284ae450974556dbd741372b75df5ba9e7fc57e3e250b7f6a->enter($__internal_019a4387e13461f284ae450974556dbd741372b75df5ba9e7fc57e3e250b7f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/repeat/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"a\", 0), \"\", \"Empty\");
\ta(t.call(\"a\", 1), \"a\", \"1\");
\ta(t.call(\"a\", 2), \"aa\", \"2\");
\ta(t.call(\"\\t\", 5), \"\\t\\t\\t\\t\\t\", \"Whitespace\");
\ta(t.call(\"raz\", 3), \"razrazraz\", \"Many chars\");
\ta(t.call(\"raz\", 3), \"razrazraz\", \"Many chars\");
\ta(t.call(\"razfoobar\", 5), \"razfoobarrazfoobarrazfoobarrazfoobarrazfoobar\", \"Many chars\");
\ta(t.call(\"a\", 300).length, 300);
};
";
        
        $__internal_019a4387e13461f284ae450974556dbd741372b75df5ba9e7fc57e3e250b7f6a->leave($__internal_019a4387e13461f284ae450974556dbd741372b75df5ba9e7fc57e3e250b7f6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/repeat/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"a\", 0), \"\", \"Empty\");
\ta(t.call(\"a\", 1), \"a\", \"1\");
\ta(t.call(\"a\", 2), \"aa\", \"2\");
\ta(t.call(\"\\t\", 5), \"\\t\\t\\t\\t\\t\", \"Whitespace\");
\ta(t.call(\"raz\", 3), \"razrazraz\", \"Many chars\");
\ta(t.call(\"raz\", 3), \"razrazraz\", \"Many chars\");
\ta(t.call(\"razfoobar\", 5), \"razfoobarrazfoobarrazfoobarrazfoobarrazfoobar\", \"Many chars\");
\ta(t.call(\"a\", 300).length, 300);
};
", "node_modules/es5-ext/test/string/#/repeat/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/repeat/shim.js");
    }
}

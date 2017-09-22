<?php

/* node_modules/es5-ext/test/string/#/starts-with/shim.js */
class __TwigTemplate_c25f3044904694b702f5380cf08620ba80f3f1affddeb18a4769a5fadb96b3da extends Twig_Template
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
        $__internal_93f9afb77241188a35a7b06617316d1917fa180527470de80c499a1fc9174d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f9afb77241188a35a7b06617316d1917fa180527470de80c499a1fc9174d07->enter($__internal_93f9afb77241188a35a7b06617316d1917fa180527470de80c499a1fc9174d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/starts-with/shim.js"));

        // line 1
        echo "// Inspired and in some parts copied from:
// http://closure-library.googlecode.com/svn/trunk/closure/goog
// /string/string_test.html

\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"abc\", \"\"), true, \"Empty needle\");
\ta(t.call(\"abcd\", \"ab\"), true, \"Starts with needle\");
\ta(t.call(\"abcd\", \"abcd\"), true, \"Needle equals haystack\");
\ta(t.call(\"abcd\", \"bcde\", 1), false, \"Needle larger than haystack\");
\ta(!t.call(\"abcd\", \"cd\"), true, \"Doesn't start with needle\");
\ta(t.call(\"abcd\", \"bc\", 1), true, \"Position\");
};
";
        
        $__internal_93f9afb77241188a35a7b06617316d1917fa180527470de80c499a1fc9174d07->leave($__internal_93f9afb77241188a35a7b06617316d1917fa180527470de80c499a1fc9174d07_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/starts-with/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Inspired and in some parts copied from:
// http://closure-library.googlecode.com/svn/trunk/closure/goog
// /string/string_test.html

\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"abc\", \"\"), true, \"Empty needle\");
\ta(t.call(\"abcd\", \"ab\"), true, \"Starts with needle\");
\ta(t.call(\"abcd\", \"abcd\"), true, \"Needle equals haystack\");
\ta(t.call(\"abcd\", \"bcde\", 1), false, \"Needle larger than haystack\");
\ta(!t.call(\"abcd\", \"cd\"), true, \"Doesn't start with needle\");
\ta(t.call(\"abcd\", \"bc\", 1), true, \"Position\");
};
", "node_modules/es5-ext/test/string/#/starts-with/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/starts-with/shim.js");
    }
}

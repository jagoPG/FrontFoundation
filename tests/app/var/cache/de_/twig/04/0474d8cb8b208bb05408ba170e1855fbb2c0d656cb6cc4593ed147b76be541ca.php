<?php

/* node_modules/es5-ext/test/string/#/ends-with/shim.js */
class __TwigTemplate_ea2602e538c521707ff190b73cb22e8fb618e5be2567747db0ac240ef9b60947 extends Twig_Template
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
        $__internal_4884b3ecea21034f4d44e316952514e429622ae76d80360eb1dfa364f1b965e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4884b3ecea21034f4d44e316952514e429622ae76d80360eb1dfa364f1b965e2->enter($__internal_4884b3ecea21034f4d44e316952514e429622ae76d80360eb1dfa364f1b965e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/ends-with/shim.js"));

        // line 1
        echo "// In some parts copied from:
// http://closure-library.googlecode.com/svn/trunk/closure/goog/
// string/string_test.html

\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"abc\", \"\"), true, \"Empty needle\");
\ta(t.call(\"abcd\", \"cd\"), true, \"Ends with needle\");
\ta(t.call(\"abcd\", \"abcd\"), true, \"Needle equals haystack\");
\ta(t.call(\"abcd\", \"ab\"), false, \"Doesn't end with needle\");
\ta(t.call(\"abc\", \"defg\"), false, \"Length trick\");
\ta(t.call(\"razdwa\", \"zd\", 3), false, \"Position: false\");
\ta(t.call(\"razdwa\", \"zd\", 4), true, \"Position: true\");
\ta(t.call(\"razdwa\", \"zd\", 5), false, \"Position: false #2\");
};
";
        
        $__internal_4884b3ecea21034f4d44e316952514e429622ae76d80360eb1dfa364f1b965e2->leave($__internal_4884b3ecea21034f4d44e316952514e429622ae76d80360eb1dfa364f1b965e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/ends-with/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// In some parts copied from:
// http://closure-library.googlecode.com/svn/trunk/closure/goog/
// string/string_test.html

\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"abc\", \"\"), true, \"Empty needle\");
\ta(t.call(\"abcd\", \"cd\"), true, \"Ends with needle\");
\ta(t.call(\"abcd\", \"abcd\"), true, \"Needle equals haystack\");
\ta(t.call(\"abcd\", \"ab\"), false, \"Doesn't end with needle\");
\ta(t.call(\"abc\", \"defg\"), false, \"Length trick\");
\ta(t.call(\"razdwa\", \"zd\", 3), false, \"Position: false\");
\ta(t.call(\"razdwa\", \"zd\", 4), true, \"Position: true\");
\ta(t.call(\"razdwa\", \"zd\", 5), false, \"Position: false #2\");
};
", "node_modules/es5-ext/test/string/#/ends-with/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/ends-with/shim.js");
    }
}

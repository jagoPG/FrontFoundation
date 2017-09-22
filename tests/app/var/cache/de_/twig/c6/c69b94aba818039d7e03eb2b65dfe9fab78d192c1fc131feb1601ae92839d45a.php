<?php

/* node_modules/es5-ext/test/number/is-number.js */
class __TwigTemplate_00eba42acf93fadd14f4c6a5ecd8af33f5a9fcf2c9837bc13c2c75099f144696 extends Twig_Template
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
        $__internal_8021e050292e5991ec145b5623b9e323be871f20fe261513666f2b7e564ed1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8021e050292e5991ec145b5623b9e323be871f20fe261513666f2b7e564ed1aa->enter($__internal_8021e050292e5991ec145b5623b9e323be871f20fe261513666f2b7e564ed1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-number.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(0), true, \"Zero\");
\ta(t(NaN), true, \"NaN\");
\ta(t(Infinity), true, \"Infinity\");
\ta(t(12), true, \"Number\");
\ta(t(false), false, \"Boolean\");
\ta(t(new Date()), false, \"Date\");
\ta(t(new Number(2)), true, \"Number object\");
\ta(t(\"asdfaf\"), false, \"String\");
\ta(t(\"\"), false, \"Empty String\");
};
";
        
        $__internal_8021e050292e5991ec145b5623b9e323be871f20fe261513666f2b7e564ed1aa->leave($__internal_8021e050292e5991ec145b5623b9e323be871f20fe261513666f2b7e564ed1aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(0), true, \"Zero\");
\ta(t(NaN), true, \"NaN\");
\ta(t(Infinity), true, \"Infinity\");
\ta(t(12), true, \"Number\");
\ta(t(false), false, \"Boolean\");
\ta(t(new Date()), false, \"Date\");
\ta(t(new Number(2)), true, \"Number object\");
\ta(t(\"asdfaf\"), false, \"String\");
\ta(t(\"\"), false, \"Empty String\");
};
", "node_modules/es5-ext/test/number/is-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-number.js");
    }
}

<?php

/* node_modules/es5-ext/test/object/valid-callable.js */
class __TwigTemplate_c9ddf190b02b7d319abc89121c4ef5ee4826eb9d9e281ff37dac7415cabcd499 extends Twig_Template
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
        $__internal_86d27bfff16b43ab5bc09a069f1785f38111b6c065ad10267c7ab05a30bacf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d27bfff16b43ab5bc09a069f1785f38111b6c065ad10267c7ab05a30bacf89->enter($__internal_86d27bfff16b43ab5bc09a069f1785f38111b6c065ad10267c7ab05a30bacf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/valid-callable.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar f = function () {};
\ta(t(f), f, \"Function\");
\ta.throws(function () {
\t\tt({});
\t}, \"Not Function\");
};
";
        
        $__internal_86d27bfff16b43ab5bc09a069f1785f38111b6c065ad10267c7ab05a30bacf89->leave($__internal_86d27bfff16b43ab5bc09a069f1785f38111b6c065ad10267c7ab05a30bacf89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/valid-callable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar f = function () {};
\ta(t(f), f, \"Function\");
\ta.throws(function () {
\t\tt({});
\t}, \"Not Function\");
};
", "node_modules/es5-ext/test/object/valid-callable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/valid-callable.js");
    }
}

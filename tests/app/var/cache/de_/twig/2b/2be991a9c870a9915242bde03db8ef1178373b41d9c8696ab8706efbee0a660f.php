<?php

/* node_modules/es5-ext/test/reg-exp/#/is-unicode.js */
class __TwigTemplate_9e951252295f8883e842f0ef440a0c5491b3186470ebe7639c277cf12b974db5 extends Twig_Template
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
        $__internal_033437a5c507efba24ab3ba0b67e88ceae28889a6d925a070dcd7e25dafb1528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033437a5c507efba24ab3ba0b67e88ceae28889a6d925a070dcd7e25dafb1528->enter($__internal_033437a5c507efba24ab3ba0b67e88ceae28889a6d925a070dcd7e25dafb1528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/is-unicode.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar re;
\ta(t.call(/raz/), false, \"Normal\");
\ta(t.call(/raz/g), false, \"Global\");
\ttry {
\t\t// eslint-disable-next-line no-invalid-regexp
\t\tre = new RegExp(\"raz\", \"u\");
\t} catch (ignore) {}
\tif (!re) return;
\ta(t.call(re), true, \"Unicode\");
};
";
        
        $__internal_033437a5c507efba24ab3ba0b67e88ceae28889a6d925a070dcd7e25dafb1528->leave($__internal_033437a5c507efba24ab3ba0b67e88ceae28889a6d925a070dcd7e25dafb1528_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/is-unicode.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar re;
\ta(t.call(/raz/), false, \"Normal\");
\ta(t.call(/raz/g), false, \"Global\");
\ttry {
\t\t// eslint-disable-next-line no-invalid-regexp
\t\tre = new RegExp(\"raz\", \"u\");
\t} catch (ignore) {}
\tif (!re) return;
\ta(t.call(re), true, \"Unicode\");
};
", "node_modules/es5-ext/test/reg-exp/#/is-unicode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/is-unicode.js");
    }
}

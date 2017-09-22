<?php

/* node_modules/es5-ext/test/array/#/is-empty.js */
class __TwigTemplate_e244fd3d9ace743276b02e5a24208717037f36849d41cd9a414bff1f1d041ff9 extends Twig_Template
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
        $__internal_a16aab6d36e23852ff9efada5d4eccc361da70dd6eb379185617915b46592192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16aab6d36e23852ff9efada5d4eccc361da70dd6eb379185617915b46592192->enter($__internal_a16aab6d36e23852ff9efada5d4eccc361da70dd6eb379185617915b46592192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/is-empty.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([]), true, \"Empty\");
\ta(t.call({ length: 0 }), true, \"Empty lists\");
\ta(t.call([1, x, \"raz\"]), false, \"Non empty\");
};
";
        
        $__internal_a16aab6d36e23852ff9efada5d4eccc361da70dd6eb379185617915b46592192->leave($__internal_a16aab6d36e23852ff9efada5d4eccc361da70dd6eb379185617915b46592192_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/is-empty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([]), true, \"Empty\");
\ta(t.call({ length: 0 }), true, \"Empty lists\");
\ta(t.call([1, x, \"raz\"]), false, \"Non empty\");
};
", "node_modules/es5-ext/test/array/#/is-empty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/is-empty.js");
    }
}

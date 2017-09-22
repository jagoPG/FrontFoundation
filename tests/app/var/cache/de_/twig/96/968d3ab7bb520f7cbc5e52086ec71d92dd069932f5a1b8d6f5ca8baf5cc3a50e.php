<?php

/* node_modules/es5-ext/test/object/is-empty.js */
class __TwigTemplate_749e3c9b8ea4d3f0be6c857d81ff862df4abcff7fb2394d6d3d3f3e41b8efb91 extends Twig_Template
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
        $__internal_f1bc0d8a613b650975cca7adb3e005af1da338e2db0fa58493371de662b1b1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bc0d8a613b650975cca7adb3e005af1da338e2db0fa58493371de662b1b1a0->enter($__internal_f1bc0d8a613b650975cca7adb3e005af1da338e2db0fa58493371de662b1b1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-empty.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), true, \"Empty\");
\ta(t({ 1: 1 }), false, \"Not empty\");
};
";
        
        $__internal_f1bc0d8a613b650975cca7adb3e005af1da338e2db0fa58493371de662b1b1a0->leave($__internal_f1bc0d8a613b650975cca7adb3e005af1da338e2db0fa58493371de662b1b1a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-empty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), true, \"Empty\");
\ta(t({ 1: 1 }), false, \"Not empty\");
};
", "node_modules/es5-ext/test/object/is-empty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-empty.js");
    }
}

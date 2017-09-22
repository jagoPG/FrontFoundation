<?php

/* node_modules/es5-ext/test/object/eq.js */
class __TwigTemplate_ee68ee0048277fa06e74356b1eeb9c447dacd3cbc238f0414175bc34a80867c7 extends Twig_Template
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
        $__internal_a033cd0b7162c17a8e1cf4c33579cdd2d8882eaf11303e97af92c2d24d28e43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a033cd0b7162c17a8e1cf4c33579cdd2d8882eaf11303e97af92c2d24d28e43d->enter($__internal_a033cd0b7162c17a8e1cf4c33579cdd2d8882eaf11303e97af92c2d24d28e43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/eq.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = {};
\ta(t(o, {}), false, \"Different objects\");
\ta(t(o, o), true, \"Same objects\");
\ta(t(\"1\", \"1\"), true, \"Same primitive\");
\ta(t(\"1\", 1), false, \"Different primitive types\");
\ta(t(NaN, NaN), true, \"NaN\");
\ta(t(0, 0), true, \"0,0\");
\ta(t(0, -0), true, \"0,-0\");
};
";
        
        $__internal_a033cd0b7162c17a8e1cf4c33579cdd2d8882eaf11303e97af92c2d24d28e43d->leave($__internal_a033cd0b7162c17a8e1cf4c33579cdd2d8882eaf11303e97af92c2d24d28e43d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/eq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = {};
\ta(t(o, {}), false, \"Different objects\");
\ta(t(o, o), true, \"Same objects\");
\ta(t(\"1\", \"1\"), true, \"Same primitive\");
\ta(t(\"1\", 1), false, \"Different primitive types\");
\ta(t(NaN, NaN), true, \"NaN\");
\ta(t(0, 0), true, \"0,0\");
\ta(t(0, -0), true, \"0,-0\");
};
", "node_modules/es5-ext/test/object/eq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/eq.js");
    }
}

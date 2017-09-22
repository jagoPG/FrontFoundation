<?php

/* node_modules/es5-ext/test/object/is-callable.js */
class __TwigTemplate_b94545841d0cb3f0ad4807bc5245a3378a79c475b1a32a19289f78684db5acfa extends Twig_Template
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
        $__internal_cd93a452c106dd33eed527245b88ad242a3e9b443a5032ab30ea5971d3ef0e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd93a452c106dd33eed527245b88ad242a3e9b443a5032ab30ea5971d3ef0e94->enter($__internal_cd93a452c106dd33eed527245b88ad242a3e9b443a5032ab30ea5971d3ef0e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-callable.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(function () {}), true, \"Function\");
\ta(t({}), false, \"Object\");
\ta(t(), false, \"Undefined\");
\ta(t(null), false, \"Null\");
};
";
        
        $__internal_cd93a452c106dd33eed527245b88ad242a3e9b443a5032ab30ea5971d3ef0e94->leave($__internal_cd93a452c106dd33eed527245b88ad242a3e9b443a5032ab30ea5971d3ef0e94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-callable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(function () {}), true, \"Function\");
\ta(t({}), false, \"Object\");
\ta(t(), false, \"Undefined\");
\ta(t(null), false, \"Null\");
};
", "node_modules/es5-ext/test/object/is-callable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-callable.js");
    }
}

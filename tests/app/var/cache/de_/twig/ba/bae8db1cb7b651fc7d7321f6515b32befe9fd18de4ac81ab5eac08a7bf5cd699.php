<?php

/* node_modules/es5-ext/test/math/_pack-ieee754.js */
class __TwigTemplate_83eb6b68e38da13533af6ff6ca593be986ef98f37bbce7b5e5efc1b3122d79a5 extends Twig_Template
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
        $__internal_e03df0c64905c4588b419b9f07fc12dacbddef1545b9500fafbaeaa3081285bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03df0c64905c4588b419b9f07fc12dacbddef1545b9500fafbaeaa3081285bc->enter($__internal_e03df0c64905c4588b419b9f07fc12dacbddef1545b9500fafbaeaa3081285bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/_pack-ieee754.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.deep(t(1.337, 8, 23), [63, 171, 34, 209]);
};
";
        
        $__internal_e03df0c64905c4588b419b9f07fc12dacbddef1545b9500fafbaeaa3081285bc->leave($__internal_e03df0c64905c4588b419b9f07fc12dacbddef1545b9500fafbaeaa3081285bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/_pack-ieee754.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.deep(t(1.337, 8, 23), [63, 171, 34, 209]);
};
", "node_modules/es5-ext/test/math/_pack-ieee754.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/_pack-ieee754.js");
    }
}

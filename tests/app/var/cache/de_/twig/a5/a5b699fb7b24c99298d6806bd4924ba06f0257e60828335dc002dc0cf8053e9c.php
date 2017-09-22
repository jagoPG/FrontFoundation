<?php

/* node_modules/es5-ext/object/assign/index.js */
class __TwigTemplate_cc9e6eaee7b815f9d857c3e1e2631ed46f05c2a54850cb186f0a828a0211d28c extends Twig_Template
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
        $__internal_de21feb08ea1ff4b312020406346e5b3a5bf5cf5aec8dd6c11b76c8e974d1637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de21feb08ea1ff4b312020406346e5b3a5bf5cf5aec8dd6c11b76c8e974d1637->enter($__internal_de21feb08ea1ff4b312020406346e5b3a5bf5cf5aec8dd6c11b76c8e974d1637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/assign/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Object.assign
\t: require(\"./shim\");
";
        
        $__internal_de21feb08ea1ff4b312020406346e5b3a5bf5cf5aec8dd6c11b76c8e974d1637->leave($__internal_de21feb08ea1ff4b312020406346e5b3a5bf5cf5aec8dd6c11b76c8e974d1637_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/assign/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Object.assign
\t: require(\"./shim\");
", "node_modules/es5-ext/object/assign/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/assign/index.js");
    }
}

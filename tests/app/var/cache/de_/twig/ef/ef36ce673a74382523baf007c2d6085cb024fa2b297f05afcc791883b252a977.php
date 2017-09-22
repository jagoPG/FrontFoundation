<?php

/* node_modules/es5-ext/math/expm1/index.js */
class __TwigTemplate_723b940c42d1e22918e6282e99f56069efaca03f9105f52a12532bff9c1778f9 extends Twig_Template
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
        $__internal_82eed07c976f7920a21c8a4462fcd89907dbd2a160fc5116870d0c2a02c4bfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eed07c976f7920a21c8a4462fcd89907dbd2a160fc5116870d0c2a02c4bfbb->enter($__internal_82eed07c976f7920a21c8a4462fcd89907dbd2a160fc5116870d0c2a02c4bfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/expm1/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.expm1
\t: require(\"./shim\");
";
        
        $__internal_82eed07c976f7920a21c8a4462fcd89907dbd2a160fc5116870d0c2a02c4bfbb->leave($__internal_82eed07c976f7920a21c8a4462fcd89907dbd2a160fc5116870d0c2a02c4bfbb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/expm1/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.expm1
\t: require(\"./shim\");
", "node_modules/es5-ext/math/expm1/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/expm1/index.js");
    }
}

<?php

/* node_modules/es5-ext/math/sinh/index.js */
class __TwigTemplate_4d91742af4c82edf680af15beeff0ecbd3f43620645018990e6db382ae069374 extends Twig_Template
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
        $__internal_998f6f19d663fd035352140b2b5e34d1a9a243f04f135d6952685e604cedfa8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998f6f19d663fd035352140b2b5e34d1a9a243f04f135d6952685e604cedfa8f->enter($__internal_998f6f19d663fd035352140b2b5e34d1a9a243f04f135d6952685e604cedfa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sinh/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.sinh
\t: require(\"./shim\");
";
        
        $__internal_998f6f19d663fd035352140b2b5e34d1a9a243f04f135d6952685e604cedfa8f->leave($__internal_998f6f19d663fd035352140b2b5e34d1a9a243f04f135d6952685e604cedfa8f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sinh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.sinh
\t: require(\"./shim\");
", "node_modules/es5-ext/math/sinh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sinh/index.js");
    }
}

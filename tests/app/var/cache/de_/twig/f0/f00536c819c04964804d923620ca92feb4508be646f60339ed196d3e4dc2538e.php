<?php

/* node_modules/es5-ext/math/fround/index.js */
class __TwigTemplate_1e6fd3a4c5039d077f610bbc47653e4589922774e17b8c5f427e90785c8db054 extends Twig_Template
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
        $__internal_3e8752f240a28632502f7f61f3608f40efba3be60ba289cfbedcea8d8a06dbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8752f240a28632502f7f61f3608f40efba3be60ba289cfbedcea8d8a06dbb2->enter($__internal_3e8752f240a28632502f7f61f3608f40efba3be60ba289cfbedcea8d8a06dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/fround/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.fround
\t: require(\"./shim\");
";
        
        $__internal_3e8752f240a28632502f7f61f3608f40efba3be60ba289cfbedcea8d8a06dbb2->leave($__internal_3e8752f240a28632502f7f61f3608f40efba3be60ba289cfbedcea8d8a06dbb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/fround/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.fround
\t: require(\"./shim\");
", "node_modules/es5-ext/math/fround/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/fround/index.js");
    }
}

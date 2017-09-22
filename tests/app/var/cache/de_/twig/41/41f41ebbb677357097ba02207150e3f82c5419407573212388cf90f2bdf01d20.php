<?php

/* node_modules/es5-ext/math/asinh/index.js */
class __TwigTemplate_de9133d159dc8f4770dde941e896e43dec66f49e58e29ad2cc67b857e42c5b94 extends Twig_Template
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
        $__internal_2a63e3956f0553846567dfef04cce5a85549c9a983cfa33ffe900778e79fc22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a63e3956f0553846567dfef04cce5a85549c9a983cfa33ffe900778e79fc22e->enter($__internal_2a63e3956f0553846567dfef04cce5a85549c9a983cfa33ffe900778e79fc22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/asinh/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.asinh
\t: require(\"./shim\");
";
        
        $__internal_2a63e3956f0553846567dfef04cce5a85549c9a983cfa33ffe900778e79fc22e->leave($__internal_2a63e3956f0553846567dfef04cce5a85549c9a983cfa33ffe900778e79fc22e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/asinh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.asinh
\t: require(\"./shim\");
", "node_modules/es5-ext/math/asinh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/asinh/index.js");
    }
}

<?php

/* node_modules/es5-ext/string/from-code-point/index.js */
class __TwigTemplate_91494c4ad53b730aaa40ffbf98d01167908718ecec979025cc5ebff68ce642f4 extends Twig_Template
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
        $__internal_63615560f6a0f69b385a61bbdd05afd6b4c0c3cce4b782bbf1b69f86089de42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63615560f6a0f69b385a61bbdd05afd6b4c0c3cce4b782bbf1b69f86089de42e->enter($__internal_63615560f6a0f69b385a61bbdd05afd6b4c0c3cce4b782bbf1b69f86089de42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/from-code-point/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.fromCodePoint
\t: require(\"./shim\");
";
        
        $__internal_63615560f6a0f69b385a61bbdd05afd6b4c0c3cce4b782bbf1b69f86089de42e->leave($__internal_63615560f6a0f69b385a61bbdd05afd6b4c0c3cce4b782bbf1b69f86089de42e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/from-code-point/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.fromCodePoint
\t: require(\"./shim\");
", "node_modules/es5-ext/string/from-code-point/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/from-code-point/index.js");
    }
}

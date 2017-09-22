<?php

/* node_modules/es5-ext/math/trunc/index.js */
class __TwigTemplate_5d3c5f9f7c4acf53bf43b70538c6463a852df5abadb8c2504b6c204888013565 extends Twig_Template
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
        $__internal_54b145f83972ccbc061c0259acb3fb5d58a73e476338f38150312b6e5b430100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b145f83972ccbc061c0259acb3fb5d58a73e476338f38150312b6e5b430100->enter($__internal_54b145f83972ccbc061c0259acb3fb5d58a73e476338f38150312b6e5b430100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/trunc/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.trunc
\t: require(\"./shim\");
";
        
        $__internal_54b145f83972ccbc061c0259acb3fb5d58a73e476338f38150312b6e5b430100->leave($__internal_54b145f83972ccbc061c0259acb3fb5d58a73e476338f38150312b6e5b430100_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/trunc/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.trunc
\t: require(\"./shim\");
", "node_modules/es5-ext/math/trunc/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/trunc/index.js");
    }
}

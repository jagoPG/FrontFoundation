<?php

/* node_modules/es5-ext/math/imul/index.js */
class __TwigTemplate_129321d9e9729b79582720b8b91fb56d318376c8ff24b9658435eae559f961c2 extends Twig_Template
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
        $__internal_684faad57e190a5f284bda7e5fd4930dc68276346d832f4916e639699e486332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684faad57e190a5f284bda7e5fd4930dc68276346d832f4916e639699e486332->enter($__internal_684faad57e190a5f284bda7e5fd4930dc68276346d832f4916e639699e486332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/imul/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.imul
\t: require(\"./shim\");
";
        
        $__internal_684faad57e190a5f284bda7e5fd4930dc68276346d832f4916e639699e486332->leave($__internal_684faad57e190a5f284bda7e5fd4930dc68276346d832f4916e639699e486332_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/imul/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.imul
\t: require(\"./shim\");
", "node_modules/es5-ext/math/imul/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/imul/index.js");
    }
}

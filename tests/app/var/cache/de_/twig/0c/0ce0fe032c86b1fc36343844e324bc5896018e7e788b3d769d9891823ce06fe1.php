<?php

/* node_modules/es5-ext/array/#/@@iterator/index.js */
class __TwigTemplate_2cb5685666dd1159b0889a4ef94c6fee3f0e051a5a27c1c62daf1f7be009e6f1 extends Twig_Template
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
        $__internal_0be7aed416e06f4cb366e3da7fc1b2f81a1c8a10f55680965cd448bfcf88b05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be7aed416e06f4cb366e3da7fc1b2f81a1c8a10f55680965cd448bfcf88b05a->enter($__internal_0be7aed416e06f4cb366e3da7fc1b2f81a1c8a10f55680965cd448bfcf88b05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/@@iterator/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.prototype[require(\"es6-symbol\").iterator] : require(\"./shim\");
";
        
        $__internal_0be7aed416e06f4cb366e3da7fc1b2f81a1c8a10f55680965cd448bfcf88b05a->leave($__internal_0be7aed416e06f4cb366e3da7fc1b2f81a1c8a10f55680965cd448bfcf88b05a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/@@iterator/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.prototype[require(\"es6-symbol\").iterator] : require(\"./shim\");
", "node_modules/es5-ext/array/#/@@iterator/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/@@iterator/index.js");
    }
}

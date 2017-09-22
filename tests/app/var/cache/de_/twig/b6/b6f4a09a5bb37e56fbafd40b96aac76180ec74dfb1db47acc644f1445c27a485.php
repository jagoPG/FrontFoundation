<?php

/* node_modules/es5-ext/string/#/@@iterator/index.js */
class __TwigTemplate_9f0839bad80be7e5c3cd32d2414a304038f8f68f81f0380f6a95d064c40393b5 extends Twig_Template
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
        $__internal_1a434b1a988d9d86f2e5da05d1edeffe292e39f1c2b018cac9afc75866da3479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a434b1a988d9d86f2e5da05d1edeffe292e39f1c2b018cac9afc75866da3479->enter($__internal_1a434b1a988d9d86f2e5da05d1edeffe292e39f1c2b018cac9afc75866da3479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/@@iterator/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype[require(\"es6-symbol\").iterator] : require(\"./shim\");
";
        
        $__internal_1a434b1a988d9d86f2e5da05d1edeffe292e39f1c2b018cac9afc75866da3479->leave($__internal_1a434b1a988d9d86f2e5da05d1edeffe292e39f1c2b018cac9afc75866da3479_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/@@iterator/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype[require(\"es6-symbol\").iterator] : require(\"./shim\");
", "node_modules/es5-ext/string/#/@@iterator/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/@@iterator/index.js");
    }
}

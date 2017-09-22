<?php

/* node_modules/es5-ext/string/#/contains/index.js */
class __TwigTemplate_df62bd658782de23272fdd37a95e276cbde42c0e6dac043f6f8d9d9dba03ada0 extends Twig_Template
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
        $__internal_40bbf2ce96566e1795ad64cfe56d289cce5fd2e43f837102ed16eb6119d4ac00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bbf2ce96566e1795ad64cfe56d289cce5fd2e43f837102ed16eb6119d4ac00->enter($__internal_40bbf2ce96566e1795ad64cfe56d289cce5fd2e43f837102ed16eb6119d4ac00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/contains/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.contains
\t: require(\"./shim\");
";
        
        $__internal_40bbf2ce96566e1795ad64cfe56d289cce5fd2e43f837102ed16eb6119d4ac00->leave($__internal_40bbf2ce96566e1795ad64cfe56d289cce5fd2e43f837102ed16eb6119d4ac00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/contains/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.contains
\t: require(\"./shim\");
", "node_modules/es5-ext/string/#/contains/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/contains/index.js");
    }
}

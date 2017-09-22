<?php

/* node_modules/es5-ext/array/#/entries/index.js */
class __TwigTemplate_9552115e22e93f5b22b747058cc64a8881291374206766b7bc45c7429c5451bd extends Twig_Template
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
        $__internal_b80e5031897aa5660a80a2ae3ee6dc2202e97e52fdaacca555fca0fa1b4e97e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80e5031897aa5660a80a2ae3ee6dc2202e97e52fdaacca555fca0fa1b4e97e8->enter($__internal_b80e5031897aa5660a80a2ae3ee6dc2202e97e52fdaacca555fca0fa1b4e97e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/entries/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.entries : require(\"./shim\");
";
        
        $__internal_b80e5031897aa5660a80a2ae3ee6dc2202e97e52fdaacca555fca0fa1b4e97e8->leave($__internal_b80e5031897aa5660a80a2ae3ee6dc2202e97e52fdaacca555fca0fa1b4e97e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/entries/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.entries : require(\"./shim\");
", "node_modules/es5-ext/array/#/entries/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/entries/index.js");
    }
}

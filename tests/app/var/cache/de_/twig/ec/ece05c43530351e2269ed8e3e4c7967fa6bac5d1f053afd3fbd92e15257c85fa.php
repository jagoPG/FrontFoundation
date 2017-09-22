<?php

/* node_modules/es5-ext/array/#/slice/index.js */
class __TwigTemplate_85dcb62d29ef98fc0ce0663debee745792f9739330f041ce4c2633cedd242d40 extends Twig_Template
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
        $__internal_ca6de5a3ce79afdf7bd5b6e521adf858fcc752c5371dba871e29b1bddca8da86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6de5a3ce79afdf7bd5b6e521adf858fcc752c5371dba871e29b1bddca8da86->enter($__internal_ca6de5a3ce79afdf7bd5b6e521adf858fcc752c5371dba871e29b1bddca8da86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/slice/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.prototype.slice : require(\"./shim\");
";
        
        $__internal_ca6de5a3ce79afdf7bd5b6e521adf858fcc752c5371dba871e29b1bddca8da86->leave($__internal_ca6de5a3ce79afdf7bd5b6e521adf858fcc752c5371dba871e29b1bddca8da86_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/slice/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.prototype.slice : require(\"./shim\");
", "node_modules/es5-ext/array/#/slice/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/slice/index.js");
    }
}

<?php

/* node_modules/es5-ext/array/#/filter/index.js */
class __TwigTemplate_c90136c29b9a656bb24908ef729e400a34a7a703cc456fe1ef80694739b79617 extends Twig_Template
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
        $__internal_32b16d61c036d07be869782a6c5db63e6bd1c3c3584bc7f7989a6fca862c5f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b16d61c036d07be869782a6c5db63e6bd1c3c3584bc7f7989a6fca862c5f9e->enter($__internal_32b16d61c036d07be869782a6c5db63e6bd1c3c3584bc7f7989a6fca862c5f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/filter/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.filter : require(\"./shim\");
";
        
        $__internal_32b16d61c036d07be869782a6c5db63e6bd1c3c3584bc7f7989a6fca862c5f9e->leave($__internal_32b16d61c036d07be869782a6c5db63e6bd1c3c3584bc7f7989a6fca862c5f9e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/filter/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.filter : require(\"./shim\");
", "node_modules/es5-ext/array/#/filter/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/filter/index.js");
    }
}

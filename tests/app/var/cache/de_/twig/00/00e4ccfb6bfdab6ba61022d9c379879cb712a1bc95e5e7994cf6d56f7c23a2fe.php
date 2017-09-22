<?php

/* node_modules/es5-ext/string/#/normalize/index.js */
class __TwigTemplate_7ffc547ad1403f5753b23840d870a7ec34b073d04e9b73688ba0799c12c3955d extends Twig_Template
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
        $__internal_156880df22bedcbacd97b7c24e4b0c4bce5453721d87e30630ee822c5b799a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156880df22bedcbacd97b7c24e4b0c4bce5453721d87e30630ee822c5b799a80->enter($__internal_156880df22bedcbacd97b7c24e4b0c4bce5453721d87e30630ee822c5b799a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/normalize/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.normalize
\t: require(\"./shim\");
";
        
        $__internal_156880df22bedcbacd97b7c24e4b0c4bce5453721d87e30630ee822c5b799a80->leave($__internal_156880df22bedcbacd97b7c24e4b0c4bce5453721d87e30630ee822c5b799a80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/normalize/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.normalize
\t: require(\"./shim\");
", "node_modules/es5-ext/string/#/normalize/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/normalize/index.js");
    }
}

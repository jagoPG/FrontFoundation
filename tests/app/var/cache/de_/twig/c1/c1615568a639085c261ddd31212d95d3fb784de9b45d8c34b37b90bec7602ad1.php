<?php

/* node_modules/es5-ext/number/epsilon/is-implemented.js */
class __TwigTemplate_25fc27cd6084ea6a23bcfb49fffe39d6cc961b5de879ea86b03140d5c2032f6a extends Twig_Template
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
        $__internal_b1629cf5743ad25852b8e75d3d62fa4832cbec1036b4d27159df6bfd54efae54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1629cf5743ad25852b8e75d3d62fa4832cbec1036b4d27159df6bfd54efae54->enter($__internal_b1629cf5743ad25852b8e75d3d62fa4832cbec1036b4d27159df6bfd54efae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/epsilon/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\treturn typeof Number.EPSILON === \"number\";
};
";
        
        $__internal_b1629cf5743ad25852b8e75d3d62fa4832cbec1036b4d27159df6bfd54efae54->leave($__internal_b1629cf5743ad25852b8e75d3d62fa4832cbec1036b4d27159df6bfd54efae54_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/epsilon/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\treturn typeof Number.EPSILON === \"number\";
};
", "node_modules/es5-ext/number/epsilon/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/epsilon/is-implemented.js");
    }
}

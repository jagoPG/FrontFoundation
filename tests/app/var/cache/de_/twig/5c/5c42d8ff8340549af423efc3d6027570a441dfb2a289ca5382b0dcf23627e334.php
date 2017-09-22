<?php

/* node_modules/core-js/library/fn/string/unescape-html.js */
class __TwigTemplate_e4c446c19c3a92d389956c08100609fd94bab6c8fc7178bd14417048bc64f2fc extends Twig_Template
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
        $__internal_7655e8c08c887e48bc27e120923fdbdb304c73a9991a850f7decb00cd847c715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7655e8c08c887e48bc27e120923fdbdb304c73a9991a850f7decb00cd847c715->enter($__internal_7655e8c08c887e48bc27e120923fdbdb304c73a9991a850f7decb00cd847c715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/unescape-html.js"));

        // line 1
        echo "require('../../modules/core.string.unescape-html');
module.exports = require('../../modules/_core').String.unescapeHTML;
";
        
        $__internal_7655e8c08c887e48bc27e120923fdbdb304c73a9991a850f7decb00cd847c715->leave($__internal_7655e8c08c887e48bc27e120923fdbdb304c73a9991a850f7decb00cd847c715_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/unescape-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.string.unescape-html');
module.exports = require('../../modules/_core').String.unescapeHTML;
", "node_modules/core-js/library/fn/string/unescape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/unescape-html.js");
    }
}

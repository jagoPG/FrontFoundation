<?php

/* node_modules/core-js/library/modules/es6.string.repeat.js */
class __TwigTemplate_acda3e0af824524e4cbdae19cda08bf0aa3e621b0a38d8a4933ed2941d219817 extends Twig_Template
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
        $__internal_2bec71c6cb29334e9787e4589b6284610a094b1754ff04c7eb57d8cd429b26de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bec71c6cb29334e9787e4589b6284610a094b1754ff04c7eb57d8cd429b26de->enter($__internal_2bec71c6cb29334e9787e4589b6284610a094b1754ff04c7eb57d8cd429b26de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.repeat.js"));

        // line 1
        echo "var \$export = require('./_export');

\$export(\$export.P, 'String', {
  // 21.1.3.13 String.prototype.repeat(count)
  repeat: require('./_string-repeat')
});
";
        
        $__internal_2bec71c6cb29334e9787e4589b6284610a094b1754ff04c7eb57d8cd429b26de->leave($__internal_2bec71c6cb29334e9787e4589b6284610a094b1754ff04c7eb57d8cd429b26de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');

\$export(\$export.P, 'String', {
  // 21.1.3.13 String.prototype.repeat(count)
  repeat: require('./_string-repeat')
});
", "node_modules/core-js/library/modules/es6.string.repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.repeat.js");
    }
}

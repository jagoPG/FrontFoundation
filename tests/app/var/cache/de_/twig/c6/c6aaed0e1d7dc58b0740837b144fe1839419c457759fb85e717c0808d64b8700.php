<?php

/* node_modules/core-js/modules/web.immediate.js */
class __TwigTemplate_d3264375b8e3ec5b64aba25e4e4b78dbb3a641c0cbbced7c8d68f01ae119fcc5 extends Twig_Template
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
        $__internal_1d9f437542db8e1253a5f5234bda7dc4f1a4926974e9e9564193eb9f76545796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9f437542db8e1253a5f5234bda7dc4f1a4926974e9e9564193eb9f76545796->enter($__internal_1d9f437542db8e1253a5f5234bda7dc4f1a4926974e9e9564193eb9f76545796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/web.immediate.js"));

        // line 1
        echo "var \$export = require('./_export');
var \$task = require('./_task');
\$export(\$export.G + \$export.B, {
  setImmediate: \$task.set,
  clearImmediate: \$task.clear
});
";
        
        $__internal_1d9f437542db8e1253a5f5234bda7dc4f1a4926974e9e9564193eb9f76545796->leave($__internal_1d9f437542db8e1253a5f5234bda7dc4f1a4926974e9e9564193eb9f76545796_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/web.immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var \$task = require('./_task');
\$export(\$export.G + \$export.B, {
  setImmediate: \$task.set,
  clearImmediate: \$task.clear
});
", "node_modules/core-js/modules/web.immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/web.immediate.js");
    }
}

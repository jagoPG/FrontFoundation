<?php

/* node_modules/core-js/library/modules/es7.object.values.js */
class __TwigTemplate_7ab2e83bb4c5a987be883580047e4167ea55ca2a4086ad8104d026c58cf04d7b extends Twig_Template
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
        $__internal_718633f6022ad1ed891b90f022ac855444976093e5de2c1151beeb72a3c77d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718633f6022ad1ed891b90f022ac855444976093e5de2c1151beeb72a3c77d05->enter($__internal_718633f6022ad1ed891b90f022ac855444976093e5de2c1151beeb72a3c77d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.object.values.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-object-values-entries
var \$export = require('./_export');
var \$values = require('./_object-to-array')(false);

\$export(\$export.S, 'Object', {
  values: function values(it) {
    return \$values(it);
  }
});
";
        
        $__internal_718633f6022ad1ed891b90f022ac855444976093e5de2c1151beeb72a3c77d05->leave($__internal_718633f6022ad1ed891b90f022ac855444976093e5de2c1151beeb72a3c77d05_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.object.values.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-object-values-entries
var \$export = require('./_export');
var \$values = require('./_object-to-array')(false);

\$export(\$export.S, 'Object', {
  values: function values(it) {
    return \$values(it);
  }
});
", "node_modules/core-js/library/modules/es7.object.values.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.object.values.js");
    }
}

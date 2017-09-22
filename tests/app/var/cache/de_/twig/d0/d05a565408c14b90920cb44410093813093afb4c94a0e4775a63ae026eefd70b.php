<?php

/* node_modules/core-js/library/modules/es7.error.is-error.js */
class __TwigTemplate_a41662095584f1189493ab3787b6c568330fd97e7a23939fd2325b62285c4611 extends Twig_Template
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
        $__internal_eb4a5eea62ebec3c747e53ef82209f79e8994d65ee24e233a6f1423f1f8ff244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4a5eea62ebec3c747e53ef82209f79e8994d65ee24e233a6f1423f1f8ff244->enter($__internal_eb4a5eea62ebec3c747e53ef82209f79e8994d65ee24e233a6f1423f1f8ff244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.error.is-error.js"));

        // line 1
        echo "// https://github.com/ljharb/proposal-is-error
var \$export = require('./_export');
var cof = require('./_cof');

\$export(\$export.S, 'Error', {
  isError: function isError(it) {
    return cof(it) === 'Error';
  }
});
";
        
        $__internal_eb4a5eea62ebec3c747e53ef82209f79e8994d65ee24e233a6f1423f1f8ff244->leave($__internal_eb4a5eea62ebec3c747e53ef82209f79e8994d65ee24e233a6f1423f1f8ff244_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.error.is-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/ljharb/proposal-is-error
var \$export = require('./_export');
var cof = require('./_cof');

\$export(\$export.S, 'Error', {
  isError: function isError(it) {
    return cof(it) === 'Error';
  }
});
", "node_modules/core-js/library/modules/es7.error.is-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.error.is-error.js");
    }
}

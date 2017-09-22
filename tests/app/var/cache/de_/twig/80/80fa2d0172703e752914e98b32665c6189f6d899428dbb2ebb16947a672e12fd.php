<?php

/* node_modules/core-js/modules/es7.error.is-error.js */
class __TwigTemplate_3f342d9a798ecc44e3de71db1e821ad44ce11d0c86142472459673c5ffdc0e0e extends Twig_Template
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
        $__internal_7ddf78aaecf5527909ec356977593f2c3e3cd8f3bfbaf123bc4a0a4b0fcd5641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddf78aaecf5527909ec356977593f2c3e3cd8f3bfbaf123bc4a0a4b0fcd5641->enter($__internal_7ddf78aaecf5527909ec356977593f2c3e3cd8f3bfbaf123bc4a0a4b0fcd5641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.error.is-error.js"));

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
        
        $__internal_7ddf78aaecf5527909ec356977593f2c3e3cd8f3bfbaf123bc4a0a4b0fcd5641->leave($__internal_7ddf78aaecf5527909ec356977593f2c3e3cd8f3bfbaf123bc4a0a4b0fcd5641_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.error.is-error.js";
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
", "node_modules/core-js/modules/es7.error.is-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.error.is-error.js");
    }
}

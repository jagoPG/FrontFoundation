<?php

/* node_modules/core-js/modules/es7.string.pad-end.js */
class __TwigTemplate_023188a6f31b49c15cc2d397cbfdc1b1875adbe2b1498c94b5bc1c0b2f868ccc extends Twig_Template
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
        $__internal_7445a7b88c536e408999df217cd59dc14b091d1cf41b2949591c643732658291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7445a7b88c536e408999df217cd59dc14b091d1cf41b2949591c643732658291->enter($__internal_7445a7b88c536e408999df217cd59dc14b091d1cf41b2949591c643732658291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.string.pad-end.js"));

        // line 1
        echo "'use strict';
// https://github.com/tc39/proposal-string-pad-start-end
var \$export = require('./_export');
var \$pad = require('./_string-pad');

\$export(\$export.P, 'String', {
  padEnd: function padEnd(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, false);
  }
});
";
        
        $__internal_7445a7b88c536e408999df217cd59dc14b091d1cf41b2949591c643732658291->leave($__internal_7445a7b88c536e408999df217cd59dc14b091d1cf41b2949591c643732658291_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.string.pad-end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/tc39/proposal-string-pad-start-end
var \$export = require('./_export');
var \$pad = require('./_string-pad');

\$export(\$export.P, 'String', {
  padEnd: function padEnd(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, false);
  }
});
", "node_modules/core-js/modules/es7.string.pad-end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.string.pad-end.js");
    }
}

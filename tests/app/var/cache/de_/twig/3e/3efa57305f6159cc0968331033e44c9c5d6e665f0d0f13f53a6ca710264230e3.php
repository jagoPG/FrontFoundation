<?php

/* node_modules/core-js/modules/es7.string.pad-start.js */
class __TwigTemplate_344584ee6eceb153e5ef95860a29a5dfd31d912a8878cff158e3bb037b70da15 extends Twig_Template
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
        $__internal_5e583f10e547c937bc64ad858be92f875637c8c3588874b1d0d5459513e365b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e583f10e547c937bc64ad858be92f875637c8c3588874b1d0d5459513e365b7->enter($__internal_5e583f10e547c937bc64ad858be92f875637c8c3588874b1d0d5459513e365b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.string.pad-start.js"));

        // line 1
        echo "'use strict';
// https://github.com/tc39/proposal-string-pad-start-end
var \$export = require('./_export');
var \$pad = require('./_string-pad');

\$export(\$export.P, 'String', {
  padStart: function padStart(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, true);
  }
});
";
        
        $__internal_5e583f10e547c937bc64ad858be92f875637c8c3588874b1d0d5459513e365b7->leave($__internal_5e583f10e547c937bc64ad858be92f875637c8c3588874b1d0d5459513e365b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.string.pad-start.js";
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
  padStart: function padStart(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, true);
  }
});
", "node_modules/core-js/modules/es7.string.pad-start.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.string.pad-start.js");
    }
}

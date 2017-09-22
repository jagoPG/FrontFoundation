<?php

/* node_modules/core-js/modules/es6.string.includes.js */
class __TwigTemplate_1181f73ea23031ed46c484c71b6613228787f2b1e8d9960260b45d3ba03f374b extends Twig_Template
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
        $__internal_6eccde7bef932098055b35c7141fa339ef7833a02fa198642dab9bff76f9f5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eccde7bef932098055b35c7141fa339ef7833a02fa198642dab9bff76f9f5ef->enter($__internal_6eccde7bef932098055b35c7141fa339ef7833a02fa198642dab9bff76f9f5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.includes.js"));

        // line 1
        echo "// 21.1.3.7 String.prototype.includes(searchString, position = 0)
'use strict';
var \$export = require('./_export');
var context = require('./_string-context');
var INCLUDES = 'includes';

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(INCLUDES), 'String', {
  includes: function includes(searchString /* , position = 0 */) {
    return !!~context(this, searchString, INCLUDES)
      .indexOf(searchString, arguments.length > 1 ? arguments[1] : undefined);
  }
});
";
        
        $__internal_6eccde7bef932098055b35c7141fa339ef7833a02fa198642dab9bff76f9f5ef->leave($__internal_6eccde7bef932098055b35c7141fa339ef7833a02fa198642dab9bff76f9f5ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 21.1.3.7 String.prototype.includes(searchString, position = 0)
'use strict';
var \$export = require('./_export');
var context = require('./_string-context');
var INCLUDES = 'includes';

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(INCLUDES), 'String', {
  includes: function includes(searchString /* , position = 0 */) {
    return !!~context(this, searchString, INCLUDES)
      .indexOf(searchString, arguments.length > 1 ? arguments[1] : undefined);
  }
});
", "node_modules/core-js/modules/es6.string.includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.includes.js");
    }
}

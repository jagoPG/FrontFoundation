<?php

/* node_modules/core-js/modules/es6.string.starts-with.js */
class __TwigTemplate_2321da4c7db83ca1c809ef5a27eebbe56ab0664df325607c1b8d762292573882 extends Twig_Template
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
        $__internal_e556e7411e77f1c38d3969c58a9c42952026d67a51dab731247a4b92e23af818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e556e7411e77f1c38d3969c58a9c42952026d67a51dab731247a4b92e23af818->enter($__internal_e556e7411e77f1c38d3969c58a9c42952026d67a51dab731247a4b92e23af818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.starts-with.js"));

        // line 1
        echo "// 21.1.3.18 String.prototype.startsWith(searchString [, position ])
'use strict';
var \$export = require('./_export');
var toLength = require('./_to-length');
var context = require('./_string-context');
var STARTS_WITH = 'startsWith';
var \$startsWith = ''[STARTS_WITH];

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(STARTS_WITH), 'String', {
  startsWith: function startsWith(searchString /* , position = 0 */) {
    var that = context(this, searchString, STARTS_WITH);
    var index = toLength(Math.min(arguments.length > 1 ? arguments[1] : undefined, that.length));
    var search = String(searchString);
    return \$startsWith
      ? \$startsWith.call(that, search, index)
      : that.slice(index, index + search.length) === search;
  }
});
";
        
        $__internal_e556e7411e77f1c38d3969c58a9c42952026d67a51dab731247a4b92e23af818->leave($__internal_e556e7411e77f1c38d3969c58a9c42952026d67a51dab731247a4b92e23af818_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.starts-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 21.1.3.18 String.prototype.startsWith(searchString [, position ])
'use strict';
var \$export = require('./_export');
var toLength = require('./_to-length');
var context = require('./_string-context');
var STARTS_WITH = 'startsWith';
var \$startsWith = ''[STARTS_WITH];

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(STARTS_WITH), 'String', {
  startsWith: function startsWith(searchString /* , position = 0 */) {
    var that = context(this, searchString, STARTS_WITH);
    var index = toLength(Math.min(arguments.length > 1 ? arguments[1] : undefined, that.length));
    var search = String(searchString);
    return \$startsWith
      ? \$startsWith.call(that, search, index)
      : that.slice(index, index + search.length) === search;
  }
});
", "node_modules/core-js/modules/es6.string.starts-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.starts-with.js");
    }
}

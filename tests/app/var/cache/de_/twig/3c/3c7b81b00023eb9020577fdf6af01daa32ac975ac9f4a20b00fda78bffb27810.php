<?php

/* node_modules/core-js/library/modules/es6.string.starts-with.js */
class __TwigTemplate_a98cd4f2994713b1797949e0de1d3d890a58074913df28e94fad48de85e61243 extends Twig_Template
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
        $__internal_2bd8ac87acbc3ad87c122efeb1cf9564012dfbbaf2b4208cb9539682cbe15f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd8ac87acbc3ad87c122efeb1cf9564012dfbbaf2b4208cb9539682cbe15f4d->enter($__internal_2bd8ac87acbc3ad87c122efeb1cf9564012dfbbaf2b4208cb9539682cbe15f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.starts-with.js"));

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
        
        $__internal_2bd8ac87acbc3ad87c122efeb1cf9564012dfbbaf2b4208cb9539682cbe15f4d->leave($__internal_2bd8ac87acbc3ad87c122efeb1cf9564012dfbbaf2b4208cb9539682cbe15f4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.starts-with.js";
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
", "node_modules/core-js/library/modules/es6.string.starts-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.starts-with.js");
    }
}

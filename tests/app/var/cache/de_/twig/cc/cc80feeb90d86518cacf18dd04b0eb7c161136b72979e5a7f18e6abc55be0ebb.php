<?php

/* node_modules/core-js/library/modules/es6.string.ends-with.js */
class __TwigTemplate_9a7bc5c55035616f9743181eef19d4e4f88621b6699305842ba52f75b91639ee extends Twig_Template
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
        $__internal_6d786e6383dc7a0cf809868517fe54cd7522ebe815aec1c0cb2ffa6c0c823bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d786e6383dc7a0cf809868517fe54cd7522ebe815aec1c0cb2ffa6c0c823bae->enter($__internal_6d786e6383dc7a0cf809868517fe54cd7522ebe815aec1c0cb2ffa6c0c823bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.ends-with.js"));

        // line 1
        echo "// 21.1.3.6 String.prototype.endsWith(searchString [, endPosition])
'use strict';
var \$export = require('./_export');
var toLength = require('./_to-length');
var context = require('./_string-context');
var ENDS_WITH = 'endsWith';
var \$endsWith = ''[ENDS_WITH];

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(ENDS_WITH), 'String', {
  endsWith: function endsWith(searchString /* , endPosition = @length */) {
    var that = context(this, searchString, ENDS_WITH);
    var endPosition = arguments.length > 1 ? arguments[1] : undefined;
    var len = toLength(that.length);
    var end = endPosition === undefined ? len : Math.min(toLength(endPosition), len);
    var search = String(searchString);
    return \$endsWith
      ? \$endsWith.call(that, search, end)
      : that.slice(end - search.length, end) === search;
  }
});
";
        
        $__internal_6d786e6383dc7a0cf809868517fe54cd7522ebe815aec1c0cb2ffa6c0c823bae->leave($__internal_6d786e6383dc7a0cf809868517fe54cd7522ebe815aec1c0cb2ffa6c0c823bae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.ends-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 21.1.3.6 String.prototype.endsWith(searchString [, endPosition])
'use strict';
var \$export = require('./_export');
var toLength = require('./_to-length');
var context = require('./_string-context');
var ENDS_WITH = 'endsWith';
var \$endsWith = ''[ENDS_WITH];

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(ENDS_WITH), 'String', {
  endsWith: function endsWith(searchString /* , endPosition = @length */) {
    var that = context(this, searchString, ENDS_WITH);
    var endPosition = arguments.length > 1 ? arguments[1] : undefined;
    var len = toLength(that.length);
    var end = endPosition === undefined ? len : Math.min(toLength(endPosition), len);
    var search = String(searchString);
    return \$endsWith
      ? \$endsWith.call(that, search, end)
      : that.slice(end - search.length, end) === search;
  }
});
", "node_modules/core-js/library/modules/es6.string.ends-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.ends-with.js");
    }
}

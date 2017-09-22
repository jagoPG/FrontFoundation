<?php

/* node_modules/core-js/modules/es6.string.ends-with.js */
class __TwigTemplate_c0419bdf8ddcbcf718d33c37f3a35cf787397720dcc2e7c7c73a359c9b8559dc extends Twig_Template
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
        $__internal_c7b28355804760d8e13d35f47e2e516567c44854aa9ac53dee8b2ccb126b346f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b28355804760d8e13d35f47e2e516567c44854aa9ac53dee8b2ccb126b346f->enter($__internal_c7b28355804760d8e13d35f47e2e516567c44854aa9ac53dee8b2ccb126b346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.ends-with.js"));

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
        
        $__internal_c7b28355804760d8e13d35f47e2e516567c44854aa9ac53dee8b2ccb126b346f->leave($__internal_c7b28355804760d8e13d35f47e2e516567c44854aa9ac53dee8b2ccb126b346f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.ends-with.js";
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
", "node_modules/core-js/modules/es6.string.ends-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.ends-with.js");
    }
}

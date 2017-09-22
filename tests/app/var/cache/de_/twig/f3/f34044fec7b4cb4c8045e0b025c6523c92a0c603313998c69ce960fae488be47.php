<?php

/* node_modules/core-js/modules/es6.array.of.js */
class __TwigTemplate_ec385aa90e7497d4fa4edfb3d7f721a808e2108225f5f14650d25d376771664a extends Twig_Template
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
        $__internal_db4671771a4a919c38c00d9c84961da97934a56cb25e1fad58f88d7de0a0be8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4671771a4a919c38c00d9c84961da97934a56cb25e1fad58f88d7de0a0be8c->enter($__internal_db4671771a4a919c38c00d9c84961da97934a56cb25e1fad58f88d7de0a0be8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.of.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var createProperty = require('./_create-property');

// WebKit Array.of isn't generic
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  function F() { /* empty */ }
  return !(Array.of.call(F) instanceof F);
}), 'Array', {
  // 22.1.2.3 Array.of( ...items)
  of: function of(/* ...args */) {
    var index = 0;
    var aLen = arguments.length;
    var result = new (typeof this == 'function' ? this : Array)(aLen);
    while (aLen > index) createProperty(result, index, arguments[index++]);
    result.length = aLen;
    return result;
  }
});
";
        
        $__internal_db4671771a4a919c38c00d9c84961da97934a56cb25e1fad58f88d7de0a0be8c->leave($__internal_db4671771a4a919c38c00d9c84961da97934a56cb25e1fad58f88d7de0a0be8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var createProperty = require('./_create-property');

// WebKit Array.of isn't generic
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  function F() { /* empty */ }
  return !(Array.of.call(F) instanceof F);
}), 'Array', {
  // 22.1.2.3 Array.of( ...items)
  of: function of(/* ...args */) {
    var index = 0;
    var aLen = arguments.length;
    var result = new (typeof this == 'function' ? this : Array)(aLen);
    while (aLen > index) createProperty(result, index, arguments[index++]);
    result.length = aLen;
    return result;
  }
});
", "node_modules/core-js/modules/es6.array.of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.of.js");
    }
}

<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/allOf.js */
class __TwigTemplate_80c48cca343027aaf52f1e39296e87e02259bdd3b4c3b0b56b3b09c579d33498 extends Twig_Template
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
        $__internal_14ebf1fda941ee79b8c6db76d580a379bbb1251352c6e09b4100e22d6132086d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ebf1fda941ee79b8c6db76d580a379bbb1251352c6e09b4100e22d6132086d->enter($__internal_14ebf1fda941ee79b8c6db76d580a379bbb1251352c6e09b4100e22d6132086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/allOf.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_allOf(it, \$keyword) {
  var out = ' ';
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  var \$currentBaseId = \$it.baseId,
    \$allSchemasEmpty = true;
  var arr1 = \$schema;
  if (arr1) {
    var \$sch, \$i = -1,
      l1 = arr1.length - 1;
    while (\$i < l1) {
      \$sch = arr1[\$i += 1];
      if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
        \$allSchemasEmpty = false;
        \$it.schema = \$sch;
        \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
        if (\$breakOnError) {
          out += ' if (' + (\$nextValid) + ') { ';
          \$closingBraces += '}';
        }
      }
    }
  }
  if (\$breakOnError) {
    if (\$allSchemasEmpty) {
      out += ' if (true) { ';
    } else {
      out += ' ' + (\$closingBraces.slice(0, -1)) + ' ';
    }
  }
  out = it.util.cleanUpCode(out);
  return out;
}
";
        
        $__internal_14ebf1fda941ee79b8c6db76d580a379bbb1251352c6e09b4100e22d6132086d->leave($__internal_14ebf1fda941ee79b8c6db76d580a379bbb1251352c6e09b4100e22d6132086d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/allOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_allOf(it, \$keyword) {
  var out = ' ';
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  var \$currentBaseId = \$it.baseId,
    \$allSchemasEmpty = true;
  var arr1 = \$schema;
  if (arr1) {
    var \$sch, \$i = -1,
      l1 = arr1.length - 1;
    while (\$i < l1) {
      \$sch = arr1[\$i += 1];
      if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
        \$allSchemasEmpty = false;
        \$it.schema = \$sch;
        \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
        if (\$breakOnError) {
          out += ' if (' + (\$nextValid) + ') { ';
          \$closingBraces += '}';
        }
      }
    }
  }
  if (\$breakOnError) {
    if (\$allSchemasEmpty) {
      out += ' if (true) { ';
    } else {
      out += ' ' + (\$closingBraces.slice(0, -1)) + ' ';
    }
  }
  out = it.util.cleanUpCode(out);
  return out;
}
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/allOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/allOf.js");
    }
}

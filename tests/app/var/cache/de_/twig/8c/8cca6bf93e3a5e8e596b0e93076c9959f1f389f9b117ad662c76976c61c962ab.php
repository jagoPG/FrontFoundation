<?php

/* node_modules/ajv-keywords/keywords/dotjs/patternRequired.js */
class __TwigTemplate_906056d6c46a8263734856e728bf6d18ec5bc849708365c10828554919808733 extends Twig_Template
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
        $__internal_aa5ec1e9fb173a4a2e3ee13ad7ccc835b9f9f609b8e82b43c30b68d03d8d5710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5ec1e9fb173a4a2e3ee13ad7ccc835b9f9f609b8e82b43c30b68d03d8d5710->enter($__internal_aa5ec1e9fb173a4a2e3ee13ad7ccc835b9f9f609b8e82b43c30b68d03d8d5710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/dotjs/patternRequired.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_patternRequired(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$key = 'key' + \$lvl,
    \$idx = 'idx' + \$lvl,
    \$matched = 'patternMatched' + \$lvl,
    \$dataProperties = 'dataProperties' + \$lvl,
    \$closingBraces = '',
    \$ownProperties = it.opts.ownProperties;
  out += 'var ' + (\$valid) + ' = true;';
  if (\$ownProperties) {
    out += ' var ' + (\$dataProperties) + ' = undefined;';
  }
  var arr1 = \$schema;
  if (arr1) {
    var \$pProperty, i1 = -1,
      l1 = arr1.length - 1;
    while (i1 < l1) {
      \$pProperty = arr1[i1 += 1];
      out += ' var ' + (\$matched) + ' = false;  ';
      if (\$ownProperties) {
        out += ' ' + (\$dataProperties) + ' = ' + (\$dataProperties) + ' || Object.keys(' + (\$data) + '); for (var ' + (\$idx) + '=0; ' + (\$idx) + '<' + (\$dataProperties) + '.length; ' + (\$idx) + '++) { var ' + (\$key) + ' = ' + (\$dataProperties) + '[' + (\$idx) + ']; ';
      } else {
        out += ' for (var ' + (\$key) + ' in ' + (\$data) + ') { ';
      }
      out += ' ' + (\$matched) + ' = ' + (it.usePattern(\$pProperty)) + '.test(' + (\$key) + '); if (' + (\$matched) + ') break; } ';
      var \$missingPattern = it.util.escapeQuotes(\$pProperty);
      out += ' if (!' + (\$matched) + ') { ' + (\$valid) + ' = false;  var err =   '; /* istanbul ignore else */
      if (it.createErrors !== false) {
        out += ' { keyword: \\'' + ('patternRequired') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { missingPattern: \\'' + (\$missingPattern) + '\\' } ';
        if (it.opts.messages !== false) {
          out += ' , message: \\'should have property matching pattern \\\\\\'' + (\$missingPattern) + '\\\\\\'\\' ';
        }
        if (it.opts.verbose) {
          out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
        }
        out += ' } ';
      } else {
        out += ' {} ';
      }
      out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; }   ';
      if (\$breakOnError) {
        \$closingBraces += '}';
        out += ' else { ';
      }
    }
  }
  out += '' + (\$closingBraces);
  return out;
}
";
        
        $__internal_aa5ec1e9fb173a4a2e3ee13ad7ccc835b9f9f609b8e82b43c30b68d03d8d5710->leave($__internal_aa5ec1e9fb173a4a2e3ee13ad7ccc835b9f9f609b8e82b43c30b68d03d8d5710_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/dotjs/patternRequired.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_patternRequired(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$key = 'key' + \$lvl,
    \$idx = 'idx' + \$lvl,
    \$matched = 'patternMatched' + \$lvl,
    \$dataProperties = 'dataProperties' + \$lvl,
    \$closingBraces = '',
    \$ownProperties = it.opts.ownProperties;
  out += 'var ' + (\$valid) + ' = true;';
  if (\$ownProperties) {
    out += ' var ' + (\$dataProperties) + ' = undefined;';
  }
  var arr1 = \$schema;
  if (arr1) {
    var \$pProperty, i1 = -1,
      l1 = arr1.length - 1;
    while (i1 < l1) {
      \$pProperty = arr1[i1 += 1];
      out += ' var ' + (\$matched) + ' = false;  ';
      if (\$ownProperties) {
        out += ' ' + (\$dataProperties) + ' = ' + (\$dataProperties) + ' || Object.keys(' + (\$data) + '); for (var ' + (\$idx) + '=0; ' + (\$idx) + '<' + (\$dataProperties) + '.length; ' + (\$idx) + '++) { var ' + (\$key) + ' = ' + (\$dataProperties) + '[' + (\$idx) + ']; ';
      } else {
        out += ' for (var ' + (\$key) + ' in ' + (\$data) + ') { ';
      }
      out += ' ' + (\$matched) + ' = ' + (it.usePattern(\$pProperty)) + '.test(' + (\$key) + '); if (' + (\$matched) + ') break; } ';
      var \$missingPattern = it.util.escapeQuotes(\$pProperty);
      out += ' if (!' + (\$matched) + ') { ' + (\$valid) + ' = false;  var err =   '; /* istanbul ignore else */
      if (it.createErrors !== false) {
        out += ' { keyword: \\'' + ('patternRequired') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { missingPattern: \\'' + (\$missingPattern) + '\\' } ';
        if (it.opts.messages !== false) {
          out += ' , message: \\'should have property matching pattern \\\\\\'' + (\$missingPattern) + '\\\\\\'\\' ';
        }
        if (it.opts.verbose) {
          out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
        }
        out += ' } ';
      } else {
        out += ' {} ';
      }
      out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; }   ';
      if (\$breakOnError) {
        \$closingBraces += '}';
        out += ' else { ';
      }
    }
  }
  out += '' + (\$closingBraces);
  return out;
}
", "node_modules/ajv-keywords/keywords/dotjs/patternRequired.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/dotjs/patternRequired.js");
    }
}

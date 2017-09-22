<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/patternRequired.js */
class __TwigTemplate_bede2f389af85b0a0e5452f4f3d24fdb70a77120e51e97d1b608ad366509bcc5 extends Twig_Template
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
        $__internal_f3dad8a6d3aea3c0eac2caae90c1593dd78e91b2747636b78cef8d614d91e896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dad8a6d3aea3c0eac2caae90c1593dd78e91b2747636b78cef8d614d91e896->enter($__internal_f3dad8a6d3aea3c0eac2caae90c1593dd78e91b2747636b78cef8d614d91e896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/patternRequired.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_patternRequired(it, \$keyword) {
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
    \$matched = 'patternMatched' + \$lvl,
    \$closingBraces = '',
    \$ownProperties = it.opts.ownProperties;
  out += 'var ' + (\$valid) + ' = true;';
  var arr1 = \$schema;
  if (arr1) {
    var \$pProperty, i1 = -1,
      l1 = arr1.length - 1;
    while (i1 < l1) {
      \$pProperty = arr1[i1 += 1];
      out += ' var ' + (\$matched) + ' = false; for (var ' + (\$key) + ' in ' + (\$data) + ') {  ';
      if (\$ownProperties) {
        out += ' if (!Object.prototype.hasOwnProperty.call(' + (\$data) + ', ' + (\$key) + ')) continue; ';
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
        
        $__internal_f3dad8a6d3aea3c0eac2caae90c1593dd78e91b2747636b78cef8d614d91e896->leave($__internal_f3dad8a6d3aea3c0eac2caae90c1593dd78e91b2747636b78cef8d614d91e896_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/patternRequired.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_patternRequired(it, \$keyword) {
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
    \$matched = 'patternMatched' + \$lvl,
    \$closingBraces = '',
    \$ownProperties = it.opts.ownProperties;
  out += 'var ' + (\$valid) + ' = true;';
  var arr1 = \$schema;
  if (arr1) {
    var \$pProperty, i1 = -1,
      l1 = arr1.length - 1;
    while (i1 < l1) {
      \$pProperty = arr1[i1 += 1];
      out += ' var ' + (\$matched) + ' = false; for (var ' + (\$key) + ' in ' + (\$data) + ') {  ';
      if (\$ownProperties) {
        out += ' if (!Object.prototype.hasOwnProperty.call(' + (\$data) + ', ' + (\$key) + ')) continue; ';
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
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/patternRequired.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/patternRequired.js");
    }
}

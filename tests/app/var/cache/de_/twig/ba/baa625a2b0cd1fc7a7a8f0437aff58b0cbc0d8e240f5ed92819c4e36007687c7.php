<?php

/* node_modules/ajv/lib/dotjs/propertyNames.js */
class __TwigTemplate_66d2063152255cea93a6c7ab73fac2b531647306286e7f885ae573a088f50367 extends Twig_Template
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
        $__internal_0766c84705529b91c3e0b153fb944427e00a27c8c498aee33a95b19804bfed8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0766c84705529b91c3e0b153fb944427e00a27c8c498aee33a95b19804bfed8a->enter($__internal_0766c84705529b91c3e0b153fb944427e00a27c8c498aee33a95b19804bfed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/propertyNames.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_propertyNames(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$errs = 'errs__' + \$lvl;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  if (it.util.schemaHasRules(\$schema, it.RULES.all)) {
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    var \$key = 'key' + \$lvl,
      \$idx = 'idx' + \$lvl,
      \$i = 'i' + \$lvl,
      \$invalidName = '\\' + ' + \$key + ' + \\'',
      \$dataNxt = \$it.dataLevel = it.dataLevel + 1,
      \$nextData = 'data' + \$dataNxt,
      \$dataProperties = 'dataProperties' + \$lvl,
      \$ownProperties = it.opts.ownProperties,
      \$currentBaseId = it.baseId;
    out += ' var ' + (\$errs) + ' = errors; ';
    if (\$ownProperties) {
      out += ' var ' + (\$dataProperties) + ' = undefined; ';
    }
    if (\$ownProperties) {
      out += ' ' + (\$dataProperties) + ' = ' + (\$dataProperties) + ' || Object.keys(' + (\$data) + '); for (var ' + (\$idx) + '=0; ' + (\$idx) + '<' + (\$dataProperties) + '.length; ' + (\$idx) + '++) { var ' + (\$key) + ' = ' + (\$dataProperties) + '[' + (\$idx) + ']; ';
    } else {
      out += ' for (var ' + (\$key) + ' in ' + (\$data) + ') { ';
    }
    out += ' var startErrs' + (\$lvl) + ' = errors; ';
    var \$passData = \$key;
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    var \$code = it.validate(\$it);
    \$it.baseId = \$currentBaseId;
    if (it.util.varOccurences(\$code, \$nextData) < 2) {
      out += ' ' + (it.util.varReplace(\$code, \$nextData, \$passData)) + ' ';
    } else {
      out += ' var ' + (\$nextData) + ' = ' + (\$passData) + '; ' + (\$code) + ' ';
    }
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' if (!' + (\$nextValid) + ') { for (var ' + (\$i) + '=startErrs' + (\$lvl) + '; ' + (\$i) + '<errors; ' + (\$i) + '++) { vErrors[' + (\$i) + '].propertyName = ' + (\$key) + '; }   var err =   '; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('propertyNames') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { propertyName: \\'' + (\$invalidName) + '\\' } ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'property name \\\\\\'' + (\$invalidName) + '\\\\\\' is invalid\\' ';
      }
      if (it.opts.verbose) {
        out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
      }
      out += ' } ';
    } else {
      out += ' {} ';
    }
    out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; ';
    if (!it.compositeRule && \$breakOnError) { /* istanbul ignore if */
      if (it.async) {
        out += ' throw new ValidationError(vErrors); ';
      } else {
        out += ' validate.errors = vErrors; return false; ';
      }
    }
    if (\$breakOnError) {
      out += ' break; ';
    }
    out += ' } }';
  }
  if (\$breakOnError) {
    out += ' ' + (\$closingBraces) + ' if (' + (\$errs) + ' == errors) {';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
";
        
        $__internal_0766c84705529b91c3e0b153fb944427e00a27c8c498aee33a95b19804bfed8a->leave($__internal_0766c84705529b91c3e0b153fb944427e00a27c8c498aee33a95b19804bfed8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/propertyNames.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_propertyNames(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$errs = 'errs__' + \$lvl;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  if (it.util.schemaHasRules(\$schema, it.RULES.all)) {
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    var \$key = 'key' + \$lvl,
      \$idx = 'idx' + \$lvl,
      \$i = 'i' + \$lvl,
      \$invalidName = '\\' + ' + \$key + ' + \\'',
      \$dataNxt = \$it.dataLevel = it.dataLevel + 1,
      \$nextData = 'data' + \$dataNxt,
      \$dataProperties = 'dataProperties' + \$lvl,
      \$ownProperties = it.opts.ownProperties,
      \$currentBaseId = it.baseId;
    out += ' var ' + (\$errs) + ' = errors; ';
    if (\$ownProperties) {
      out += ' var ' + (\$dataProperties) + ' = undefined; ';
    }
    if (\$ownProperties) {
      out += ' ' + (\$dataProperties) + ' = ' + (\$dataProperties) + ' || Object.keys(' + (\$data) + '); for (var ' + (\$idx) + '=0; ' + (\$idx) + '<' + (\$dataProperties) + '.length; ' + (\$idx) + '++) { var ' + (\$key) + ' = ' + (\$dataProperties) + '[' + (\$idx) + ']; ';
    } else {
      out += ' for (var ' + (\$key) + ' in ' + (\$data) + ') { ';
    }
    out += ' var startErrs' + (\$lvl) + ' = errors; ';
    var \$passData = \$key;
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    var \$code = it.validate(\$it);
    \$it.baseId = \$currentBaseId;
    if (it.util.varOccurences(\$code, \$nextData) < 2) {
      out += ' ' + (it.util.varReplace(\$code, \$nextData, \$passData)) + ' ';
    } else {
      out += ' var ' + (\$nextData) + ' = ' + (\$passData) + '; ' + (\$code) + ' ';
    }
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' if (!' + (\$nextValid) + ') { for (var ' + (\$i) + '=startErrs' + (\$lvl) + '; ' + (\$i) + '<errors; ' + (\$i) + '++) { vErrors[' + (\$i) + '].propertyName = ' + (\$key) + '; }   var err =   '; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('propertyNames') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { propertyName: \\'' + (\$invalidName) + '\\' } ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'property name \\\\\\'' + (\$invalidName) + '\\\\\\' is invalid\\' ';
      }
      if (it.opts.verbose) {
        out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
      }
      out += ' } ';
    } else {
      out += ' {} ';
    }
    out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; ';
    if (!it.compositeRule && \$breakOnError) { /* istanbul ignore if */
      if (it.async) {
        out += ' throw new ValidationError(vErrors); ';
      } else {
        out += ' validate.errors = vErrors; return false; ';
      }
    }
    if (\$breakOnError) {
      out += ' break; ';
    }
    out += ' } }';
  }
  if (\$breakOnError) {
    out += ' ' + (\$closingBraces) + ' if (' + (\$errs) + ' == errors) {';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
", "node_modules/ajv/lib/dotjs/propertyNames.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/propertyNames.js");
    }
}

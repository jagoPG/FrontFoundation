<?php

/* node_modules/ajv/lib/dotjs/anyOf.js */
class __TwigTemplate_6bb95c924265f0207d7638dee5b479d971a70a48e70d49b7f088fe3939237ce1 extends Twig_Template
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
        $__internal_20722b4a90b80722fbdfcd488b53036d19a987de70d70ba3858e102e994059b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20722b4a90b80722fbdfcd488b53036d19a987de70d70ba3858e102e994059b5->enter($__internal_20722b4a90b80722fbdfcd488b53036d19a987de70d70ba3858e102e994059b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/anyOf.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_anyOf(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$errs = 'errs__' + \$lvl;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  var \$noEmptySchema = \$schema.every(function(\$sch) {
    return it.util.schemaHasRules(\$sch, it.RULES.all);
  });
  if (\$noEmptySchema) {
    var \$currentBaseId = \$it.baseId;
    out += ' var ' + (\$errs) + ' = errors; var ' + (\$valid) + ' = false;  ';
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    var arr1 = \$schema;
    if (arr1) {
      var \$sch, \$i = -1,
        l1 = arr1.length - 1;
      while (\$i < l1) {
        \$sch = arr1[\$i += 1];
        \$it.schema = \$sch;
        \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
        out += ' ' + (\$valid) + ' = ' + (\$valid) + ' || ' + (\$nextValid) + '; if (!' + (\$valid) + ') { ';
        \$closingBraces += '}';
      }
    }
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' ' + (\$closingBraces) + ' if (!' + (\$valid) + ') {   var err =   '; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('anyOf') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should match some schema in anyOf\\' ';
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
    out += ' } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
    if (it.opts.allErrors) {
      out += ' } ';
    }
    out = it.util.cleanUpCode(out);
  } else {
    if (\$breakOnError) {
      out += ' if (true) { ';
    }
  }
  return out;
}
";
        
        $__internal_20722b4a90b80722fbdfcd488b53036d19a987de70d70ba3858e102e994059b5->leave($__internal_20722b4a90b80722fbdfcd488b53036d19a987de70d70ba3858e102e994059b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/anyOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_anyOf(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$errs = 'errs__' + \$lvl;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  var \$noEmptySchema = \$schema.every(function(\$sch) {
    return it.util.schemaHasRules(\$sch, it.RULES.all);
  });
  if (\$noEmptySchema) {
    var \$currentBaseId = \$it.baseId;
    out += ' var ' + (\$errs) + ' = errors; var ' + (\$valid) + ' = false;  ';
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    var arr1 = \$schema;
    if (arr1) {
      var \$sch, \$i = -1,
        l1 = arr1.length - 1;
      while (\$i < l1) {
        \$sch = arr1[\$i += 1];
        \$it.schema = \$sch;
        \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
        out += ' ' + (\$valid) + ' = ' + (\$valid) + ' || ' + (\$nextValid) + '; if (!' + (\$valid) + ') { ';
        \$closingBraces += '}';
      }
    }
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' ' + (\$closingBraces) + ' if (!' + (\$valid) + ') {   var err =   '; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('anyOf') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should match some schema in anyOf\\' ';
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
    out += ' } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
    if (it.opts.allErrors) {
      out += ' } ';
    }
    out = it.util.cleanUpCode(out);
  } else {
    if (\$breakOnError) {
      out += ' if (true) { ';
    }
  }
  return out;
}
", "node_modules/ajv/lib/dotjs/anyOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/anyOf.js");
    }
}

<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/anyOf.js */
class __TwigTemplate_be99311f1037db9332cc98210fd312cf3f3af4753d647857b7dfb7130c0b420f extends Twig_Template
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
        $__internal_ec855e4ef6ffcd6c83b0107645779b7e5e3e9dfae3b87d2625810e965217d2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec855e4ef6ffcd6c83b0107645779b7e5e3e9dfae3b87d2625810e965217d2d5->enter($__internal_ec855e4ef6ffcd6c83b0107645779b7e5e3e9dfae3b87d2625810e965217d2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/anyOf.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_anyOf(it, \$keyword) {
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
    out += ' ' + (\$closingBraces) + ' if (!' + (\$valid) + ') {  var err =   '; /* istanbul ignore else */
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
    out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
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
        
        $__internal_ec855e4ef6ffcd6c83b0107645779b7e5e3e9dfae3b87d2625810e965217d2d5->leave($__internal_ec855e4ef6ffcd6c83b0107645779b7e5e3e9dfae3b87d2625810e965217d2d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/anyOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_anyOf(it, \$keyword) {
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
    out += ' ' + (\$closingBraces) + ' if (!' + (\$valid) + ') {  var err =   '; /* istanbul ignore else */
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
    out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
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
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/anyOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/anyOf.js");
    }
}

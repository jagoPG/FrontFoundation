<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/oneOf.js */
class __TwigTemplate_10bdc72f6c02ebed614f8dbf1e0b6597a08171f9c706d22ca230216f8646d038 extends Twig_Template
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
        $__internal_6beb4cdd54b1e79d7186dfa753e4502a9ecd650458103359f3cc54925babb211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6beb4cdd54b1e79d7186dfa753e4502a9ecd650458103359f3cc54925babb211->enter($__internal_6beb4cdd54b1e79d7186dfa753e4502a9ecd650458103359f3cc54925babb211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/oneOf.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_oneOf(it, \$keyword) {
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
  out += 'var ' + (\$errs) + ' = errors;var prevValid' + (\$lvl) + ' = false;var ' + (\$valid) + ' = false;';
  var \$currentBaseId = \$it.baseId;
  var \$wasComposite = it.compositeRule;
  it.compositeRule = \$it.compositeRule = true;
  var arr1 = \$schema;
  if (arr1) {
    var \$sch, \$i = -1,
      l1 = arr1.length - 1;
    while (\$i < l1) {
      \$sch = arr1[\$i += 1];
      if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
        \$it.schema = \$sch;
        \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
      } else {
        out += ' var ' + (\$nextValid) + ' = true; ';
      }
      if (\$i) {
        out += ' if (' + (\$nextValid) + ' && prevValid' + (\$lvl) + ') ' + (\$valid) + ' = false; else { ';
        \$closingBraces += '}';
      }
      out += ' if (' + (\$nextValid) + ') ' + (\$valid) + ' = prevValid' + (\$lvl) + ' = true;';
    }
  }
  it.compositeRule = \$it.compositeRule = \$wasComposite;
  out += '' + (\$closingBraces) + 'if (!' + (\$valid) + ') {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('oneOf') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should match exactly one schema in oneOf\\' ';
    }
    if (it.opts.verbose) {
      out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
    }
    out += ' } ';
  } else {
    out += ' {} ';
  }
  var __err = out;
  out = \$\$outStack.pop();
  if (!it.compositeRule && \$breakOnError) { /* istanbul ignore if */
    if (it.async) {
      out += ' throw new ValidationError([' + (__err) + ']); ';
    } else {
      out += ' validate.errors = [' + (__err) + ']; return false; ';
    }
  } else {
    out += ' var err = ' + (__err) + ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; ';
  }
  out += '} else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; }';
  if (it.opts.allErrors) {
    out += ' } ';
  }
  return out;
}
";
        
        $__internal_6beb4cdd54b1e79d7186dfa753e4502a9ecd650458103359f3cc54925babb211->leave($__internal_6beb4cdd54b1e79d7186dfa753e4502a9ecd650458103359f3cc54925babb211_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/oneOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_oneOf(it, \$keyword) {
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
  out += 'var ' + (\$errs) + ' = errors;var prevValid' + (\$lvl) + ' = false;var ' + (\$valid) + ' = false;';
  var \$currentBaseId = \$it.baseId;
  var \$wasComposite = it.compositeRule;
  it.compositeRule = \$it.compositeRule = true;
  var arr1 = \$schema;
  if (arr1) {
    var \$sch, \$i = -1,
      l1 = arr1.length - 1;
    while (\$i < l1) {
      \$sch = arr1[\$i += 1];
      if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
        \$it.schema = \$sch;
        \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
      } else {
        out += ' var ' + (\$nextValid) + ' = true; ';
      }
      if (\$i) {
        out += ' if (' + (\$nextValid) + ' && prevValid' + (\$lvl) + ') ' + (\$valid) + ' = false; else { ';
        \$closingBraces += '}';
      }
      out += ' if (' + (\$nextValid) + ') ' + (\$valid) + ' = prevValid' + (\$lvl) + ' = true;';
    }
  }
  it.compositeRule = \$it.compositeRule = \$wasComposite;
  out += '' + (\$closingBraces) + 'if (!' + (\$valid) + ') {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('oneOf') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should match exactly one schema in oneOf\\' ';
    }
    if (it.opts.verbose) {
      out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
    }
    out += ' } ';
  } else {
    out += ' {} ';
  }
  var __err = out;
  out = \$\$outStack.pop();
  if (!it.compositeRule && \$breakOnError) { /* istanbul ignore if */
    if (it.async) {
      out += ' throw new ValidationError([' + (__err) + ']); ';
    } else {
      out += ' validate.errors = [' + (__err) + ']; return false; ';
    }
  } else {
    out += ' var err = ' + (__err) + ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; ';
  }
  out += '} else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; }';
  if (it.opts.allErrors) {
    out += ' } ';
  }
  return out;
}
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/oneOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/oneOf.js");
    }
}

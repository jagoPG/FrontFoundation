<?php

/* node_modules/ajv/lib/dotjs/contains.js */
class __TwigTemplate_27bcd61d1b907e656e8ccbfe73d42badeb216dab3f60eb2698dbbb0bf4103f44 extends Twig_Template
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
        $__internal_84ff30b981280959f8b59b24cab5a98f4ea3a788715b54e90e0d9f537fb9d79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ff30b981280959f8b59b24cab5a98f4ea3a788715b54e90e0d9f537fb9d79c->enter($__internal_84ff30b981280959f8b59b24cab5a98f4ea3a788715b54e90e0d9f537fb9d79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/contains.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_contains(it, \$keyword, \$ruleType) {
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
  var \$idx = 'i' + \$lvl,
    \$dataNxt = \$it.dataLevel = it.dataLevel + 1,
    \$nextData = 'data' + \$dataNxt,
    \$currentBaseId = it.baseId,
    \$nonEmptySchema = it.util.schemaHasRules(\$schema, it.RULES.all);
  out += 'var ' + (\$errs) + ' = errors;var ' + (\$valid) + ';';
  if (\$nonEmptySchema) {
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    out += ' var ' + (\$nextValid) + ' = false; for (var ' + (\$idx) + ' = 0; ' + (\$idx) + ' < ' + (\$data) + '.length; ' + (\$idx) + '++) { ';
    \$it.errorPath = it.util.getPathExpr(it.errorPath, \$idx, it.opts.jsonPointers, true);
    var \$passData = \$data + '[' + \$idx + ']';
    \$it.dataPathArr[\$dataNxt] = \$idx;
    var \$code = it.validate(\$it);
    \$it.baseId = \$currentBaseId;
    if (it.util.varOccurences(\$code, \$nextData) < 2) {
      out += ' ' + (it.util.varReplace(\$code, \$nextData, \$passData)) + ' ';
    } else {
      out += ' var ' + (\$nextData) + ' = ' + (\$passData) + '; ' + (\$code) + ' ';
    }
    out += ' if (' + (\$nextValid) + ') break; }  ';
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' ' + (\$closingBraces) + ' if (!' + (\$nextValid) + ') {';
  } else {
    out += ' if (' + (\$data) + '.length == 0) {';
  }
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('contains') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should contain a valid item\\' ';
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
  out += ' } else { ';
  if (\$nonEmptySchema) {
    out += '  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
  }
  if (it.opts.allErrors) {
    out += ' } ';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
";
        
        $__internal_84ff30b981280959f8b59b24cab5a98f4ea3a788715b54e90e0d9f537fb9d79c->leave($__internal_84ff30b981280959f8b59b24cab5a98f4ea3a788715b54e90e0d9f537fb9d79c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/contains.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_contains(it, \$keyword, \$ruleType) {
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
  var \$idx = 'i' + \$lvl,
    \$dataNxt = \$it.dataLevel = it.dataLevel + 1,
    \$nextData = 'data' + \$dataNxt,
    \$currentBaseId = it.baseId,
    \$nonEmptySchema = it.util.schemaHasRules(\$schema, it.RULES.all);
  out += 'var ' + (\$errs) + ' = errors;var ' + (\$valid) + ';';
  if (\$nonEmptySchema) {
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    out += ' var ' + (\$nextValid) + ' = false; for (var ' + (\$idx) + ' = 0; ' + (\$idx) + ' < ' + (\$data) + '.length; ' + (\$idx) + '++) { ';
    \$it.errorPath = it.util.getPathExpr(it.errorPath, \$idx, it.opts.jsonPointers, true);
    var \$passData = \$data + '[' + \$idx + ']';
    \$it.dataPathArr[\$dataNxt] = \$idx;
    var \$code = it.validate(\$it);
    \$it.baseId = \$currentBaseId;
    if (it.util.varOccurences(\$code, \$nextData) < 2) {
      out += ' ' + (it.util.varReplace(\$code, \$nextData, \$passData)) + ' ';
    } else {
      out += ' var ' + (\$nextData) + ' = ' + (\$passData) + '; ' + (\$code) + ' ';
    }
    out += ' if (' + (\$nextValid) + ') break; }  ';
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' ' + (\$closingBraces) + ' if (!' + (\$nextValid) + ') {';
  } else {
    out += ' if (' + (\$data) + '.length == 0) {';
  }
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('contains') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should contain a valid item\\' ';
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
  out += ' } else { ';
  if (\$nonEmptySchema) {
    out += '  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
  }
  if (it.opts.allErrors) {
    out += ' } ';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
", "node_modules/ajv/lib/dotjs/contains.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/contains.js");
    }
}

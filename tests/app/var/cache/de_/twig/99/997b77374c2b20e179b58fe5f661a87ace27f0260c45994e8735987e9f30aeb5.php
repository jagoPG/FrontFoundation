<?php

/* node_modules/har-validator/node_modules/ajv/lib/dotjs/not.js */
class __TwigTemplate_bfcaa2ed4111c813cba77515115f8304ef83bdc201093f264272058cd1354023 extends Twig_Template
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
        $__internal_c68ee4a5a5cdc50b5499281ee44e3ab4c2e90c7dd5e56929d12c67c4475ffb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68ee4a5a5cdc50b5499281ee44e3ab4c2e90c7dd5e56929d12c67c4475ffb2b->enter($__internal_c68ee4a5a5cdc50b5499281ee44e3ab4c2e90c7dd5e56929d12c67c4475ffb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/dotjs/not.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_not(it, \$keyword) {
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
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  if (it.util.schemaHasRules(\$schema, it.RULES.all)) {
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    out += ' var ' + (\$errs) + ' = errors;  ';
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    \$it.createErrors = false;
    var \$allErrorsOption;
    if (\$it.opts.allErrors) {
      \$allErrorsOption = \$it.opts.allErrors;
      \$it.opts.allErrors = false;
    }
    out += ' ' + (it.validate(\$it)) + ' ';
    \$it.createErrors = true;
    if (\$allErrorsOption) \$it.opts.allErrors = \$allErrorsOption;
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' if (' + (\$nextValid) + ') {   ';
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = ''; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('not') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should NOT be valid\\' ';
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
    out += ' } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
    if (it.opts.allErrors) {
      out += ' } ';
    }
  } else {
    out += '  var err =   '; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('not') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should NOT be valid\\' ';
      }
      if (it.opts.verbose) {
        out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
      }
      out += ' } ';
    } else {
      out += ' {} ';
    }
    out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; ';
    if (\$breakOnError) {
      out += ' if (false) { ';
    }
  }
  return out;
}
";
        
        $__internal_c68ee4a5a5cdc50b5499281ee44e3ab4c2e90c7dd5e56929d12c67c4475ffb2b->leave($__internal_c68ee4a5a5cdc50b5499281ee44e3ab4c2e90c7dd5e56929d12c67c4475ffb2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/dotjs/not.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_not(it, \$keyword) {
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
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  if (it.util.schemaHasRules(\$schema, it.RULES.all)) {
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    out += ' var ' + (\$errs) + ' = errors;  ';
    var \$wasComposite = it.compositeRule;
    it.compositeRule = \$it.compositeRule = true;
    \$it.createErrors = false;
    var \$allErrorsOption;
    if (\$it.opts.allErrors) {
      \$allErrorsOption = \$it.opts.allErrors;
      \$it.opts.allErrors = false;
    }
    out += ' ' + (it.validate(\$it)) + ' ';
    \$it.createErrors = true;
    if (\$allErrorsOption) \$it.opts.allErrors = \$allErrorsOption;
    it.compositeRule = \$it.compositeRule = \$wasComposite;
    out += ' if (' + (\$nextValid) + ') {   ';
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = ''; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('not') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should NOT be valid\\' ';
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
    out += ' } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } ';
    if (it.opts.allErrors) {
      out += ' } ';
    }
  } else {
    out += '  var err =   '; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('not') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should NOT be valid\\' ';
      }
      if (it.opts.verbose) {
        out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
      }
      out += ' } ';
    } else {
      out += ' {} ';
    }
    out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; ';
    if (\$breakOnError) {
      out += ' if (false) { ';
    }
  }
  return out;
}
", "node_modules/har-validator/node_modules/ajv/lib/dotjs/not.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/dotjs/not.js");
    }
}

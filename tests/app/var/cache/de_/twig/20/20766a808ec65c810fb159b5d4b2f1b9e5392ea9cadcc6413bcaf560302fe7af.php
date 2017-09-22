<?php

/* node_modules/ajv/lib/dotjs/const.js */
class __TwigTemplate_57ba57db989c308ae2483c70b8b9fb64906d96b88085aac72811951ef4916af2 extends Twig_Template
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
        $__internal_32e867c3fb7f0ccb8ccecdbc7ae7d747ee228624bfcee6343583eed89abd61dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e867c3fb7f0ccb8ccecdbc7ae7d747ee228624bfcee6343583eed89abd61dc->enter($__internal_32e867c3fb7f0ccb8ccecdbc7ae7d747ee228624bfcee6343583eed89abd61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/const.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_const(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$isData = it.opts.\$data && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  if (!\$isData) {
    out += ' var schema' + (\$lvl) + ' = validate.schema' + (\$schemaPath) + ';';
  }
  out += 'var ' + (\$valid) + ' = equal(' + (\$data) + ', schema' + (\$lvl) + '); if (!' + (\$valid) + ') {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('const') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be equal to constant\\' ';
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
  out += ' }';
  if (\$breakOnError) {
    out += ' else { ';
  }
  return out;
}
";
        
        $__internal_32e867c3fb7f0ccb8ccecdbc7ae7d747ee228624bfcee6343583eed89abd61dc->leave($__internal_32e867c3fb7f0ccb8ccecdbc7ae7d747ee228624bfcee6343583eed89abd61dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/const.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_const(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$isData = it.opts.\$data && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  if (!\$isData) {
    out += ' var schema' + (\$lvl) + ' = validate.schema' + (\$schemaPath) + ';';
  }
  out += 'var ' + (\$valid) + ' = equal(' + (\$data) + ', schema' + (\$lvl) + '); if (!' + (\$valid) + ') {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('const') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be equal to constant\\' ';
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
  out += ' }';
  if (\$breakOnError) {
    out += ' else { ';
  }
  return out;
}
", "node_modules/ajv/lib/dotjs/const.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/const.js");
    }
}

<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/enum.js */
class __TwigTemplate_8c100b768778412aebaecf4b4566035677ede2a9268b59be98c843304c8c765a extends Twig_Template
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
        $__internal_8455c22ce9e5cbdd665ac87fd2a120a0232a8b61bc27442920297b6b2d125960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8455c22ce9e5cbdd665ac87fd2a120a0232a8b61bc27442920297b6b2d125960->enter($__internal_8455c22ce9e5cbdd665ac87fd2a120a0232a8b61bc27442920297b6b2d125960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/enum.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_enum(it, \$keyword) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$isData = it.opts.v5 && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  var \$i = 'i' + \$lvl,
    \$vSchema = 'schema' + \$lvl;
  if (!\$isData) {
    out += ' var ' + (\$vSchema) + ' = validate.schema' + (\$schemaPath) + ';';
  }
  out += 'var ' + (\$valid) + ';';
  if (\$isData) {
    out += ' if (schema' + (\$lvl) + ' === undefined) ' + (\$valid) + ' = true; else if (!Array.isArray(schema' + (\$lvl) + ')) ' + (\$valid) + ' = false; else {';
  }
  out += '' + (\$valid) + ' = false;for (var ' + (\$i) + '=0; ' + (\$i) + '<' + (\$vSchema) + '.length; ' + (\$i) + '++) if (equal(' + (\$data) + ', ' + (\$vSchema) + '[' + (\$i) + '])) { ' + (\$valid) + ' = true; break; }';
  if (\$isData) {
    out += '  }  ';
  }
  out += ' if (!' + (\$valid) + ') {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('enum') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { allowedValues: schema' + (\$lvl) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be equal to one of the allowed values\\' ';
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
        
        $__internal_8455c22ce9e5cbdd665ac87fd2a120a0232a8b61bc27442920297b6b2d125960->leave($__internal_8455c22ce9e5cbdd665ac87fd2a120a0232a8b61bc27442920297b6b2d125960_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/enum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_enum(it, \$keyword) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$isData = it.opts.v5 && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  var \$i = 'i' + \$lvl,
    \$vSchema = 'schema' + \$lvl;
  if (!\$isData) {
    out += ' var ' + (\$vSchema) + ' = validate.schema' + (\$schemaPath) + ';';
  }
  out += 'var ' + (\$valid) + ';';
  if (\$isData) {
    out += ' if (schema' + (\$lvl) + ' === undefined) ' + (\$valid) + ' = true; else if (!Array.isArray(schema' + (\$lvl) + ')) ' + (\$valid) + ' = false; else {';
  }
  out += '' + (\$valid) + ' = false;for (var ' + (\$i) + '=0; ' + (\$i) + '<' + (\$vSchema) + '.length; ' + (\$i) + '++) if (equal(' + (\$data) + ', ' + (\$vSchema) + '[' + (\$i) + '])) { ' + (\$valid) + ' = true; break; }';
  if (\$isData) {
    out += '  }  ';
  }
  out += ' if (!' + (\$valid) + ') {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('enum') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { allowedValues: schema' + (\$lvl) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be equal to one of the allowed values\\' ';
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
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/enum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/enum.js");
    }
}

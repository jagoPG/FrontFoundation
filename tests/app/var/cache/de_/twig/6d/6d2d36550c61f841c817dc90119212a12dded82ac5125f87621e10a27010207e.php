<?php

/* node_modules/ajv/lib/dotjs/enum.js */
class __TwigTemplate_678a2d0759fb388e63ef2872e8653c941b15114608059e025096cc6b96a9e8da extends Twig_Template
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
        $__internal_35b75fbc7d80de680ae14c757c1005fdfac0a02addbadfe6d99ef0c14ce2d76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b75fbc7d80de680ae14c757c1005fdfac0a02addbadfe6d99ef0c14ce2d76e->enter($__internal_35b75fbc7d80de680ae14c757c1005fdfac0a02addbadfe6d99ef0c14ce2d76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/enum.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_enum(it, \$keyword, \$ruleType) {
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
        
        $__internal_35b75fbc7d80de680ae14c757c1005fdfac0a02addbadfe6d99ef0c14ce2d76e->leave($__internal_35b75fbc7d80de680ae14c757c1005fdfac0a02addbadfe6d99ef0c14ce2d76e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/enum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_enum(it, \$keyword, \$ruleType) {
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
", "node_modules/ajv/lib/dotjs/enum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/enum.js");
    }
}

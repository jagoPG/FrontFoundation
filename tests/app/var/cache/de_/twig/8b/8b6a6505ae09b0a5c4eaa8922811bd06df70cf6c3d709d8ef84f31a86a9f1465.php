<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/multipleOf.js */
class __TwigTemplate_6f7805eb1d813d60511f63049bf093d040561dc227100a98b4bd1ab23cc605a3 extends Twig_Template
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
        $__internal_dd114118a11c732ae9a805cdbbdb037549aa62fb771f5bc25e4c2ac4c9f8ef7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd114118a11c732ae9a805cdbbdb037549aa62fb771f5bc25e4c2ac4c9f8ef7a->enter($__internal_dd114118a11c732ae9a805cdbbdb037549aa62fb771f5bc25e4c2ac4c9f8ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/multipleOf.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_multipleOf(it, \$keyword) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$isData = it.opts.v5 && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  out += 'var division' + (\$lvl) + ';if (';
  if (\$isData) {
    out += ' ' + (\$schemaValue) + ' !== undefined && ( typeof ' + (\$schemaValue) + ' != \\'number\\' || ';
  }
  out += ' (division' + (\$lvl) + ' = ' + (\$data) + ' / ' + (\$schemaValue) + ', ';
  if (it.opts.multipleOfPrecision) {
    out += ' Math.abs(Math.round(division' + (\$lvl) + ') - division' + (\$lvl) + ') > 1e-' + (it.opts.multipleOfPrecision) + ' ';
  } else {
    out += ' division' + (\$lvl) + ' !== parseInt(division' + (\$lvl) + ') ';
  }
  out += ' ) ';
  if (\$isData) {
    out += '  )  ';
  }
  out += ' ) {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('multipleOf') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { multipleOf: ' + (\$schemaValue) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be multiple of ';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue);
      } else {
        out += '' + (\$schema) + '\\'';
      }
    }
    if (it.opts.verbose) {
      out += ' , schema:  ';
      if (\$isData) {
        out += 'validate.schema' + (\$schemaPath);
      } else {
        out += '' + (\$schema);
      }
      out += '         , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
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
  out += '} ';
  if (\$breakOnError) {
    out += ' else { ';
  }
  return out;
}
";
        
        $__internal_dd114118a11c732ae9a805cdbbdb037549aa62fb771f5bc25e4c2ac4c9f8ef7a->leave($__internal_dd114118a11c732ae9a805cdbbdb037549aa62fb771f5bc25e4c2ac4c9f8ef7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/multipleOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_multipleOf(it, \$keyword) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$isData = it.opts.v5 && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  out += 'var division' + (\$lvl) + ';if (';
  if (\$isData) {
    out += ' ' + (\$schemaValue) + ' !== undefined && ( typeof ' + (\$schemaValue) + ' != \\'number\\' || ';
  }
  out += ' (division' + (\$lvl) + ' = ' + (\$data) + ' / ' + (\$schemaValue) + ', ';
  if (it.opts.multipleOfPrecision) {
    out += ' Math.abs(Math.round(division' + (\$lvl) + ') - division' + (\$lvl) + ') > 1e-' + (it.opts.multipleOfPrecision) + ' ';
  } else {
    out += ' division' + (\$lvl) + ' !== parseInt(division' + (\$lvl) + ') ';
  }
  out += ' ) ';
  if (\$isData) {
    out += '  )  ';
  }
  out += ' ) {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('multipleOf') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { multipleOf: ' + (\$schemaValue) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be multiple of ';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue);
      } else {
        out += '' + (\$schema) + '\\'';
      }
    }
    if (it.opts.verbose) {
      out += ' , schema:  ';
      if (\$isData) {
        out += 'validate.schema' + (\$schemaPath);
      } else {
        out += '' + (\$schema);
      }
      out += '         , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
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
  out += '} ';
  if (\$breakOnError) {
    out += ' else { ';
  }
  return out;
}
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/multipleOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/multipleOf.js");
    }
}

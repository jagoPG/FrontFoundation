<?php

/* node_modules/har-validator/node_modules/ajv/lib/dotjs/multipleOf.js */
class __TwigTemplate_ab73b099e1bcdb8ee3ed6eb44c69c4979afb8ef2ad00a7a38d7cb066efcf8c64 extends Twig_Template
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
        $__internal_1c40ae7edeac9e86e1ae9925ebcf8829138a7e76246a0f3e255311dd4ae04eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c40ae7edeac9e86e1ae9925ebcf8829138a7e76246a0f3e255311dd4ae04eae->enter($__internal_1c40ae7edeac9e86e1ae9925ebcf8829138a7e76246a0f3e255311dd4ae04eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/dotjs/multipleOf.js"));

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
        
        $__internal_1c40ae7edeac9e86e1ae9925ebcf8829138a7e76246a0f3e255311dd4ae04eae->leave($__internal_1c40ae7edeac9e86e1ae9925ebcf8829138a7e76246a0f3e255311dd4ae04eae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/dotjs/multipleOf.js";
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
", "node_modules/har-validator/node_modules/ajv/lib/dotjs/multipleOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/dotjs/multipleOf.js");
    }
}

<?php

/* node_modules/ajv/lib/dotjs/_limitProperties.js */
class __TwigTemplate_7fa9fa98ed751918d80b9e8da0117c251d4fa9a25c1696be6670d66f65925d49 extends Twig_Template
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
        $__internal_4162e87508dc1fcd288fb13256b2a9c31448ff27ec7681f84fec1dcad3d730ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4162e87508dc1fcd288fb13256b2a9c31448ff27ec7681f84fec1dcad3d730ea->enter($__internal_4162e87508dc1fcd288fb13256b2a9c31448ff27ec7681f84fec1dcad3d730ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/_limitProperties.js"));

        // line 1
        echo "'use strict';
module.exports = function generate__limitProperties(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$errorKeyword;
  var \$data = 'data' + (\$dataLvl || '');
  var \$isData = it.opts.\$data && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  var \$op = \$keyword == 'maxProperties' ? '>' : '<';
  out += 'if ( ';
  if (\$isData) {
    out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
  }
  out += ' Object.keys(' + (\$data) + ').length ' + (\$op) + ' ' + (\$schemaValue) + ') { ';
  var \$errorKeyword = \$keyword;
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + (\$errorKeyword || '_limitProperties') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { limit: ' + (\$schemaValue) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should NOT have ';
      if (\$keyword == 'maxProperties') {
        out += 'more';
      } else {
        out += 'less';
      }
      out += ' than ';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue) + ' + \\'';
      } else {
        out += '' + (\$schema);
      }
      out += ' properties\\' ';
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
        
        $__internal_4162e87508dc1fcd288fb13256b2a9c31448ff27ec7681f84fec1dcad3d730ea->leave($__internal_4162e87508dc1fcd288fb13256b2a9c31448ff27ec7681f84fec1dcad3d730ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/_limitProperties.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate__limitProperties(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$errorKeyword;
  var \$data = 'data' + (\$dataLvl || '');
  var \$isData = it.opts.\$data && \$schema && \$schema.\$data,
    \$schemaValue;
  if (\$isData) {
    out += ' var schema' + (\$lvl) + ' = ' + (it.util.getData(\$schema.\$data, \$dataLvl, it.dataPathArr)) + '; ';
    \$schemaValue = 'schema' + \$lvl;
  } else {
    \$schemaValue = \$schema;
  }
  var \$op = \$keyword == 'maxProperties' ? '>' : '<';
  out += 'if ( ';
  if (\$isData) {
    out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
  }
  out += ' Object.keys(' + (\$data) + ').length ' + (\$op) + ' ' + (\$schemaValue) + ') { ';
  var \$errorKeyword = \$keyword;
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + (\$errorKeyword || '_limitProperties') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { limit: ' + (\$schemaValue) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should NOT have ';
      if (\$keyword == 'maxProperties') {
        out += 'more';
      } else {
        out += 'less';
      }
      out += ' than ';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue) + ' + \\'';
      } else {
        out += '' + (\$schema);
      }
      out += ' properties\\' ';
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
", "node_modules/ajv/lib/dotjs/_limitProperties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/_limitProperties.js");
    }
}
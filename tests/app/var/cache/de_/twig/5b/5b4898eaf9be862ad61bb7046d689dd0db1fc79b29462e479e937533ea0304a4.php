<?php

/* node_modules/ajv/lib/dotjs/_limitItems.js */
class __TwigTemplate_29c8b2056b57d1e394a8337201dce49e580e29242f1e4cd36a668e1655c1a7bf extends Twig_Template
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
        $__internal_5613cd164a7a15e7cafe9b7753c19fdbd091afd5ab5b1eb11e98300604f2283e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5613cd164a7a15e7cafe9b7753c19fdbd091afd5ab5b1eb11e98300604f2283e->enter($__internal_5613cd164a7a15e7cafe9b7753c19fdbd091afd5ab5b1eb11e98300604f2283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/_limitItems.js"));

        // line 1
        echo "'use strict';
module.exports = function generate__limitItems(it, \$keyword, \$ruleType) {
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
  var \$op = \$keyword == 'maxItems' ? '>' : '<';
  out += 'if ( ';
  if (\$isData) {
    out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
  }
  out += ' ' + (\$data) + '.length ' + (\$op) + ' ' + (\$schemaValue) + ') { ';
  var \$errorKeyword = \$keyword;
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + (\$errorKeyword || '_limitItems') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { limit: ' + (\$schemaValue) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should NOT have ';
      if (\$keyword == 'maxItems') {
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
      out += ' items\\' ';
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
        
        $__internal_5613cd164a7a15e7cafe9b7753c19fdbd091afd5ab5b1eb11e98300604f2283e->leave($__internal_5613cd164a7a15e7cafe9b7753c19fdbd091afd5ab5b1eb11e98300604f2283e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/_limitItems.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate__limitItems(it, \$keyword, \$ruleType) {
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
  var \$op = \$keyword == 'maxItems' ? '>' : '<';
  out += 'if ( ';
  if (\$isData) {
    out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
  }
  out += ' ' + (\$data) + '.length ' + (\$op) + ' ' + (\$schemaValue) + ') { ';
  var \$errorKeyword = \$keyword;
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + (\$errorKeyword || '_limitItems') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { limit: ' + (\$schemaValue) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should NOT have ';
      if (\$keyword == 'maxItems') {
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
      out += ' items\\' ';
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
", "node_modules/ajv/lib/dotjs/_limitItems.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/_limitItems.js");
    }
}

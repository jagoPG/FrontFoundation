<?php

/* node_modules/ajv/lib/dotjs/_limit.js */
class __TwigTemplate_5eff7522a34ed753fcd3087fd9fdf5a5fc536757483467ddfa04eaa2fcfe86d6 extends Twig_Template
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
        $__internal_395224075e42f9c38bc07913334c0c1d8da5df573c5abdc165fa777a09ef2b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395224075e42f9c38bc07913334c0c1d8da5df573c5abdc165fa777a09ef2b9e->enter($__internal_395224075e42f9c38bc07913334c0c1d8da5df573c5abdc165fa777a09ef2b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/_limit.js"));

        // line 1
        echo "'use strict';
module.exports = function generate__limit(it, \$keyword, \$ruleType) {
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
  var \$isMax = \$keyword == 'maximum',
    \$exclusiveKeyword = \$isMax ? 'exclusiveMaximum' : 'exclusiveMinimum',
    \$schemaExcl = it.schema[\$exclusiveKeyword],
    \$isDataExcl = it.opts.\$data && \$schemaExcl && \$schemaExcl.\$data,
    \$op = \$isMax ? '<' : '>',
    \$notOp = \$isMax ? '>' : '<',
    \$errorKeyword = undefined;
  if (\$isDataExcl) {
    var \$schemaValueExcl = it.util.getData(\$schemaExcl.\$data, \$dataLvl, it.dataPathArr),
      \$exclusive = 'exclusive' + \$lvl,
      \$exclType = 'exclType' + \$lvl,
      \$exclIsNumber = 'exclIsNumber' + \$lvl,
      \$opExpr = 'op' + \$lvl,
      \$opStr = '\\' + ' + \$opExpr + ' + \\'';
    out += ' var schemaExcl' + (\$lvl) + ' = ' + (\$schemaValueExcl) + '; ';
    \$schemaValueExcl = 'schemaExcl' + \$lvl;
    out += ' var ' + (\$exclusive) + '; var ' + (\$exclType) + ' = typeof ' + (\$schemaValueExcl) + '; if (' + (\$exclType) + ' != \\'boolean\\' && ' + (\$exclType) + ' != \\'undefined\\' && ' + (\$exclType) + ' != \\'number\\') { ';
    var \$errorKeyword = \$exclusiveKeyword;
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = ''; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + (\$errorKeyword || '_exclusiveLimit') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'' + (\$exclusiveKeyword) + ' should be boolean\\' ';
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
    out += ' } else if ( ';
    if (\$isData) {
      out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
    }
    out += ' ' + (\$exclType) + ' == \\'number\\' ? ( (' + (\$exclusive) + ' = ' + (\$schemaValue) + ' === undefined || ' + (\$schemaValueExcl) + ' ' + (\$op) + '= ' + (\$schemaValue) + ') ? ' + (\$data) + ' ' + (\$notOp) + '= ' + (\$schemaValueExcl) + ' : ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' ) : ( (' + (\$exclusive) + ' = ' + (\$schemaValueExcl) + ' === true) ? ' + (\$data) + ' ' + (\$notOp) + '= ' + (\$schemaValue) + ' : ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' ) || ' + (\$data) + ' !== ' + (\$data) + ') { var op' + (\$lvl) + ' = ' + (\$exclusive) + ' ? \\'' + (\$op) + '\\' : \\'' + (\$op) + '=\\';';
  } else {
    var \$exclIsNumber = typeof \$schemaExcl == 'number',
      \$opStr = \$op;
    if (\$exclIsNumber && \$isData) {
      var \$opExpr = '\\'' + \$opStr + '\\'';
      out += ' if ( ';
      if (\$isData) {
        out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
      }
      out += ' ( ' + (\$schemaValue) + ' === undefined || ' + (\$schemaExcl) + ' ' + (\$op) + '= ' + (\$schemaValue) + ' ? ' + (\$data) + ' ' + (\$notOp) + '= ' + (\$schemaExcl) + ' : ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' ) || ' + (\$data) + ' !== ' + (\$data) + ') { ';
    } else {
      if (\$exclIsNumber && \$schema === undefined) {
        \$exclusive = true;
        \$errorKeyword = \$exclusiveKeyword;
        \$errSchemaPath = it.errSchemaPath + '/' + \$exclusiveKeyword;
        \$schemaValue = \$schemaExcl;
        \$notOp += '=';
      } else {
        if (\$exclIsNumber) \$schemaValue = Math[\$isMax ? 'min' : 'max'](\$schemaExcl, \$schema);
        if (\$schemaExcl === (\$exclIsNumber ? \$schemaValue : true)) {
          \$exclusive = true;
          \$errorKeyword = \$exclusiveKeyword;
          \$errSchemaPath = it.errSchemaPath + '/' + \$exclusiveKeyword;
          \$notOp += '=';
        } else {
          \$exclusive = false;
          \$opStr += '=';
        }
      }
      var \$opExpr = '\\'' + \$opStr + '\\'';
      out += ' if ( ';
      if (\$isData) {
        out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
      }
      out += ' ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' || ' + (\$data) + ' !== ' + (\$data) + ') { ';
    }
  }
  \$errorKeyword = \$errorKeyword || \$keyword;
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + (\$errorKeyword || '_limit') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { comparison: ' + (\$opExpr) + ', limit: ' + (\$schemaValue) + ', exclusive: ' + (\$exclusive) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be ' + (\$opStr) + ' ';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue);
      } else {
        out += '' + (\$schemaValue) + '\\'';
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
  out += ' } ';
  if (\$breakOnError) {
    out += ' else { ';
  }
  return out;
}
";
        
        $__internal_395224075e42f9c38bc07913334c0c1d8da5df573c5abdc165fa777a09ef2b9e->leave($__internal_395224075e42f9c38bc07913334c0c1d8da5df573c5abdc165fa777a09ef2b9e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/_limit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate__limit(it, \$keyword, \$ruleType) {
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
  var \$isMax = \$keyword == 'maximum',
    \$exclusiveKeyword = \$isMax ? 'exclusiveMaximum' : 'exclusiveMinimum',
    \$schemaExcl = it.schema[\$exclusiveKeyword],
    \$isDataExcl = it.opts.\$data && \$schemaExcl && \$schemaExcl.\$data,
    \$op = \$isMax ? '<' : '>',
    \$notOp = \$isMax ? '>' : '<',
    \$errorKeyword = undefined;
  if (\$isDataExcl) {
    var \$schemaValueExcl = it.util.getData(\$schemaExcl.\$data, \$dataLvl, it.dataPathArr),
      \$exclusive = 'exclusive' + \$lvl,
      \$exclType = 'exclType' + \$lvl,
      \$exclIsNumber = 'exclIsNumber' + \$lvl,
      \$opExpr = 'op' + \$lvl,
      \$opStr = '\\' + ' + \$opExpr + ' + \\'';
    out += ' var schemaExcl' + (\$lvl) + ' = ' + (\$schemaValueExcl) + '; ';
    \$schemaValueExcl = 'schemaExcl' + \$lvl;
    out += ' var ' + (\$exclusive) + '; var ' + (\$exclType) + ' = typeof ' + (\$schemaValueExcl) + '; if (' + (\$exclType) + ' != \\'boolean\\' && ' + (\$exclType) + ' != \\'undefined\\' && ' + (\$exclType) + ' != \\'number\\') { ';
    var \$errorKeyword = \$exclusiveKeyword;
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = ''; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + (\$errorKeyword || '_exclusiveLimit') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: {} ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'' + (\$exclusiveKeyword) + ' should be boolean\\' ';
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
    out += ' } else if ( ';
    if (\$isData) {
      out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
    }
    out += ' ' + (\$exclType) + ' == \\'number\\' ? ( (' + (\$exclusive) + ' = ' + (\$schemaValue) + ' === undefined || ' + (\$schemaValueExcl) + ' ' + (\$op) + '= ' + (\$schemaValue) + ') ? ' + (\$data) + ' ' + (\$notOp) + '= ' + (\$schemaValueExcl) + ' : ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' ) : ( (' + (\$exclusive) + ' = ' + (\$schemaValueExcl) + ' === true) ? ' + (\$data) + ' ' + (\$notOp) + '= ' + (\$schemaValue) + ' : ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' ) || ' + (\$data) + ' !== ' + (\$data) + ') { var op' + (\$lvl) + ' = ' + (\$exclusive) + ' ? \\'' + (\$op) + '\\' : \\'' + (\$op) + '=\\';';
  } else {
    var \$exclIsNumber = typeof \$schemaExcl == 'number',
      \$opStr = \$op;
    if (\$exclIsNumber && \$isData) {
      var \$opExpr = '\\'' + \$opStr + '\\'';
      out += ' if ( ';
      if (\$isData) {
        out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
      }
      out += ' ( ' + (\$schemaValue) + ' === undefined || ' + (\$schemaExcl) + ' ' + (\$op) + '= ' + (\$schemaValue) + ' ? ' + (\$data) + ' ' + (\$notOp) + '= ' + (\$schemaExcl) + ' : ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' ) || ' + (\$data) + ' !== ' + (\$data) + ') { ';
    } else {
      if (\$exclIsNumber && \$schema === undefined) {
        \$exclusive = true;
        \$errorKeyword = \$exclusiveKeyword;
        \$errSchemaPath = it.errSchemaPath + '/' + \$exclusiveKeyword;
        \$schemaValue = \$schemaExcl;
        \$notOp += '=';
      } else {
        if (\$exclIsNumber) \$schemaValue = Math[\$isMax ? 'min' : 'max'](\$schemaExcl, \$schema);
        if (\$schemaExcl === (\$exclIsNumber ? \$schemaValue : true)) {
          \$exclusive = true;
          \$errorKeyword = \$exclusiveKeyword;
          \$errSchemaPath = it.errSchemaPath + '/' + \$exclusiveKeyword;
          \$notOp += '=';
        } else {
          \$exclusive = false;
          \$opStr += '=';
        }
      }
      var \$opExpr = '\\'' + \$opStr + '\\'';
      out += ' if ( ';
      if (\$isData) {
        out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'number\\') || ';
      }
      out += ' ' + (\$data) + ' ' + (\$notOp) + ' ' + (\$schemaValue) + ' || ' + (\$data) + ' !== ' + (\$data) + ') { ';
    }
  }
  \$errorKeyword = \$errorKeyword || \$keyword;
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + (\$errorKeyword || '_limit') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { comparison: ' + (\$opExpr) + ', limit: ' + (\$schemaValue) + ', exclusive: ' + (\$exclusive) + ' } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should be ' + (\$opStr) + ' ';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue);
      } else {
        out += '' + (\$schemaValue) + '\\'';
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
  out += ' } ';
  if (\$breakOnError) {
    out += ' else { ';
  }
  return out;
}
", "node_modules/ajv/lib/dotjs/_limit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/_limit.js");
    }
}

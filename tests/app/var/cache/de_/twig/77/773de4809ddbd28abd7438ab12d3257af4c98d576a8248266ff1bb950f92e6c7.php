<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/items.js */
class __TwigTemplate_318f2b8859e2c42ddd1f83f7940afe29f413d64460901fca2dde4056aafdf832 extends Twig_Template
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
        $__internal_f9c9c9d407560bd5168f82df502c3cc58c064d4200b195a4473f5d466ae36bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c9c9d407560bd5168f82df502c3cc58c064d4200b195a4473f5d466ae36bea->enter($__internal_f9c9c9d407560bd5168f82df502c3cc58c064d4200b195a4473f5d466ae36bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/items.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_items(it, \$keyword) {
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
    \$currentBaseId = it.baseId;
  out += 'var ' + (\$errs) + ' = errors;var ' + (\$valid) + ';';
  if (Array.isArray(\$schema)) {
    var \$additionalItems = it.schema.additionalItems;
    if (\$additionalItems === false) {
      out += ' ' + (\$valid) + ' = ' + (\$data) + '.length <= ' + (\$schema.length) + '; ';
      var \$currErrSchemaPath = \$errSchemaPath;
      \$errSchemaPath = it.errSchemaPath + '/additionalItems';
      out += '  if (!' + (\$valid) + ') {   ';
      var \$\$outStack = \$\$outStack || [];
      \$\$outStack.push(out);
      out = ''; /* istanbul ignore else */
      if (it.createErrors !== false) {
        out += ' { keyword: \\'' + ('additionalItems') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { limit: ' + (\$schema.length) + ' } ';
        if (it.opts.messages !== false) {
          out += ' , message: \\'should NOT have more than ' + (\$schema.length) + ' items\\' ';
        }
        if (it.opts.verbose) {
          out += ' , schema: false , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
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
      \$errSchemaPath = \$currErrSchemaPath;
      if (\$breakOnError) {
        \$closingBraces += '}';
        out += ' else { ';
      }
    }
    var arr1 = \$schema;
    if (arr1) {
      var \$sch, \$i = -1,
        l1 = arr1.length - 1;
      while (\$i < l1) {
        \$sch = arr1[\$i += 1];
        if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
          out += ' ' + (\$nextValid) + ' = true; if (' + (\$data) + '.length > ' + (\$i) + ') { ';
          var \$passData = \$data + '[' + \$i + ']';
          \$it.schema = \$sch;
          \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
          \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
          \$it.errorPath = it.util.getPathExpr(it.errorPath, \$i, it.opts.jsonPointers, true);
          \$it.dataPathArr[\$dataNxt] = \$i;
          var \$code = it.validate(\$it);
          \$it.baseId = \$currentBaseId;
          if (it.util.varOccurences(\$code, \$nextData) < 2) {
            out += ' ' + (it.util.varReplace(\$code, \$nextData, \$passData)) + ' ';
          } else {
            out += ' var ' + (\$nextData) + ' = ' + (\$passData) + '; ' + (\$code) + ' ';
          }
          out += ' }  ';
          if (\$breakOnError) {
            out += ' if (' + (\$nextValid) + ') { ';
            \$closingBraces += '}';
          }
        }
      }
    }
    if (typeof \$additionalItems == 'object' && it.util.schemaHasRules(\$additionalItems, it.RULES.all)) {
      \$it.schema = \$additionalItems;
      \$it.schemaPath = it.schemaPath + '.additionalItems';
      \$it.errSchemaPath = it.errSchemaPath + '/additionalItems';
      out += ' ' + (\$nextValid) + ' = true; if (' + (\$data) + '.length > ' + (\$schema.length) + ') {  for (var ' + (\$idx) + ' = ' + (\$schema.length) + '; ' + (\$idx) + ' < ' + (\$data) + '.length; ' + (\$idx) + '++) { ';
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
      if (\$breakOnError) {
        out += ' if (!' + (\$nextValid) + ') break; ';
      }
      out += ' } }  ';
      if (\$breakOnError) {
        out += ' if (' + (\$nextValid) + ') { ';
        \$closingBraces += '}';
      }
    }
  } else if (it.util.schemaHasRules(\$schema, it.RULES.all)) {
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    out += '  for (var ' + (\$idx) + ' = ' + (0) + '; ' + (\$idx) + ' < ' + (\$data) + '.length; ' + (\$idx) + '++) { ';
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
    if (\$breakOnError) {
      out += ' if (!' + (\$nextValid) + ') break; ';
    }
    out += ' }  ';
    if (\$breakOnError) {
      out += ' if (' + (\$nextValid) + ') { ';
      \$closingBraces += '}';
    }
  }
  if (\$breakOnError) {
    out += ' ' + (\$closingBraces) + ' if (' + (\$errs) + ' == errors) {';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
";
        
        $__internal_f9c9c9d407560bd5168f82df502c3cc58c064d4200b195a4473f5d466ae36bea->leave($__internal_f9c9c9d407560bd5168f82df502c3cc58c064d4200b195a4473f5d466ae36bea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/items.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_items(it, \$keyword) {
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
    \$currentBaseId = it.baseId;
  out += 'var ' + (\$errs) + ' = errors;var ' + (\$valid) + ';';
  if (Array.isArray(\$schema)) {
    var \$additionalItems = it.schema.additionalItems;
    if (\$additionalItems === false) {
      out += ' ' + (\$valid) + ' = ' + (\$data) + '.length <= ' + (\$schema.length) + '; ';
      var \$currErrSchemaPath = \$errSchemaPath;
      \$errSchemaPath = it.errSchemaPath + '/additionalItems';
      out += '  if (!' + (\$valid) + ') {   ';
      var \$\$outStack = \$\$outStack || [];
      \$\$outStack.push(out);
      out = ''; /* istanbul ignore else */
      if (it.createErrors !== false) {
        out += ' { keyword: \\'' + ('additionalItems') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { limit: ' + (\$schema.length) + ' } ';
        if (it.opts.messages !== false) {
          out += ' , message: \\'should NOT have more than ' + (\$schema.length) + ' items\\' ';
        }
        if (it.opts.verbose) {
          out += ' , schema: false , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
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
      \$errSchemaPath = \$currErrSchemaPath;
      if (\$breakOnError) {
        \$closingBraces += '}';
        out += ' else { ';
      }
    }
    var arr1 = \$schema;
    if (arr1) {
      var \$sch, \$i = -1,
        l1 = arr1.length - 1;
      while (\$i < l1) {
        \$sch = arr1[\$i += 1];
        if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
          out += ' ' + (\$nextValid) + ' = true; if (' + (\$data) + '.length > ' + (\$i) + ') { ';
          var \$passData = \$data + '[' + \$i + ']';
          \$it.schema = \$sch;
          \$it.schemaPath = \$schemaPath + '[' + \$i + ']';
          \$it.errSchemaPath = \$errSchemaPath + '/' + \$i;
          \$it.errorPath = it.util.getPathExpr(it.errorPath, \$i, it.opts.jsonPointers, true);
          \$it.dataPathArr[\$dataNxt] = \$i;
          var \$code = it.validate(\$it);
          \$it.baseId = \$currentBaseId;
          if (it.util.varOccurences(\$code, \$nextData) < 2) {
            out += ' ' + (it.util.varReplace(\$code, \$nextData, \$passData)) + ' ';
          } else {
            out += ' var ' + (\$nextData) + ' = ' + (\$passData) + '; ' + (\$code) + ' ';
          }
          out += ' }  ';
          if (\$breakOnError) {
            out += ' if (' + (\$nextValid) + ') { ';
            \$closingBraces += '}';
          }
        }
      }
    }
    if (typeof \$additionalItems == 'object' && it.util.schemaHasRules(\$additionalItems, it.RULES.all)) {
      \$it.schema = \$additionalItems;
      \$it.schemaPath = it.schemaPath + '.additionalItems';
      \$it.errSchemaPath = it.errSchemaPath + '/additionalItems';
      out += ' ' + (\$nextValid) + ' = true; if (' + (\$data) + '.length > ' + (\$schema.length) + ') {  for (var ' + (\$idx) + ' = ' + (\$schema.length) + '; ' + (\$idx) + ' < ' + (\$data) + '.length; ' + (\$idx) + '++) { ';
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
      if (\$breakOnError) {
        out += ' if (!' + (\$nextValid) + ') break; ';
      }
      out += ' } }  ';
      if (\$breakOnError) {
        out += ' if (' + (\$nextValid) + ') { ';
        \$closingBraces += '}';
      }
    }
  } else if (it.util.schemaHasRules(\$schema, it.RULES.all)) {
    \$it.schema = \$schema;
    \$it.schemaPath = \$schemaPath;
    \$it.errSchemaPath = \$errSchemaPath;
    out += '  for (var ' + (\$idx) + ' = ' + (0) + '; ' + (\$idx) + ' < ' + (\$data) + '.length; ' + (\$idx) + '++) { ';
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
    if (\$breakOnError) {
      out += ' if (!' + (\$nextValid) + ') break; ';
    }
    out += ' }  ';
    if (\$breakOnError) {
      out += ' if (' + (\$nextValid) + ') { ';
      \$closingBraces += '}';
    }
  }
  if (\$breakOnError) {
    out += ' ' + (\$closingBraces) + ' if (' + (\$errs) + ' == errors) {';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/items.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/items.js");
    }
}

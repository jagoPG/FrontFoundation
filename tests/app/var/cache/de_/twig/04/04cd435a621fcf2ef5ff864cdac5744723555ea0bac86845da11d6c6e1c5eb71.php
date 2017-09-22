<?php

/* node_modules/har-validator/node_modules/ajv/lib/dotjs/uniqueItems.js */
class __TwigTemplate_27bc83bf45ab87982747d83d667a1bb94f528d7a5b2ad65a0a8e4eca56c180b5 extends Twig_Template
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
        $__internal_a84b1f0855cbe43e4faf754dbe01cd5e08508d4ea7bcb0cefe5e6855cfbfcfa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84b1f0855cbe43e4faf754dbe01cd5e08508d4ea7bcb0cefe5e6855cfbfcfa1->enter($__internal_a84b1f0855cbe43e4faf754dbe01cd5e08508d4ea7bcb0cefe5e6855cfbfcfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/dotjs/uniqueItems.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_uniqueItems(it, \$keyword) {
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
  if ((\$schema || \$isData) && it.opts.uniqueItems !== false) {
    if (\$isData) {
      out += ' var ' + (\$valid) + '; if (' + (\$schemaValue) + ' === false || ' + (\$schemaValue) + ' === undefined) ' + (\$valid) + ' = true; else if (typeof ' + (\$schemaValue) + ' != \\'boolean\\') ' + (\$valid) + ' = false; else { ';
    }
    out += ' var ' + (\$valid) + ' = true; if (' + (\$data) + '.length > 1) { var i = ' + (\$data) + '.length, j; outer: for (;i--;) { for (j = i; j--;) { if (equal(' + (\$data) + '[i], ' + (\$data) + '[j])) { ' + (\$valid) + ' = false; break outer; } } } } ';
    if (\$isData) {
      out += '  }  ';
    }
    out += ' if (!' + (\$valid) + ') {   ';
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = ''; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('uniqueItems') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { i: i, j: j } ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should NOT have duplicate items (items ## \\' + j + \\' and \\' + i + \\' are identical)\\' ';
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
  } else {
    if (\$breakOnError) {
      out += ' if (true) { ';
    }
  }
  return out;
}
";
        
        $__internal_a84b1f0855cbe43e4faf754dbe01cd5e08508d4ea7bcb0cefe5e6855cfbfcfa1->leave($__internal_a84b1f0855cbe43e4faf754dbe01cd5e08508d4ea7bcb0cefe5e6855cfbfcfa1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/dotjs/uniqueItems.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_uniqueItems(it, \$keyword) {
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
  if ((\$schema || \$isData) && it.opts.uniqueItems !== false) {
    if (\$isData) {
      out += ' var ' + (\$valid) + '; if (' + (\$schemaValue) + ' === false || ' + (\$schemaValue) + ' === undefined) ' + (\$valid) + ' = true; else if (typeof ' + (\$schemaValue) + ' != \\'boolean\\') ' + (\$valid) + ' = false; else { ';
    }
    out += ' var ' + (\$valid) + ' = true; if (' + (\$data) + '.length > 1) { var i = ' + (\$data) + '.length, j; outer: for (;i--;) { for (j = i; j--;) { if (equal(' + (\$data) + '[i], ' + (\$data) + '[j])) { ' + (\$valid) + ' = false; break outer; } } } } ';
    if (\$isData) {
      out += '  }  ';
    }
    out += ' if (!' + (\$valid) + ') {   ';
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = ''; /* istanbul ignore else */
    if (it.createErrors !== false) {
      out += ' { keyword: \\'' + ('uniqueItems') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { i: i, j: j } ';
      if (it.opts.messages !== false) {
        out += ' , message: \\'should NOT have duplicate items (items ## \\' + j + \\' and \\' + i + \\' are identical)\\' ';
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
  } else {
    if (\$breakOnError) {
      out += ' if (true) { ';
    }
  }
  return out;
}
", "node_modules/har-validator/node_modules/ajv/lib/dotjs/uniqueItems.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/dotjs/uniqueItems.js");
    }
}

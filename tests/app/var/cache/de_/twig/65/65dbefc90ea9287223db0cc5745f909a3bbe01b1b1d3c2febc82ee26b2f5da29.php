<?php

/* node_modules/har-validator/node_modules/ajv/lib/dotjs/ref.js */
class __TwigTemplate_c843da2b1cc0e65dc439ddc18a2f9d327f759e807b768ab9d192c1c2d3a53697 extends Twig_Template
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
        $__internal_4045403088306379b800a7cc28aadfda76d90ec55f47c7f233fbc087fcb50094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4045403088306379b800a7cc28aadfda76d90ec55f47c7f233fbc087fcb50094->enter($__internal_4045403088306379b800a7cc28aadfda76d90ec55f47c7f233fbc087fcb50094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/dotjs/ref.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_ref(it, \$keyword) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$async, \$refCode;
  if (\$schema == '#' || \$schema == '#/') {
    if (it.isRoot) {
      \$async = it.async;
      \$refCode = 'validate';
    } else {
      \$async = it.root.schema.\$async === true;
      \$refCode = 'root.refVal[0]';
    }
  } else {
    var \$refVal = it.resolveRef(it.baseId, \$schema, it.isRoot);
    if (\$refVal === undefined) {
      var \$message = 'can\\'t resolve reference ' + \$schema + ' from id ' + it.baseId;
      if (it.opts.missingRefs == 'fail') {
        console.log(\$message);
        var \$\$outStack = \$\$outStack || [];
        \$\$outStack.push(out);
        out = ''; /* istanbul ignore else */
        if (it.createErrors !== false) {
          out += ' { keyword: \\'' + ('\$ref') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { ref: \\'' + (it.util.escapeQuotes(\$schema)) + '\\' } ';
          if (it.opts.messages !== false) {
            out += ' , message: \\'can\\\\\\'t resolve reference ' + (it.util.escapeQuotes(\$schema)) + '\\' ';
          }
          if (it.opts.verbose) {
            out += ' , schema: ' + (it.util.toQuotedString(\$schema)) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
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
        if (\$breakOnError) {
          out += ' if (false) { ';
        }
      } else if (it.opts.missingRefs == 'ignore') {
        console.log(\$message);
        if (\$breakOnError) {
          out += ' if (true) { ';
        }
      } else {
        var \$error = new Error(\$message);
        \$error.missingRef = it.resolve.url(it.baseId, \$schema);
        \$error.missingSchema = it.resolve.normalizeId(it.resolve.fullPath(\$error.missingRef));
        throw \$error;
      }
    } else if (\$refVal.inline) {
      var \$it = it.util.copy(it);
      \$it.level++;
      var \$nextValid = 'valid' + \$it.level;
      \$it.schema = \$refVal.schema;
      \$it.schemaPath = '';
      \$it.errSchemaPath = \$schema;
      var \$code = it.validate(\$it).replace(/validate\\.schema/g, \$refVal.code);
      out += ' ' + (\$code) + ' ';
      if (\$breakOnError) {
        out += ' if (' + (\$nextValid) + ') { ';
      }
    } else {
      \$async = \$refVal.\$async === true;
      \$refCode = \$refVal.code;
    }
  }
  if (\$refCode) {
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = '';
    if (it.opts.passContext) {
      out += ' ' + (\$refCode) + '.call(this, ';
    } else {
      out += ' ' + (\$refCode) + '( ';
    }
    out += ' ' + (\$data) + ', (dataPath || \\'\\')';
    if (it.errorPath != '\"\"') {
      out += ' + ' + (it.errorPath);
    }
    var \$parentData = \$dataLvl ? 'data' + ((\$dataLvl - 1) || '') : 'parentData',
      \$parentDataProperty = \$dataLvl ? it.dataPathArr[\$dataLvl] : 'parentDataProperty';
    out += ' , ' + (\$parentData) + ' , ' + (\$parentDataProperty) + ', rootData)  ';
    var __callValidate = out;
    out = \$\$outStack.pop();
    if (\$async) {
      if (!it.async) throw new Error('async schema referenced by sync schema');
      out += ' try { ';
      if (\$breakOnError) {
        out += 'var ' + (\$valid) + ' =';
      }
      out += ' ' + (it.yieldAwait) + ' ' + (__callValidate) + '; } catch (e) { if (!(e instanceof ValidationError)) throw e; if (vErrors === null) vErrors = e.errors; else vErrors = vErrors.concat(e.errors); errors = vErrors.length; } ';
      if (\$breakOnError) {
        out += ' if (' + (\$valid) + ') { ';
      }
    } else {
      out += ' if (!' + (__callValidate) + ') { if (vErrors === null) vErrors = ' + (\$refCode) + '.errors; else vErrors = vErrors.concat(' + (\$refCode) + '.errors); errors = vErrors.length; } ';
      if (\$breakOnError) {
        out += ' else { ';
      }
    }
  }
  return out;
}
";
        
        $__internal_4045403088306379b800a7cc28aadfda76d90ec55f47c7f233fbc087fcb50094->leave($__internal_4045403088306379b800a7cc28aadfda76d90ec55f47c7f233fbc087fcb50094_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/dotjs/ref.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_ref(it, \$keyword) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$valid = 'valid' + \$lvl;
  var \$async, \$refCode;
  if (\$schema == '#' || \$schema == '#/') {
    if (it.isRoot) {
      \$async = it.async;
      \$refCode = 'validate';
    } else {
      \$async = it.root.schema.\$async === true;
      \$refCode = 'root.refVal[0]';
    }
  } else {
    var \$refVal = it.resolveRef(it.baseId, \$schema, it.isRoot);
    if (\$refVal === undefined) {
      var \$message = 'can\\'t resolve reference ' + \$schema + ' from id ' + it.baseId;
      if (it.opts.missingRefs == 'fail') {
        console.log(\$message);
        var \$\$outStack = \$\$outStack || [];
        \$\$outStack.push(out);
        out = ''; /* istanbul ignore else */
        if (it.createErrors !== false) {
          out += ' { keyword: \\'' + ('\$ref') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { ref: \\'' + (it.util.escapeQuotes(\$schema)) + '\\' } ';
          if (it.opts.messages !== false) {
            out += ' , message: \\'can\\\\\\'t resolve reference ' + (it.util.escapeQuotes(\$schema)) + '\\' ';
          }
          if (it.opts.verbose) {
            out += ' , schema: ' + (it.util.toQuotedString(\$schema)) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
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
        if (\$breakOnError) {
          out += ' if (false) { ';
        }
      } else if (it.opts.missingRefs == 'ignore') {
        console.log(\$message);
        if (\$breakOnError) {
          out += ' if (true) { ';
        }
      } else {
        var \$error = new Error(\$message);
        \$error.missingRef = it.resolve.url(it.baseId, \$schema);
        \$error.missingSchema = it.resolve.normalizeId(it.resolve.fullPath(\$error.missingRef));
        throw \$error;
      }
    } else if (\$refVal.inline) {
      var \$it = it.util.copy(it);
      \$it.level++;
      var \$nextValid = 'valid' + \$it.level;
      \$it.schema = \$refVal.schema;
      \$it.schemaPath = '';
      \$it.errSchemaPath = \$schema;
      var \$code = it.validate(\$it).replace(/validate\\.schema/g, \$refVal.code);
      out += ' ' + (\$code) + ' ';
      if (\$breakOnError) {
        out += ' if (' + (\$nextValid) + ') { ';
      }
    } else {
      \$async = \$refVal.\$async === true;
      \$refCode = \$refVal.code;
    }
  }
  if (\$refCode) {
    var \$\$outStack = \$\$outStack || [];
    \$\$outStack.push(out);
    out = '';
    if (it.opts.passContext) {
      out += ' ' + (\$refCode) + '.call(this, ';
    } else {
      out += ' ' + (\$refCode) + '( ';
    }
    out += ' ' + (\$data) + ', (dataPath || \\'\\')';
    if (it.errorPath != '\"\"') {
      out += ' + ' + (it.errorPath);
    }
    var \$parentData = \$dataLvl ? 'data' + ((\$dataLvl - 1) || '') : 'parentData',
      \$parentDataProperty = \$dataLvl ? it.dataPathArr[\$dataLvl] : 'parentDataProperty';
    out += ' , ' + (\$parentData) + ' , ' + (\$parentDataProperty) + ', rootData)  ';
    var __callValidate = out;
    out = \$\$outStack.pop();
    if (\$async) {
      if (!it.async) throw new Error('async schema referenced by sync schema');
      out += ' try { ';
      if (\$breakOnError) {
        out += 'var ' + (\$valid) + ' =';
      }
      out += ' ' + (it.yieldAwait) + ' ' + (__callValidate) + '; } catch (e) { if (!(e instanceof ValidationError)) throw e; if (vErrors === null) vErrors = e.errors; else vErrors = vErrors.concat(e.errors); errors = vErrors.length; } ';
      if (\$breakOnError) {
        out += ' if (' + (\$valid) + ') { ';
      }
    } else {
      out += ' if (!' + (__callValidate) + ') { if (vErrors === null) vErrors = ' + (\$refCode) + '.errors; else vErrors = vErrors.concat(' + (\$refCode) + '.errors); errors = vErrors.length; } ';
      if (\$breakOnError) {
        out += ' else { ';
      }
    }
  }
  return out;
}
", "node_modules/har-validator/node_modules/ajv/lib/dotjs/ref.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/dotjs/ref.js");
    }
}

<?php

/* node_modules/ajv/lib/dotjs/ref.js */
class __TwigTemplate_98677c483e407d4bad92f4fef7d90cf0cfeabb3b80660bb78f6fb5ddaf45ec89 extends Twig_Template
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
        $__internal_d824037910a16e0660165979fa22e604ecb450bab21938598c16baae0c652e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d824037910a16e0660165979fa22e604ecb450bab21938598c16baae0c652e36->enter($__internal_d824037910a16e0660165979fa22e604ecb450bab21938598c16baae0c652e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/ref.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_ref(it, \$keyword, \$ruleType) {
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
      var \$message = it.MissingRefError.message(it.baseId, \$schema);
      if (it.opts.missingRefs == 'fail') {
        console.error(\$message);
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
        console.warn(\$message);
        if (\$breakOnError) {
          out += ' if (true) { ';
        }
      } else {
        throw new it.MissingRefError(it.baseId, \$schema, \$message);
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
      if (\$breakOnError) {
        out += ' var ' + (\$valid) + '; ';
      }
      out += ' try { ' + (it.yieldAwait) + ' ' + (__callValidate) + '; ';
      if (\$breakOnError) {
        out += ' ' + (\$valid) + ' = true; ';
      }
      out += ' } catch (e) { if (!(e instanceof ValidationError)) throw e; if (vErrors === null) vErrors = e.errors; else vErrors = vErrors.concat(e.errors); errors = vErrors.length; ';
      if (\$breakOnError) {
        out += ' ' + (\$valid) + ' = false; ';
      }
      out += ' } ';
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
        
        $__internal_d824037910a16e0660165979fa22e604ecb450bab21938598c16baae0c652e36->leave($__internal_d824037910a16e0660165979fa22e604ecb450bab21938598c16baae0c652e36_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/ref.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_ref(it, \$keyword, \$ruleType) {
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
      var \$message = it.MissingRefError.message(it.baseId, \$schema);
      if (it.opts.missingRefs == 'fail') {
        console.error(\$message);
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
        console.warn(\$message);
        if (\$breakOnError) {
          out += ' if (true) { ';
        }
      } else {
        throw new it.MissingRefError(it.baseId, \$schema, \$message);
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
      if (\$breakOnError) {
        out += ' var ' + (\$valid) + '; ';
      }
      out += ' try { ' + (it.yieldAwait) + ' ' + (__callValidate) + '; ';
      if (\$breakOnError) {
        out += ' ' + (\$valid) + ' = true; ';
      }
      out += ' } catch (e) { if (!(e instanceof ValidationError)) throw e; if (vErrors === null) vErrors = e.errors; else vErrors = vErrors.concat(e.errors); errors = vErrors.length; ';
      if (\$breakOnError) {
        out += ' ' + (\$valid) + ' = false; ';
      }
      out += ' } ';
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
", "node_modules/ajv/lib/dotjs/ref.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/ref.js");
    }
}

<?php

/* node_modules/har-validator/node_modules/ajv/lib/dotjs/switch.js */
class __TwigTemplate_564c3ffce511e5e2f36e5b66be1738afbfc3a037e960269c19eca2d0c1aa9564 extends Twig_Template
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
        $__internal_9cb6654131e6c89915969e5cb893c0d173dcd408bde94084c397a573cf279253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb6654131e6c89915969e5cb893c0d173dcd408bde94084c397a573cf279253->enter($__internal_9cb6654131e6c89915969e5cb893c0d173dcd408bde94084c397a573cf279253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/dotjs/switch.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_switch(it, \$keyword) {
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
  var \$ifPassed = 'ifPassed' + it.level,
    \$currentBaseId = \$it.baseId,
    \$shouldContinue;
  out += 'var ' + (\$ifPassed) + ';';
  var arr1 = \$schema;
  if (arr1) {
    var \$sch, \$caseIndex = -1,
      l1 = arr1.length - 1;
    while (\$caseIndex < l1) {
      \$sch = arr1[\$caseIndex += 1];
      if (\$caseIndex && !\$shouldContinue) {
        out += ' if (!' + (\$ifPassed) + ') { ';
        \$closingBraces += '}';
      }
      if (\$sch.if && it.util.schemaHasRules(\$sch.if, it.RULES.all)) {
        out += ' var ' + (\$errs) + ' = errors;   ';
        var \$wasComposite = it.compositeRule;
        it.compositeRule = \$it.compositeRule = true;
        \$it.createErrors = false;
        \$it.schema = \$sch.if;
        \$it.schemaPath = \$schemaPath + '[' + \$caseIndex + '].if';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$caseIndex + '/if';
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
        \$it.createErrors = true;
        it.compositeRule = \$it.compositeRule = \$wasComposite;
        out += ' ' + (\$ifPassed) + ' = ' + (\$nextValid) + '; if (' + (\$ifPassed) + ') {  ';
        if (typeof \$sch.then == 'boolean') {
          if (\$sch.then === false) {
            var \$\$outStack = \$\$outStack || [];
            \$\$outStack.push(out);
            out = ''; /* istanbul ignore else */
            if (it.createErrors !== false) {
              out += ' { keyword: \\'' + ('switch') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { caseIndex: ' + (\$caseIndex) + ' } ';
              if (it.opts.messages !== false) {
                out += ' , message: \\'should pass \"switch\" keyword validation\\' ';
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
          }
          out += ' var ' + (\$nextValid) + ' = ' + (\$sch.then) + '; ';
        } else {
          \$it.schema = \$sch.then;
          \$it.schemaPath = \$schemaPath + '[' + \$caseIndex + '].then';
          \$it.errSchemaPath = \$errSchemaPath + '/' + \$caseIndex + '/then';
          out += '  ' + (it.validate(\$it)) + ' ';
          \$it.baseId = \$currentBaseId;
        }
        out += '  } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } } ';
      } else {
        out += ' ' + (\$ifPassed) + ' = true;  ';
        if (typeof \$sch.then == 'boolean') {
          if (\$sch.then === false) {
            var \$\$outStack = \$\$outStack || [];
            \$\$outStack.push(out);
            out = ''; /* istanbul ignore else */
            if (it.createErrors !== false) {
              out += ' { keyword: \\'' + ('switch') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { caseIndex: ' + (\$caseIndex) + ' } ';
              if (it.opts.messages !== false) {
                out += ' , message: \\'should pass \"switch\" keyword validation\\' ';
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
          }
          out += ' var ' + (\$nextValid) + ' = ' + (\$sch.then) + '; ';
        } else {
          \$it.schema = \$sch.then;
          \$it.schemaPath = \$schemaPath + '[' + \$caseIndex + '].then';
          \$it.errSchemaPath = \$errSchemaPath + '/' + \$caseIndex + '/then';
          out += '  ' + (it.validate(\$it)) + ' ';
          \$it.baseId = \$currentBaseId;
        }
      }
      \$shouldContinue = \$sch.continue
    }
  }
  out += '' + (\$closingBraces) + 'var ' + (\$valid) + ' = ' + (\$nextValid) + '; ';
  out = it.util.cleanUpCode(out);
  return out;
}
";
        
        $__internal_9cb6654131e6c89915969e5cb893c0d173dcd408bde94084c397a573cf279253->leave($__internal_9cb6654131e6c89915969e5cb893c0d173dcd408bde94084c397a573cf279253_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/dotjs/switch.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_switch(it, \$keyword) {
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
  var \$ifPassed = 'ifPassed' + it.level,
    \$currentBaseId = \$it.baseId,
    \$shouldContinue;
  out += 'var ' + (\$ifPassed) + ';';
  var arr1 = \$schema;
  if (arr1) {
    var \$sch, \$caseIndex = -1,
      l1 = arr1.length - 1;
    while (\$caseIndex < l1) {
      \$sch = arr1[\$caseIndex += 1];
      if (\$caseIndex && !\$shouldContinue) {
        out += ' if (!' + (\$ifPassed) + ') { ';
        \$closingBraces += '}';
      }
      if (\$sch.if && it.util.schemaHasRules(\$sch.if, it.RULES.all)) {
        out += ' var ' + (\$errs) + ' = errors;   ';
        var \$wasComposite = it.compositeRule;
        it.compositeRule = \$it.compositeRule = true;
        \$it.createErrors = false;
        \$it.schema = \$sch.if;
        \$it.schemaPath = \$schemaPath + '[' + \$caseIndex + '].if';
        \$it.errSchemaPath = \$errSchemaPath + '/' + \$caseIndex + '/if';
        out += '  ' + (it.validate(\$it)) + ' ';
        \$it.baseId = \$currentBaseId;
        \$it.createErrors = true;
        it.compositeRule = \$it.compositeRule = \$wasComposite;
        out += ' ' + (\$ifPassed) + ' = ' + (\$nextValid) + '; if (' + (\$ifPassed) + ') {  ';
        if (typeof \$sch.then == 'boolean') {
          if (\$sch.then === false) {
            var \$\$outStack = \$\$outStack || [];
            \$\$outStack.push(out);
            out = ''; /* istanbul ignore else */
            if (it.createErrors !== false) {
              out += ' { keyword: \\'' + ('switch') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { caseIndex: ' + (\$caseIndex) + ' } ';
              if (it.opts.messages !== false) {
                out += ' , message: \\'should pass \"switch\" keyword validation\\' ';
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
          }
          out += ' var ' + (\$nextValid) + ' = ' + (\$sch.then) + '; ';
        } else {
          \$it.schema = \$sch.then;
          \$it.schemaPath = \$schemaPath + '[' + \$caseIndex + '].then';
          \$it.errSchemaPath = \$errSchemaPath + '/' + \$caseIndex + '/then';
          out += '  ' + (it.validate(\$it)) + ' ';
          \$it.baseId = \$currentBaseId;
        }
        out += '  } else {  errors = ' + (\$errs) + '; if (vErrors !== null) { if (' + (\$errs) + ') vErrors.length = ' + (\$errs) + '; else vErrors = null; } } ';
      } else {
        out += ' ' + (\$ifPassed) + ' = true;  ';
        if (typeof \$sch.then == 'boolean') {
          if (\$sch.then === false) {
            var \$\$outStack = \$\$outStack || [];
            \$\$outStack.push(out);
            out = ''; /* istanbul ignore else */
            if (it.createErrors !== false) {
              out += ' { keyword: \\'' + ('switch') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { caseIndex: ' + (\$caseIndex) + ' } ';
              if (it.opts.messages !== false) {
                out += ' , message: \\'should pass \"switch\" keyword validation\\' ';
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
          }
          out += ' var ' + (\$nextValid) + ' = ' + (\$sch.then) + '; ';
        } else {
          \$it.schema = \$sch.then;
          \$it.schemaPath = \$schemaPath + '[' + \$caseIndex + '].then';
          \$it.errSchemaPath = \$errSchemaPath + '/' + \$caseIndex + '/then';
          out += '  ' + (it.validate(\$it)) + ' ';
          \$it.baseId = \$currentBaseId;
        }
      }
      \$shouldContinue = \$sch.continue
    }
  }
  out += '' + (\$closingBraces) + 'var ' + (\$valid) + ' = ' + (\$nextValid) + '; ';
  out = it.util.cleanUpCode(out);
  return out;
}
", "node_modules/har-validator/node_modules/ajv/lib/dotjs/switch.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/dotjs/switch.js");
    }
}

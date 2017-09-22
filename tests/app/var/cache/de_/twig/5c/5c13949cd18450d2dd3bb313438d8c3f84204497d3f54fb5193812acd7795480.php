<?php

/* node_modules/ajv/lib/dotjs/dependencies.js */
class __TwigTemplate_33698df4363bdbbd743e081c12e099e79b15d945064b3d8f9602446368f3e461 extends Twig_Template
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
        $__internal_c34602dc44aacaca8c81d609afe988e43a6c5b041c046216448f3c2ef592e9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34602dc44aacaca8c81d609afe988e43a6c5b041c046216448f3c2ef592e9b9->enter($__internal_c34602dc44aacaca8c81d609afe988e43a6c5b041c046216448f3c2ef592e9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/dotjs/dependencies.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_dependencies(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$errs = 'errs__' + \$lvl;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  var \$schemaDeps = {},
    \$propertyDeps = {},
    \$ownProperties = it.opts.ownProperties;
  for (\$property in \$schema) {
    var \$sch = \$schema[\$property];
    var \$deps = Array.isArray(\$sch) ? \$propertyDeps : \$schemaDeps;
    \$deps[\$property] = \$sch;
  }
  out += 'var ' + (\$errs) + ' = errors;';
  var \$currentErrorPath = it.errorPath;
  out += 'var missing' + (\$lvl) + ';';
  for (var \$property in \$propertyDeps) {
    \$deps = \$propertyDeps[\$property];
    if (\$deps.length) {
      out += ' if ( ' + (\$data) + (it.util.getProperty(\$property)) + ' !== undefined ';
      if (\$ownProperties) {
        out += ' && Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$property)) + '\\') ';
      }
      if (\$breakOnError) {
        out += ' && ( ';
        var arr1 = \$deps;
        if (arr1) {
          var \$propertyKey, \$i = -1,
            l1 = arr1.length - 1;
          while (\$i < l1) {
            \$propertyKey = arr1[\$i += 1];
            if (\$i) {
              out += ' || ';
            }
            var \$prop = it.util.getProperty(\$propertyKey),
              \$useData = \$data + \$prop;
            out += ' ( ( ' + (\$useData) + ' === undefined ';
            if (\$ownProperties) {
              out += ' || ! Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$propertyKey)) + '\\') ';
            }
            out += ') && (missing' + (\$lvl) + ' = ' + (it.util.toQuotedString(it.opts.jsonPointers ? \$propertyKey : \$prop)) + ') ) ';
          }
        }
        out += ')) {  ';
        var \$propertyPath = 'missing' + \$lvl,
          \$missingProperty = '\\' + ' + \$propertyPath + ' + \\'';
        if (it.opts._errorDataPathProperty) {
          it.errorPath = it.opts.jsonPointers ? it.util.getPathExpr(\$currentErrorPath, \$propertyPath, true) : \$currentErrorPath + ' + ' + \$propertyPath;
        }
        var \$\$outStack = \$\$outStack || [];
        \$\$outStack.push(out);
        out = ''; /* istanbul ignore else */
        if (it.createErrors !== false) {
          out += ' { keyword: \\'' + ('dependencies') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { property: \\'' + (it.util.escapeQuotes(\$property)) + '\\', missingProperty: \\'' + (\$missingProperty) + '\\', depsCount: ' + (\$deps.length) + ', deps: \\'' + (it.util.escapeQuotes(\$deps.length == 1 ? \$deps[0] : \$deps.join(\", \"))) + '\\' } ';
          if (it.opts.messages !== false) {
            out += ' , message: \\'should have ';
            if (\$deps.length == 1) {
              out += 'property ' + (it.util.escapeQuotes(\$deps[0]));
            } else {
              out += 'properties ' + (it.util.escapeQuotes(\$deps.join(\", \")));
            }
            out += ' when property ' + (it.util.escapeQuotes(\$property)) + ' is present\\' ';
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
      } else {
        out += ' ) { ';
        var arr2 = \$deps;
        if (arr2) {
          var \$propertyKey, i2 = -1,
            l2 = arr2.length - 1;
          while (i2 < l2) {
            \$propertyKey = arr2[i2 += 1];
            var \$prop = it.util.getProperty(\$propertyKey),
              \$missingProperty = it.util.escapeQuotes(\$propertyKey),
              \$useData = \$data + \$prop;
            if (it.opts._errorDataPathProperty) {
              it.errorPath = it.util.getPath(\$currentErrorPath, \$propertyKey, it.opts.jsonPointers);
            }
            out += ' if ( ' + (\$useData) + ' === undefined ';
            if (\$ownProperties) {
              out += ' || ! Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$propertyKey)) + '\\') ';
            }
            out += ') {  var err =   '; /* istanbul ignore else */
            if (it.createErrors !== false) {
              out += ' { keyword: \\'' + ('dependencies') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { property: \\'' + (it.util.escapeQuotes(\$property)) + '\\', missingProperty: \\'' + (\$missingProperty) + '\\', depsCount: ' + (\$deps.length) + ', deps: \\'' + (it.util.escapeQuotes(\$deps.length == 1 ? \$deps[0] : \$deps.join(\", \"))) + '\\' } ';
              if (it.opts.messages !== false) {
                out += ' , message: \\'should have ';
                if (\$deps.length == 1) {
                  out += 'property ' + (it.util.escapeQuotes(\$deps[0]));
                } else {
                  out += 'properties ' + (it.util.escapeQuotes(\$deps.join(\", \")));
                }
                out += ' when property ' + (it.util.escapeQuotes(\$property)) + ' is present\\' ';
              }
              if (it.opts.verbose) {
                out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
              }
              out += ' } ';
            } else {
              out += ' {} ';
            }
            out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; } ';
          }
        }
      }
      out += ' }   ';
      if (\$breakOnError) {
        \$closingBraces += '}';
        out += ' else { ';
      }
    }
  }
  it.errorPath = \$currentErrorPath;
  var \$currentBaseId = \$it.baseId;
  for (var \$property in \$schemaDeps) {
    var \$sch = \$schemaDeps[\$property];
    if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
      out += ' ' + (\$nextValid) + ' = true; if ( ' + (\$data) + (it.util.getProperty(\$property)) + ' !== undefined ';
      if (\$ownProperties) {
        out += ' && Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$property)) + '\\') ';
      }
      out += ') { ';
      \$it.schema = \$sch;
      \$it.schemaPath = \$schemaPath + it.util.getProperty(\$property);
      \$it.errSchemaPath = \$errSchemaPath + '/' + it.util.escapeFragment(\$property);
      out += '  ' + (it.validate(\$it)) + ' ';
      \$it.baseId = \$currentBaseId;
      out += ' }  ';
      if (\$breakOnError) {
        out += ' if (' + (\$nextValid) + ') { ';
        \$closingBraces += '}';
      }
    }
  }
  if (\$breakOnError) {
    out += '   ' + (\$closingBraces) + ' if (' + (\$errs) + ' == errors) {';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
";
        
        $__internal_c34602dc44aacaca8c81d609afe988e43a6c5b041c046216448f3c2ef592e9b9->leave($__internal_c34602dc44aacaca8c81d609afe988e43a6c5b041c046216448f3c2ef592e9b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/dotjs/dependencies.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_dependencies(it, \$keyword, \$ruleType) {
  var out = ' ';
  var \$lvl = it.level;
  var \$dataLvl = it.dataLevel;
  var \$schema = it.schema[\$keyword];
  var \$schemaPath = it.schemaPath + it.util.getProperty(\$keyword);
  var \$errSchemaPath = it.errSchemaPath + '/' + \$keyword;
  var \$breakOnError = !it.opts.allErrors;
  var \$data = 'data' + (\$dataLvl || '');
  var \$errs = 'errs__' + \$lvl;
  var \$it = it.util.copy(it);
  var \$closingBraces = '';
  \$it.level++;
  var \$nextValid = 'valid' + \$it.level;
  var \$schemaDeps = {},
    \$propertyDeps = {},
    \$ownProperties = it.opts.ownProperties;
  for (\$property in \$schema) {
    var \$sch = \$schema[\$property];
    var \$deps = Array.isArray(\$sch) ? \$propertyDeps : \$schemaDeps;
    \$deps[\$property] = \$sch;
  }
  out += 'var ' + (\$errs) + ' = errors;';
  var \$currentErrorPath = it.errorPath;
  out += 'var missing' + (\$lvl) + ';';
  for (var \$property in \$propertyDeps) {
    \$deps = \$propertyDeps[\$property];
    if (\$deps.length) {
      out += ' if ( ' + (\$data) + (it.util.getProperty(\$property)) + ' !== undefined ';
      if (\$ownProperties) {
        out += ' && Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$property)) + '\\') ';
      }
      if (\$breakOnError) {
        out += ' && ( ';
        var arr1 = \$deps;
        if (arr1) {
          var \$propertyKey, \$i = -1,
            l1 = arr1.length - 1;
          while (\$i < l1) {
            \$propertyKey = arr1[\$i += 1];
            if (\$i) {
              out += ' || ';
            }
            var \$prop = it.util.getProperty(\$propertyKey),
              \$useData = \$data + \$prop;
            out += ' ( ( ' + (\$useData) + ' === undefined ';
            if (\$ownProperties) {
              out += ' || ! Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$propertyKey)) + '\\') ';
            }
            out += ') && (missing' + (\$lvl) + ' = ' + (it.util.toQuotedString(it.opts.jsonPointers ? \$propertyKey : \$prop)) + ') ) ';
          }
        }
        out += ')) {  ';
        var \$propertyPath = 'missing' + \$lvl,
          \$missingProperty = '\\' + ' + \$propertyPath + ' + \\'';
        if (it.opts._errorDataPathProperty) {
          it.errorPath = it.opts.jsonPointers ? it.util.getPathExpr(\$currentErrorPath, \$propertyPath, true) : \$currentErrorPath + ' + ' + \$propertyPath;
        }
        var \$\$outStack = \$\$outStack || [];
        \$\$outStack.push(out);
        out = ''; /* istanbul ignore else */
        if (it.createErrors !== false) {
          out += ' { keyword: \\'' + ('dependencies') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { property: \\'' + (it.util.escapeQuotes(\$property)) + '\\', missingProperty: \\'' + (\$missingProperty) + '\\', depsCount: ' + (\$deps.length) + ', deps: \\'' + (it.util.escapeQuotes(\$deps.length == 1 ? \$deps[0] : \$deps.join(\", \"))) + '\\' } ';
          if (it.opts.messages !== false) {
            out += ' , message: \\'should have ';
            if (\$deps.length == 1) {
              out += 'property ' + (it.util.escapeQuotes(\$deps[0]));
            } else {
              out += 'properties ' + (it.util.escapeQuotes(\$deps.join(\", \")));
            }
            out += ' when property ' + (it.util.escapeQuotes(\$property)) + ' is present\\' ';
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
      } else {
        out += ' ) { ';
        var arr2 = \$deps;
        if (arr2) {
          var \$propertyKey, i2 = -1,
            l2 = arr2.length - 1;
          while (i2 < l2) {
            \$propertyKey = arr2[i2 += 1];
            var \$prop = it.util.getProperty(\$propertyKey),
              \$missingProperty = it.util.escapeQuotes(\$propertyKey),
              \$useData = \$data + \$prop;
            if (it.opts._errorDataPathProperty) {
              it.errorPath = it.util.getPath(\$currentErrorPath, \$propertyKey, it.opts.jsonPointers);
            }
            out += ' if ( ' + (\$useData) + ' === undefined ';
            if (\$ownProperties) {
              out += ' || ! Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$propertyKey)) + '\\') ';
            }
            out += ') {  var err =   '; /* istanbul ignore else */
            if (it.createErrors !== false) {
              out += ' { keyword: \\'' + ('dependencies') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { property: \\'' + (it.util.escapeQuotes(\$property)) + '\\', missingProperty: \\'' + (\$missingProperty) + '\\', depsCount: ' + (\$deps.length) + ', deps: \\'' + (it.util.escapeQuotes(\$deps.length == 1 ? \$deps[0] : \$deps.join(\", \"))) + '\\' } ';
              if (it.opts.messages !== false) {
                out += ' , message: \\'should have ';
                if (\$deps.length == 1) {
                  out += 'property ' + (it.util.escapeQuotes(\$deps[0]));
                } else {
                  out += 'properties ' + (it.util.escapeQuotes(\$deps.join(\", \")));
                }
                out += ' when property ' + (it.util.escapeQuotes(\$property)) + ' is present\\' ';
              }
              if (it.opts.verbose) {
                out += ' , schema: validate.schema' + (\$schemaPath) + ' , parentSchema: validate.schema' + (it.schemaPath) + ' , data: ' + (\$data) + ' ';
              }
              out += ' } ';
            } else {
              out += ' {} ';
            }
            out += ';  if (vErrors === null) vErrors = [err]; else vErrors.push(err); errors++; } ';
          }
        }
      }
      out += ' }   ';
      if (\$breakOnError) {
        \$closingBraces += '}';
        out += ' else { ';
      }
    }
  }
  it.errorPath = \$currentErrorPath;
  var \$currentBaseId = \$it.baseId;
  for (var \$property in \$schemaDeps) {
    var \$sch = \$schemaDeps[\$property];
    if (it.util.schemaHasRules(\$sch, it.RULES.all)) {
      out += ' ' + (\$nextValid) + ' = true; if ( ' + (\$data) + (it.util.getProperty(\$property)) + ' !== undefined ';
      if (\$ownProperties) {
        out += ' && Object.prototype.hasOwnProperty.call(' + (\$data) + ', \\'' + (it.util.escapeQuotes(\$property)) + '\\') ';
      }
      out += ') { ';
      \$it.schema = \$sch;
      \$it.schemaPath = \$schemaPath + it.util.getProperty(\$property);
      \$it.errSchemaPath = \$errSchemaPath + '/' + it.util.escapeFragment(\$property);
      out += '  ' + (it.validate(\$it)) + ' ';
      \$it.baseId = \$currentBaseId;
      out += ' }  ';
      if (\$breakOnError) {
        out += ' if (' + (\$nextValid) + ') { ';
        \$closingBraces += '}';
      }
    }
  }
  if (\$breakOnError) {
    out += '   ' + (\$closingBraces) + ' if (' + (\$errs) + ' == errors) {';
  }
  out = it.util.cleanUpCode(out);
  return out;
}
", "node_modules/ajv/lib/dotjs/dependencies.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/dotjs/dependencies.js");
    }
}

<?php

/* node_modules/fsevents/node_modules/ajv/lib/dotjs/pattern.js */
class __TwigTemplate_1816e8197177aca1c30bbd28cbc808a1f58493876fcf969620efd084dfcea8bf extends Twig_Template
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
        $__internal_c637c319469149e8280ea49a70a1b8a942d56cf28984a29abeab58d6a0d18ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c637c319469149e8280ea49a70a1b8a942d56cf28984a29abeab58d6a0d18ee1->enter($__internal_c637c319469149e8280ea49a70a1b8a942d56cf28984a29abeab58d6a0d18ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/dotjs/pattern.js"));

        // line 1
        echo "'use strict';
module.exports = function generate_pattern(it, \$keyword) {
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
  var \$regexp = \$isData ? '(new RegExp(' + \$schemaValue + '))' : it.usePattern(\$schema);
  out += 'if ( ';
  if (\$isData) {
    out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'string\\') || ';
  }
  out += ' !' + (\$regexp) + '.test(' + (\$data) + ') ) {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('pattern') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { pattern:  ';
    if (\$isData) {
      out += '' + (\$schemaValue);
    } else {
      out += '' + (it.util.toQuotedString(\$schema));
    }
    out += '  } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should match pattern \"';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue) + ' + \\'';
      } else {
        out += '' + (it.util.escapeQuotes(\$schema));
      }
      out += '\"\\' ';
    }
    if (it.opts.verbose) {
      out += ' , schema:  ';
      if (\$isData) {
        out += 'validate.schema' + (\$schemaPath);
      } else {
        out += '' + (it.util.toQuotedString(\$schema));
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
        
        $__internal_c637c319469149e8280ea49a70a1b8a942d56cf28984a29abeab58d6a0d18ee1->leave($__internal_c637c319469149e8280ea49a70a1b8a942d56cf28984a29abeab58d6a0d18ee1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/dotjs/pattern.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function generate_pattern(it, \$keyword) {
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
  var \$regexp = \$isData ? '(new RegExp(' + \$schemaValue + '))' : it.usePattern(\$schema);
  out += 'if ( ';
  if (\$isData) {
    out += ' (' + (\$schemaValue) + ' !== undefined && typeof ' + (\$schemaValue) + ' != \\'string\\') || ';
  }
  out += ' !' + (\$regexp) + '.test(' + (\$data) + ') ) {   ';
  var \$\$outStack = \$\$outStack || [];
  \$\$outStack.push(out);
  out = ''; /* istanbul ignore else */
  if (it.createErrors !== false) {
    out += ' { keyword: \\'' + ('pattern') + '\\' , dataPath: (dataPath || \\'\\') + ' + (it.errorPath) + ' , schemaPath: ' + (it.util.toQuotedString(\$errSchemaPath)) + ' , params: { pattern:  ';
    if (\$isData) {
      out += '' + (\$schemaValue);
    } else {
      out += '' + (it.util.toQuotedString(\$schema));
    }
    out += '  } ';
    if (it.opts.messages !== false) {
      out += ' , message: \\'should match pattern \"';
      if (\$isData) {
        out += '\\' + ' + (\$schemaValue) + ' + \\'';
      } else {
        out += '' + (it.util.escapeQuotes(\$schema));
      }
      out += '\"\\' ';
    }
    if (it.opts.verbose) {
      out += ' , schema:  ';
      if (\$isData) {
        out += 'validate.schema' + (\$schemaPath);
      } else {
        out += '' + (it.util.toQuotedString(\$schema));
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
", "node_modules/fsevents/node_modules/ajv/lib/dotjs/pattern.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/dotjs/pattern.js");
    }
}

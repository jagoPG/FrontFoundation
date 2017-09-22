<?php

/* node_modules/ajv/scripts/compile-dots.js */
class __TwigTemplate_679729f10beef6577b9804a7920a86f3dc3ddbcd2a6856f19ec2a30a7e384d3f extends Twig_Template
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
        $__internal_ec60b131c57337eefd847497b2f6eb61f2b9cb4311619983e976ef322f4f38a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec60b131c57337eefd847497b2f6eb61f2b9cb4311619983e976ef322f4f38a0->enter($__internal_ec60b131c57337eefd847497b2f6eb61f2b9cb4311619983e976ef322f4f38a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/scripts/compile-dots.js"));

        // line 1
        echo "//compile doT templates to js functions
'use strict';

var glob = require('glob')
  , fs = require('fs')
  , path = require('path')
  , doT = require('dot')
  , beautify = require('js-beautify').js_beautify;

var defsRootPath = process.argv[2] || path.join(__dirname, '../lib');

var defs = {};
var defFiles = glob.sync('./dot/**/*.def', { cwd: defsRootPath });
defFiles.forEach(function (f) {
  var name = path.basename(f, '.def');
  defs[name] = fs.readFileSync(path.join(defsRootPath, f));
});

var filesRootPath = process.argv[3] || path.join(__dirname, '../lib');
var files = glob.sync('./dot/**/*.jst', { cwd: filesRootPath });

var dotjsPath = path.join(filesRootPath, './dotjs');
try { fs.mkdirSync(dotjsPath); } catch(e) {}

console.log('\\n\\nCompiling:');

var FUNCTION_NAME = /function\\s+anonymous\\s*\\(it[^)]*\\)\\s*{/;
var OUT_EMPTY_STRING = /out\\s*\\+=\\s*'\\s*';/g;
var ISTANBUL = /'(istanbul[^']+)';/g;
var ERROR_KEYWORD = /\\\$errorKeyword/g;
var ERROR_KEYWORD_OR = /\\\$errorKeyword\\s+\\|\\|/g;
var VARS = [
  '\$errs', '\$valid', '\$lvl', '\$data', '\$dataLvl',
  '\$errorKeyword', '\$closingBraces', '\$schemaPath',
  '\$validate'
];

files.forEach(function (f) {
  var keyword = path.basename(f, '.jst');
  var targetPath = path.join(dotjsPath, keyword + '.js');
  var template = fs.readFileSync(path.join(filesRootPath, f));
  var code = doT.compile(template, defs);
  code = code.toString()
             .replace(OUT_EMPTY_STRING, '')
             .replace(FUNCTION_NAME, 'function generate_' + keyword + '(it, \$keyword, \$ruleType) {')
             .replace(ISTANBUL, '/* \$1 */');
  removeAlwaysFalsyInOr();
  VARS.forEach(removeUnusedVar);
  code = \"'use strict';\\nmodule.exports = \" + code;
  code = beautify(code, { indent_size: 2 }) + '\\n';
  fs.writeFileSync(targetPath, code);
  console.log('compiled', keyword);

  function removeUnusedVar(v) {
    v = v.replace(/\\\$/g, '\\\\\$\$');
    var regexp = new RegExp(v + '[^A-Za-z0-9_\$]', 'g');
    var count = occurrences(regexp);
    if (count == 1) {
      regexp = new RegExp('var\\\\s+' + v + '\\\\s*=[^;]+;|var\\\\s+' + v + ';');
      code = code.replace(regexp, '');
    }
  }

  function removeAlwaysFalsyInOr() {
    var countUsed = occurrences(ERROR_KEYWORD);
    var countOr = occurrences(ERROR_KEYWORD_OR);
    if (countUsed == countOr + 1) code = code.replace(ERROR_KEYWORD_OR, '');
  }

  function occurrences(regexp) {
    return (code.match(regexp) || []).length;
  }
});
";
        
        $__internal_ec60b131c57337eefd847497b2f6eb61f2b9cb4311619983e976ef322f4f38a0->leave($__internal_ec60b131c57337eefd847497b2f6eb61f2b9cb4311619983e976ef322f4f38a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/scripts/compile-dots.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//compile doT templates to js functions
'use strict';

var glob = require('glob')
  , fs = require('fs')
  , path = require('path')
  , doT = require('dot')
  , beautify = require('js-beautify').js_beautify;

var defsRootPath = process.argv[2] || path.join(__dirname, '../lib');

var defs = {};
var defFiles = glob.sync('./dot/**/*.def', { cwd: defsRootPath });
defFiles.forEach(function (f) {
  var name = path.basename(f, '.def');
  defs[name] = fs.readFileSync(path.join(defsRootPath, f));
});

var filesRootPath = process.argv[3] || path.join(__dirname, '../lib');
var files = glob.sync('./dot/**/*.jst', { cwd: filesRootPath });

var dotjsPath = path.join(filesRootPath, './dotjs');
try { fs.mkdirSync(dotjsPath); } catch(e) {}

console.log('\\n\\nCompiling:');

var FUNCTION_NAME = /function\\s+anonymous\\s*\\(it[^)]*\\)\\s*{/;
var OUT_EMPTY_STRING = /out\\s*\\+=\\s*'\\s*';/g;
var ISTANBUL = /'(istanbul[^']+)';/g;
var ERROR_KEYWORD = /\\\$errorKeyword/g;
var ERROR_KEYWORD_OR = /\\\$errorKeyword\\s+\\|\\|/g;
var VARS = [
  '\$errs', '\$valid', '\$lvl', '\$data', '\$dataLvl',
  '\$errorKeyword', '\$closingBraces', '\$schemaPath',
  '\$validate'
];

files.forEach(function (f) {
  var keyword = path.basename(f, '.jst');
  var targetPath = path.join(dotjsPath, keyword + '.js');
  var template = fs.readFileSync(path.join(filesRootPath, f));
  var code = doT.compile(template, defs);
  code = code.toString()
             .replace(OUT_EMPTY_STRING, '')
             .replace(FUNCTION_NAME, 'function generate_' + keyword + '(it, \$keyword, \$ruleType) {')
             .replace(ISTANBUL, '/* \$1 */');
  removeAlwaysFalsyInOr();
  VARS.forEach(removeUnusedVar);
  code = \"'use strict';\\nmodule.exports = \" + code;
  code = beautify(code, { indent_size: 2 }) + '\\n';
  fs.writeFileSync(targetPath, code);
  console.log('compiled', keyword);

  function removeUnusedVar(v) {
    v = v.replace(/\\\$/g, '\\\\\$\$');
    var regexp = new RegExp(v + '[^A-Za-z0-9_\$]', 'g');
    var count = occurrences(regexp);
    if (count == 1) {
      regexp = new RegExp('var\\\\s+' + v + '\\\\s*=[^;]+;|var\\\\s+' + v + ';');
      code = code.replace(regexp, '');
    }
  }

  function removeAlwaysFalsyInOr() {
    var countUsed = occurrences(ERROR_KEYWORD);
    var countOr = occurrences(ERROR_KEYWORD_OR);
    if (countUsed == countOr + 1) code = code.replace(ERROR_KEYWORD_OR, '');
  }

  function occurrences(regexp) {
    return (code.match(regexp) || []).length;
  }
});
", "node_modules/ajv/scripts/compile-dots.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/scripts/compile-dots.js");
    }
}

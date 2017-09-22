<?php

/* node_modules/regjsparser/bin/parser */
class __TwigTemplate_c8c66e51a8178ef2b9bbc915c47ea187664c4e76ca61823a2f1d1e875b37bf65 extends Twig_Template
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
        $__internal_33e5718e7ece751b93d3d22e26a2862886bc60f7f47d1bdffb77496915635274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e5718e7ece751b93d3d22e26a2862886bc60f7f47d1bdffb77496915635274->enter($__internal_33e5718e7ece751b93d3d22e26a2862886bc60f7f47d1bdffb77496915635274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regjsparser/bin/parser"));

        // line 1
        echo "#!/usr/bin/env node
(function() {

  var fs = require('fs');
  var parse = require('../parser').parse;
  var jsesc = require('jsesc');
  var regexes = process.argv.splice(2);
  var first = regexes[0];
  var data;
  var log = console.log;
  var main = function() {
    if (/^(?:-h|--help|undefined)\$/.test(first)) {
      log([
        '\\nUsage:\\n',
        '\\tregjsparser [regex ...]',
        '\\tregjsparser [-h | --help]',
        '\\nExamples:\\n',
        '\\tregjsparser \\'^foo.bar\$\\'',
        '\\tregjsparser \\'[a-zA-Z0-9]\\''
      ].join('\\n'));
      return process.exit(1);
    }

    regexes.forEach(function(snippet) {
      var result;
      try {
        result = parse(snippet);
        log(jsesc(result, {
          'json': true,
          'compact': false,
          'indent': '\\t'
        }));
      } catch(error) {
        log(error.message + '\\n');
        log('Error: failed to parse. Make sure the regular expression is valid.');
        log('If you think this is a bug in regjsparser, please report it:');
        log('\\thttps://github.com/jviereck/regjsparser/issues/new');
        log('\\nStack trace:\\n');
        log(error.stack);
        return process.exit(1);
      }
    });
    // Return with exit status 0 outside of the `forEach` loop, in case
    // multiple regular expressions were passed in.
    return process.exit(0);
  };

  main();

}());
";
        
        $__internal_33e5718e7ece751b93d3d22e26a2862886bc60f7f47d1bdffb77496915635274->leave($__internal_33e5718e7ece751b93d3d22e26a2862886bc60f7f47d1bdffb77496915635274_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regjsparser/bin/parser";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
(function() {

  var fs = require('fs');
  var parse = require('../parser').parse;
  var jsesc = require('jsesc');
  var regexes = process.argv.splice(2);
  var first = regexes[0];
  var data;
  var log = console.log;
  var main = function() {
    if (/^(?:-h|--help|undefined)\$/.test(first)) {
      log([
        '\\nUsage:\\n',
        '\\tregjsparser [regex ...]',
        '\\tregjsparser [-h | --help]',
        '\\nExamples:\\n',
        '\\tregjsparser \\'^foo.bar\$\\'',
        '\\tregjsparser \\'[a-zA-Z0-9]\\''
      ].join('\\n'));
      return process.exit(1);
    }

    regexes.forEach(function(snippet) {
      var result;
      try {
        result = parse(snippet);
        log(jsesc(result, {
          'json': true,
          'compact': false,
          'indent': '\\t'
        }));
      } catch(error) {
        log(error.message + '\\n');
        log('Error: failed to parse. Make sure the regular expression is valid.');
        log('If you think this is a bug in regjsparser, please report it:');
        log('\\thttps://github.com/jviereck/regjsparser/issues/new');
        log('\\nStack trace:\\n');
        log(error.stack);
        return process.exit(1);
      }
    });
    // Return with exit status 0 outside of the `forEach` loop, in case
    // multiple regular expressions were passed in.
    return process.exit(0);
  };

  main();

}());
", "node_modules/regjsparser/bin/parser", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regjsparser/bin/parser");
    }
}

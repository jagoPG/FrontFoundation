<?php

/* node_modules/readdirp/examples/grep.js */
class __TwigTemplate_fc535f71d2a6823974685d8adbd3a156c0deefaa8be2e10b29d6cb1d0752ba42 extends Twig_Template
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
        $__internal_cfc353c783363e7f730d55dad8a2336728eb64508ad3521e05541879d4f7d544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc353c783363e7f730d55dad8a2336728eb64508ad3521e05541879d4f7d544->enter($__internal_cfc353c783363e7f730d55dad8a2336728eb64508ad3521e05541879d4f7d544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readdirp/examples/grep.js"));

        // line 1
        echo "'use strict';
var readdirp =  require('..')
  , util     =  require('util')
  , fs       =  require('fs')
  , path     =  require('path')
  , es       =  require('event-stream')
  ;

function findLinesMatching (searchTerm) {

  return es.through(function (entry) {
    var lineno = 0
      , matchingLines = []
      , fileStream = this;

    function filter () {
      return es.mapSync(function (line) {
        lineno++;
        return ~line.indexOf(searchTerm) ? lineno + ': ' + line : undefined;
      });
    }

    function aggregate () {
      return es.through(
          function write (data) { 
            matchingLines.push(data); 
          }
        , function end () {

            // drop files that had no matches
            if (matchingLines.length) {
              var result = { file: entry, lines: matchingLines };

              // pass result on to file stream
              fileStream.emit('data', result);
            }
            this.emit('end');
          }
      );
    }

    fs.createReadStream(entry.fullPath, { encoding: 'utf-8' })

      // handle file contents line by line
      .pipe(es.split('\\n'))

      // keep only the lines that matched the term
      .pipe(filter())

      // aggregate all matching lines and delegate control back to the file stream
      .pipe(aggregate())
      ;
  });
}

console.log('grepping for \"arguments\"');

// create a stream of all javascript files found in this and all sub directories
readdirp({ root: path.join(__dirname), fileFilter: '*.js' })

  // find all lines matching the term for each file (if none found, that file is ignored)
  .pipe(findLinesMatching('arguments'))

  // format the results and output
  .pipe(
    es.mapSync(function (res) {
      return '\\n\\n' + res.file.path + '\\n\\t' + res.lines.join('\\n\\t');
    })
  )
  .pipe(process.stdout)
  ;
";
        
        $__internal_cfc353c783363e7f730d55dad8a2336728eb64508ad3521e05541879d4f7d544->leave($__internal_cfc353c783363e7f730d55dad8a2336728eb64508ad3521e05541879d4f7d544_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readdirp/examples/grep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var readdirp =  require('..')
  , util     =  require('util')
  , fs       =  require('fs')
  , path     =  require('path')
  , es       =  require('event-stream')
  ;

function findLinesMatching (searchTerm) {

  return es.through(function (entry) {
    var lineno = 0
      , matchingLines = []
      , fileStream = this;

    function filter () {
      return es.mapSync(function (line) {
        lineno++;
        return ~line.indexOf(searchTerm) ? lineno + ': ' + line : undefined;
      });
    }

    function aggregate () {
      return es.through(
          function write (data) { 
            matchingLines.push(data); 
          }
        , function end () {

            // drop files that had no matches
            if (matchingLines.length) {
              var result = { file: entry, lines: matchingLines };

              // pass result on to file stream
              fileStream.emit('data', result);
            }
            this.emit('end');
          }
      );
    }

    fs.createReadStream(entry.fullPath, { encoding: 'utf-8' })

      // handle file contents line by line
      .pipe(es.split('\\n'))

      // keep only the lines that matched the term
      .pipe(filter())

      // aggregate all matching lines and delegate control back to the file stream
      .pipe(aggregate())
      ;
  });
}

console.log('grepping for \"arguments\"');

// create a stream of all javascript files found in this and all sub directories
readdirp({ root: path.join(__dirname), fileFilter: '*.js' })

  // find all lines matching the term for each file (if none found, that file is ignored)
  .pipe(findLinesMatching('arguments'))

  // format the results and output
  .pipe(
    es.mapSync(function (res) {
      return '\\n\\n' + res.file.path + '\\n\\t' + res.lines.join('\\n\\t');
    })
  )
  .pipe(process.stdout)
  ;
", "node_modules/readdirp/examples/grep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readdirp/examples/grep.js");
    }
}

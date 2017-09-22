<?php

/* node_modules/babylon/bin/babylon.js */
class __TwigTemplate_fa299988de765c0839f03f0fb75efe51ca8161b54178ca5a2d831f339c6c0fc4 extends Twig_Template
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
        $__internal_c813cf5143621e12f8a2e292ae80ad778ecfd1906be521339bacba1257773bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c813cf5143621e12f8a2e292ae80ad778ecfd1906be521339bacba1257773bbf->enter($__internal_c813cf5143621e12f8a2e292ae80ad778ecfd1906be521339bacba1257773bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babylon/bin/babylon.js"));

        // line 1
        echo "#!/usr/bin/env node
/* eslint no-var: 0 */

var babylon = require(\"..\");
var fs      = require(\"fs\");

var filename = process.argv[2];
if (!filename) {
  console.error(\"no filename specified\");
  process.exit(0);
}

var file = fs.readFileSync(filename, \"utf8\");
var ast  = babylon.parse(file);

console.log(JSON.stringify(ast, null, \"  \"));
";
        
        $__internal_c813cf5143621e12f8a2e292ae80ad778ecfd1906be521339bacba1257773bbf->leave($__internal_c813cf5143621e12f8a2e292ae80ad778ecfd1906be521339bacba1257773bbf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babylon/bin/babylon.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
/* eslint no-var: 0 */

var babylon = require(\"..\");
var fs      = require(\"fs\");

var filename = process.argv[2];
if (!filename) {
  console.error(\"no filename specified\");
  process.exit(0);
}

var file = fs.readFileSync(filename, \"utf8\");
var ast  = babylon.parse(file);

console.log(JSON.stringify(ast, null, \"  \"));
", "node_modules/babylon/bin/babylon.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babylon/bin/babylon.js");
    }
}

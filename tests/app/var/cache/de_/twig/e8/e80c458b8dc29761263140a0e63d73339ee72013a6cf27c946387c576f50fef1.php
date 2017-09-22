<?php

/* node_modules/load-json-file/index.js */
class __TwigTemplate_28577508bcecf88750b6f0bcd4738906d213604d2f43ba6dc8aef64cdf401efa extends Twig_Template
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
        $__internal_0a9b1832f4bf8c5b9cc80bcb6a3e4d62fa2cb05ec6de41f49323c6ab8cacaa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9b1832f4bf8c5b9cc80bcb6a3e4d62fa2cb05ec6de41f49323c6ab8cacaa8a->enter($__internal_0a9b1832f4bf8c5b9cc80bcb6a3e4d62fa2cb05ec6de41f49323c6ab8cacaa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/load-json-file/index.js"));

        // line 1
        echo "'use strict';
const path = require('path');
const fs = require('graceful-fs');
const stripBom = require('strip-bom');
const parseJson = require('parse-json');
const pify = require('pify');

const parse = (data, fp) => parseJson(stripBom(data), path.relative('.', fp));

module.exports = fp => pify(fs.readFile)(fp, 'utf8').then(data => parse(data, fp));
module.exports.sync = fp => parse(fs.readFileSync(fp, 'utf8'), fp);
";
        
        $__internal_0a9b1832f4bf8c5b9cc80bcb6a3e4d62fa2cb05ec6de41f49323c6ab8cacaa8a->leave($__internal_0a9b1832f4bf8c5b9cc80bcb6a3e4d62fa2cb05ec6de41f49323c6ab8cacaa8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/load-json-file/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const path = require('path');
const fs = require('graceful-fs');
const stripBom = require('strip-bom');
const parseJson = require('parse-json');
const pify = require('pify');

const parse = (data, fp) => parseJson(stripBom(data), path.relative('.', fp));

module.exports = fp => pify(fs.readFile)(fp, 'utf8').then(data => parse(data, fp));
module.exports.sync = fp => parse(fs.readFileSync(fp, 'utf8'), fp);
", "node_modules/load-json-file/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/load-json-file/index.js");
    }
}

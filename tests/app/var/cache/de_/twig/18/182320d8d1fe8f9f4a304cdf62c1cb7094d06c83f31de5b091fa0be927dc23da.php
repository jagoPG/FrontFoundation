<?php

/* node_modules/ajv/scripts/info */
class __TwigTemplate_1c9261d1fcab04167661d4f0c4fc4493afce2475220ed46baebcefa969cc34e2 extends Twig_Template
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
        $__internal_2c51c62841b8218430d045f1de64f416ea96b409d3345a5c4f4a0d66efae75bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c51c62841b8218430d045f1de64f416ea96b409d3345a5c4f4a0d66efae75bb->enter($__internal_2c51c62841b8218430d045f1de64f416ea96b409d3345a5c4f4a0d66efae75bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/scripts/info"));

        // line 1
        echo "#!/usr/bin/env node

'use strict';

var fs = require('fs');
var name = process.argv[2] || '.';
var property = process.argv[3] || 'version';
if (name != '.') name = 'node_modules/' + name;
var json = JSON.parse(fs.readFileSync(name + '/package.json', 'utf8'));
console.log(json[property]);
";
        
        $__internal_2c51c62841b8218430d045f1de64f416ea96b409d3345a5c4f4a0d66efae75bb->leave($__internal_2c51c62841b8218430d045f1de64f416ea96b409d3345a5c4f4a0d66efae75bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/scripts/info";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

'use strict';

var fs = require('fs');
var name = process.argv[2] || '.';
var property = process.argv[3] || 'version';
if (name != '.') name = 'node_modules/' + name;
var json = JSON.parse(fs.readFileSync(name + '/package.json', 'utf8'));
console.log(json[property]);
", "node_modules/ajv/scripts/info", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/scripts/info");
    }
}

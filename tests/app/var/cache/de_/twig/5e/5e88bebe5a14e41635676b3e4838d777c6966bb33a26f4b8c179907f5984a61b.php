<?php

/* node_modules/har-validator/node_modules/ajv/scripts/info */
class __TwigTemplate_8ec52fa0ecd300e1604359d7f01a52f3ebfd76dd94048833c03966063d86f915 extends Twig_Template
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
        $__internal_e2dfa771fec93ac60e16f38831c286346dd319d68482a48f8ff477984e641fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dfa771fec93ac60e16f38831c286346dd319d68482a48f8ff477984e641fe7->enter($__internal_e2dfa771fec93ac60e16f38831c286346dd319d68482a48f8ff477984e641fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/scripts/info"));

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
        
        $__internal_e2dfa771fec93ac60e16f38831c286346dd319d68482a48f8ff477984e641fe7->leave($__internal_e2dfa771fec93ac60e16f38831c286346dd319d68482a48f8ff477984e641fe7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/scripts/info";
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
", "node_modules/har-validator/node_modules/ajv/scripts/info", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/scripts/info");
    }
}

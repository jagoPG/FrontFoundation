<?php

/* node_modules/fsevents/node_modules/ajv/scripts/info */
class __TwigTemplate_7f9fbe7f04124c78fb707bf922dc2850e9ef3a9bc6d8460576c9998dab8ca02a extends Twig_Template
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
        $__internal_6613fdf62cce8c17669cc0f25c70b41d6b69f04aadfb486194ea22b3708932bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6613fdf62cce8c17669cc0f25c70b41d6b69f04aadfb486194ea22b3708932bd->enter($__internal_6613fdf62cce8c17669cc0f25c70b41d6b69f04aadfb486194ea22b3708932bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/scripts/info"));

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
        
        $__internal_6613fdf62cce8c17669cc0f25c70b41d6b69f04aadfb486194ea22b3708932bd->leave($__internal_6613fdf62cce8c17669cc0f25c70b41d6b69f04aadfb486194ea22b3708932bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/scripts/info";
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
", "node_modules/fsevents/node_modules/ajv/scripts/info", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/scripts/info");
    }
}

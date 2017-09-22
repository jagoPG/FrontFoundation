<?php

/* node_modules/mime/cli.js */
class __TwigTemplate_dfdabf1b77128a6ae84a4a62c598404695f23df94fd2b20960a24e61b6ba07b2 extends Twig_Template
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
        $__internal_3bda290e9facb1f2a0ead4b031b09756fef57375476cc17e93fdea0b15937b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bda290e9facb1f2a0ead4b031b09756fef57375476cc17e93fdea0b15937b94->enter($__internal_3bda290e9facb1f2a0ead4b031b09756fef57375476cc17e93fdea0b15937b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mime/cli.js"));

        // line 1
        echo "#!/usr/bin/env node

var mime = require('./mime.js');
var file = process.argv[2];
var type = mime.lookup(file);

process.stdout.write(type + '\\n');

";
        
        $__internal_3bda290e9facb1f2a0ead4b031b09756fef57375476cc17e93fdea0b15937b94->leave($__internal_3bda290e9facb1f2a0ead4b031b09756fef57375476cc17e93fdea0b15937b94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mime/cli.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var mime = require('./mime.js');
var file = process.argv[2];
var type = mime.lookup(file);

process.stdout.write(type + '\\n');

", "node_modules/mime/cli.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mime/cli.js");
    }
}

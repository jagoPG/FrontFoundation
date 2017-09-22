<?php

/* node_modules/loose-envify/cli.js */
class __TwigTemplate_ad4f5997a24a7fd7e9667c3a3217dc022b8ebf5e50161d84650af9726eb7d7a3 extends Twig_Template
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
        $__internal_46b49128266fc3dd2400367a7290ab37a624272edf5699f1098e430c14bcd1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b49128266fc3dd2400367a7290ab37a624272edf5699f1098e430c14bcd1a5->enter($__internal_46b49128266fc3dd2400367a7290ab37a624272edf5699f1098e430c14bcd1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loose-envify/cli.js"));

        // line 1
        echo "#!/usr/bin/env node
'use strict';

var looseEnvify = require('./');
var fs = require('fs');

if (process.argv[2]) {
  fs.createReadStream(process.argv[2], {encoding: 'utf8'})
    .pipe(looseEnvify(process.argv[2]))
    .pipe(process.stdout);
} else {
  process.stdin.resume()
  process.stdin
    .pipe(looseEnvify(__filename))
    .pipe(process.stdout);
}
";
        
        $__internal_46b49128266fc3dd2400367a7290ab37a624272edf5699f1098e430c14bcd1a5->leave($__internal_46b49128266fc3dd2400367a7290ab37a624272edf5699f1098e430c14bcd1a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loose-envify/cli.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
'use strict';

var looseEnvify = require('./');
var fs = require('fs');

if (process.argv[2]) {
  fs.createReadStream(process.argv[2], {encoding: 'utf8'})
    .pipe(looseEnvify(process.argv[2]))
    .pipe(process.stdout);
} else {
  process.stdin.resume()
  process.stdin
    .pipe(looseEnvify(__filename))
    .pipe(process.stdout);
}
", "node_modules/loose-envify/cli.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loose-envify/cli.js");
    }
}

<?php

/* node_modules/fsevents/node_modules/uuid/bin/uuid */
class __TwigTemplate_a4c05ece4f40c2ec56fc3c2ee5927404487c8dec3364b7443ef71001f763e2e2 extends Twig_Template
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
        $__internal_5202458ce46e99d3dc60f33ca040d16017c462c6ec6abb76bad07cd798734f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5202458ce46e99d3dc60f33ca040d16017c462c6ec6abb76bad07cd798734f03->enter($__internal_5202458ce46e99d3dc60f33ca040d16017c462c6ec6abb76bad07cd798734f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/uuid/bin/uuid"));

        // line 1
        echo "#!/usr/bin/env node

var path = require('path');
var uuid = require(path.join(__dirname, '..'));

var arg = process.argv[2];

if ('--help' === arg) {
  console.log('\\n  USAGE: uuid [version] [options]\\n\\n');
  console.log('  options:\\n');
  console.log('  --help                     Display this message and exit\\n');
  process.exit(0);
}

if (null == arg) {
  console.log(uuid());
  process.exit(0);
}

if ('v1' !== arg && 'v4' !== arg) {
  console.error('Version must be RFC4122 version 1 or version 4, denoted as \"v1\" or \"v4\"');
  process.exit(1);
}

console.log(uuid[arg]());
process.exit(0);
";
        
        $__internal_5202458ce46e99d3dc60f33ca040d16017c462c6ec6abb76bad07cd798734f03->leave($__internal_5202458ce46e99d3dc60f33ca040d16017c462c6ec6abb76bad07cd798734f03_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/uuid/bin/uuid";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var path = require('path');
var uuid = require(path.join(__dirname, '..'));

var arg = process.argv[2];

if ('--help' === arg) {
  console.log('\\n  USAGE: uuid [version] [options]\\n\\n');
  console.log('  options:\\n');
  console.log('  --help                     Display this message and exit\\n');
  process.exit(0);
}

if (null == arg) {
  console.log(uuid());
  process.exit(0);
}

if ('v1' !== arg && 'v4' !== arg) {
  console.error('Version must be RFC4122 version 1 or version 4, denoted as \"v1\" or \"v4\"');
  process.exit(1);
}

console.log(uuid[arg]());
process.exit(0);
", "node_modules/fsevents/node_modules/uuid/bin/uuid", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/uuid/bin/uuid");
    }
}

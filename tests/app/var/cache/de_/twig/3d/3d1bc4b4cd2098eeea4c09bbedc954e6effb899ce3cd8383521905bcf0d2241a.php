<?php

/* node_modules/uuid/bin/uuid */
class __TwigTemplate_a868f0d60d5af29610b6939f02fb92662cc08e5bc8cff334175b46ddd0d54079 extends Twig_Template
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
        $__internal_51eb195023b02799b67954db798afd6311a5aadd74d1f81b5cd9882bc97d6a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51eb195023b02799b67954db798afd6311a5aadd74d1f81b5cd9882bc97d6a0f->enter($__internal_51eb195023b02799b67954db798afd6311a5aadd74d1f81b5cd9882bc97d6a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/bin/uuid"));

        // line 1
        echo "#!/usr/bin/env node
var assert = require('assert');

function usage() {
  console.log('Usage:');
  console.log('  uuid');
  console.log('  uuid v1');
  console.log('  uuid v4');
  console.log('  uuid v5 <name> <namespace uuid>');
  console.log('  uuid --help');
  console.log('\\nNote: <namespace uuid> may be \"URL\" or \"DNS\" to use the corresponding UUIDs defined by RFC4122');
}

var args = process.argv.slice(2);

if (args.indexOf('--help') >= 0) {
  usage();
  process.exit(0);
}
var version = args.shift() || 'v4';

switch (version) {
  case 'v1':
    var uuidV1 = require('../v1');
    console.log(uuidV1());
    break;

  case 'v4':
    var uuidV4 = require('../v4');
    console.log(uuidV4());
    break;

  case 'v5':
    var uuidV5 = require('../v5');

    var name = args.shift();
    var namespace = args.shift();
    assert(name != null, 'v5 name not specified');
    assert(namespace != null, 'v5 namespace not specified');

    if (namespace == 'URL') namespace = uuidV5.URL;
    if (namespace == 'DNS') namespace = uuidV5.DNS;

    console.log(uuidV5(name, namespace));
    break;

  default:
    usage();
    process.exit(1);
}
";
        
        $__internal_51eb195023b02799b67954db798afd6311a5aadd74d1f81b5cd9882bc97d6a0f->leave($__internal_51eb195023b02799b67954db798afd6311a5aadd74d1f81b5cd9882bc97d6a0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/bin/uuid";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
var assert = require('assert');

function usage() {
  console.log('Usage:');
  console.log('  uuid');
  console.log('  uuid v1');
  console.log('  uuid v4');
  console.log('  uuid v5 <name> <namespace uuid>');
  console.log('  uuid --help');
  console.log('\\nNote: <namespace uuid> may be \"URL\" or \"DNS\" to use the corresponding UUIDs defined by RFC4122');
}

var args = process.argv.slice(2);

if (args.indexOf('--help') >= 0) {
  usage();
  process.exit(0);
}
var version = args.shift() || 'v4';

switch (version) {
  case 'v1':
    var uuidV1 = require('../v1');
    console.log(uuidV1());
    break;

  case 'v4':
    var uuidV4 = require('../v4');
    console.log(uuidV4());
    break;

  case 'v5':
    var uuidV5 = require('../v5');

    var name = args.shift();
    var namespace = args.shift();
    assert(name != null, 'v5 name not specified');
    assert(namespace != null, 'v5 namespace not specified');

    if (namespace == 'URL') namespace = uuidV5.URL;
    if (namespace == 'DNS') namespace = uuidV5.DNS;

    console.log(uuidV5(name, namespace));
    break;

  default:
    usage();
    process.exit(1);
}
", "node_modules/uuid/bin/uuid", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/bin/uuid");
    }
}

<?php

/* node_modules/errno/cli.js */
class __TwigTemplate_d6a05fadfa7a89e1971326e30f83ce23d74e7ade2007a852e0438a77f5842ea0 extends Twig_Template
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
        $__internal_485c027cfde231edc85e4ddb656eda31bc18b63ef91b274c4e4b159d5bafefc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485c027cfde231edc85e4ddb656eda31bc18b63ef91b274c4e4b159d5bafefc0->enter($__internal_485c027cfde231edc85e4ddb656eda31bc18b63ef91b274c4e4b159d5bafefc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/errno/cli.js"));

        // line 1
        echo "#!/usr/bin/env node

var errno = require('./')
  , arg   = process.argv[2]
  , data, code

if (arg === undefined)
  return console.log(JSON.stringify(errno.code, null, 2))

if ((code = +arg) == arg)
  data = errno.errno[code]
else
  data = errno.code[arg] || errno.code[arg.toUpperCase()]

if (data)
  console.log(JSON.stringify(data, null, 2))
else {
  console.error('No such errno/code: \"' + arg + '\"')
  process.exit(1)
}";
        
        $__internal_485c027cfde231edc85e4ddb656eda31bc18b63ef91b274c4e4b159d5bafefc0->leave($__internal_485c027cfde231edc85e4ddb656eda31bc18b63ef91b274c4e4b159d5bafefc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/errno/cli.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var errno = require('./')
  , arg   = process.argv[2]
  , data, code

if (arg === undefined)
  return console.log(JSON.stringify(errno.code, null, 2))

if ((code = +arg) == arg)
  data = errno.errno[code]
else
  data = errno.code[arg] || errno.code[arg.toUpperCase()]

if (data)
  console.log(JSON.stringify(data, null, 2))
else {
  console.error('No such errno/code: \"' + arg + '\"')
  process.exit(1)
}", "node_modules/errno/cli.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/errno/cli.js");
    }
}

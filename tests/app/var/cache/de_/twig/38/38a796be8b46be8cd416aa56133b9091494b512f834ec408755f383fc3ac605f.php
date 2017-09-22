<?php

/* node_modules/browserify-aes/modes/index.js */
class __TwigTemplate_b9b6dfc26092bc0fb2c3ac3b54ac3732ccb8322c1ccfc227620e9831f21d7a52 extends Twig_Template
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
        $__internal_16faedb8570fddb7419d9d1171d7180176ab260e119b5a836280e8283314abce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16faedb8570fddb7419d9d1171d7180176ab260e119b5a836280e8283314abce->enter($__internal_16faedb8570fddb7419d9d1171d7180176ab260e119b5a836280e8283314abce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/modes/index.js"));

        // line 1
        echo "var modeModules = {
  ECB: require('./ecb'),
  CBC: require('./cbc'),
  CFB: require('./cfb'),
  CFB8: require('./cfb8'),
  CFB1: require('./cfb1'),
  OFB: require('./ofb'),
  CTR: require('./ctr'),
  GCM: require('./ctr')
}

var modes = require('./list.json')

for (var key in modes) {
  modes[key].module = modeModules[modes[key].mode]
}

module.exports = modes
";
        
        $__internal_16faedb8570fddb7419d9d1171d7180176ab260e119b5a836280e8283314abce->leave($__internal_16faedb8570fddb7419d9d1171d7180176ab260e119b5a836280e8283314abce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/modes/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var modeModules = {
  ECB: require('./ecb'),
  CBC: require('./cbc'),
  CFB: require('./cfb'),
  CFB8: require('./cfb8'),
  CFB1: require('./cfb1'),
  OFB: require('./ofb'),
  CTR: require('./ctr'),
  GCM: require('./ctr')
}

var modes = require('./list.json')

for (var key in modes) {
  modes[key].module = modeModules[modes[key].mode]
}

module.exports = modes
", "node_modules/browserify-aes/modes/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/modes/index.js");
    }
}

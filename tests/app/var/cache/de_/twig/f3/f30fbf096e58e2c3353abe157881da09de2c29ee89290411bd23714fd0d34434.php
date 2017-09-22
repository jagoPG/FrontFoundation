<?php

/* node_modules/pseudomap/map.js */
class __TwigTemplate_237d53c0c0c98073a575519c08034d1dae7f2cde1e9e010dde5b75dcc2d8fc2e extends Twig_Template
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
        $__internal_60f30d7fd3d7b3060910c30eba9f8b6884559d6ad7d21c08bab53f3121288591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f30d7fd3d7b3060910c30eba9f8b6884559d6ad7d21c08bab53f3121288591->enter($__internal_60f30d7fd3d7b3060910c30eba9f8b6884559d6ad7d21c08bab53f3121288591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pseudomap/map.js"));

        // line 1
        echo "if (process.env.npm_package_name === 'pseudomap' &&
    process.env.npm_lifecycle_script === 'test')
  process.env.TEST_PSEUDOMAP = 'true'

if (typeof Map === 'function' && !process.env.TEST_PSEUDOMAP) {
  module.exports = Map
} else {
  module.exports = require('./pseudomap')
}
";
        
        $__internal_60f30d7fd3d7b3060910c30eba9f8b6884559d6ad7d21c08bab53f3121288591->leave($__internal_60f30d7fd3d7b3060910c30eba9f8b6884559d6ad7d21c08bab53f3121288591_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pseudomap/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (process.env.npm_package_name === 'pseudomap' &&
    process.env.npm_lifecycle_script === 'test')
  process.env.TEST_PSEUDOMAP = 'true'

if (typeof Map === 'function' && !process.env.TEST_PSEUDOMAP) {
  module.exports = Map
} else {
  module.exports = require('./pseudomap')
}
", "node_modules/pseudomap/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pseudomap/map.js");
    }
}

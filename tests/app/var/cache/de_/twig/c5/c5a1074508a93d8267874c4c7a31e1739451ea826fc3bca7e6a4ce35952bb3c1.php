<?php

/* node_modules/core-js/library/fn/number/virtual/index.js */
class __TwigTemplate_09a2351d1d0bcba6b7bf0ed6face28f63776443f0aa892be936b231ed3cda23b extends Twig_Template
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
        $__internal_f23b3ec2123c96272bb761cf53db2bde1f3668a318c6364ee4cf19940f483668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23b3ec2123c96272bb761cf53db2bde1f3668a318c6364ee4cf19940f483668->enter($__internal_f23b3ec2123c96272bb761cf53db2bde1f3668a318c6364ee4cf19940f483668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/number/virtual/index.js"));

        // line 1
        echo "require('../../../modules/core.number.iterator');
var \$Number = require('../../../modules/_entry-virtual')('Number');
\$Number.iterator = require('../../../modules/_iterators').Number;
module.exports = \$Number;
";
        
        $__internal_f23b3ec2123c96272bb761cf53db2bde1f3668a318c6364ee4cf19940f483668->leave($__internal_f23b3ec2123c96272bb761cf53db2bde1f3668a318c6364ee4cf19940f483668_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/number/virtual/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.number.iterator');
var \$Number = require('../../../modules/_entry-virtual')('Number');
\$Number.iterator = require('../../../modules/_iterators').Number;
module.exports = \$Number;
", "node_modules/core-js/library/fn/number/virtual/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/number/virtual/index.js");
    }
}

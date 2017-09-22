<?php

/* node_modules/es5-ext/number/to-integer.js */
class __TwigTemplate_ef4eb708c67dbd80a009f59f45f284f7c66faa87381bf0d2d6de3a927dd0556d extends Twig_Template
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
        $__internal_1e24da9eff192e39b7ceac16ed8a935fd41862e8535eea66268293f7e9760c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e24da9eff192e39b7ceac16ed8a935fd41862e8535eea66268293f7e9760c99->enter($__internal_1e24da9eff192e39b7ceac16ed8a935fd41862e8535eea66268293f7e9760c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/to-integer.js"));

        // line 1
        echo "\"use strict\";

var sign = require(\"../math/sign\")

  , abs = Math.abs, floor = Math.floor;

module.exports = function (value) {
\tif (isNaN(value)) return 0;
\tvalue = Number(value);
\tif ((value === 0) || !isFinite(value)) return value;
\treturn sign(value) * floor(abs(value));
};
";
        
        $__internal_1e24da9eff192e39b7ceac16ed8a935fd41862e8535eea66268293f7e9760c99->leave($__internal_1e24da9eff192e39b7ceac16ed8a935fd41862e8535eea66268293f7e9760c99_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/to-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var sign = require(\"../math/sign\")

  , abs = Math.abs, floor = Math.floor;

module.exports = function (value) {
\tif (isNaN(value)) return 0;
\tvalue = Number(value);
\tif ((value === 0) || !isFinite(value)) return value;
\treturn sign(value) * floor(abs(value));
};
", "node_modules/es5-ext/number/to-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/to-integer.js");
    }
}

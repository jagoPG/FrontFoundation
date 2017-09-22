<?php

/* node_modules/date-now/seed.js */
class __TwigTemplate_878d7a41a5009757c28413a9bcf8190a1ecfb7a736a42189951b3dfa8281eef7 extends Twig_Template
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
        $__internal_808272be1eed9e5413406ac038d1672142f7d0be465962719282b544bb4fdde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808272be1eed9e5413406ac038d1672142f7d0be465962719282b544bb4fdde2->enter($__internal_808272be1eed9e5413406ac038d1672142f7d0be465962719282b544bb4fdde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/date-now/seed.js"));

        // line 1
        echo "var now = require(\"./index\")

module.exports = seeded

/* Returns a Date.now() like function that's in sync with
    the seed value
*/
function seeded(seed) {
    var current = now()

    return time

    function time() {
        return seed + (now() - current)
    }
}
";
        
        $__internal_808272be1eed9e5413406ac038d1672142f7d0be465962719282b544bb4fdde2->leave($__internal_808272be1eed9e5413406ac038d1672142f7d0be465962719282b544bb4fdde2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/date-now/seed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var now = require(\"./index\")

module.exports = seeded

/* Returns a Date.now() like function that's in sync with
    the seed value
*/
function seeded(seed) {
    var current = now()

    return time

    function time() {
        return seed + (now() - current)
    }
}
", "node_modules/date-now/seed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/date-now/seed.js");
    }
}

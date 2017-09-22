<?php

/* node_modules/es5-ext/math/hypot/index.js */
class __TwigTemplate_a004d93e3b56fd1f5ad0096a050307de351ff553f2a42bd17ed90ee7a11a3dd1 extends Twig_Template
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
        $__internal_c2e2b34742db867c108376e2201e1f98d18f19941e74f3dfb55d365d9102f62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e2b34742db867c108376e2201e1f98d18f19941e74f3dfb55d365d9102f62e->enter($__internal_c2e2b34742db867c108376e2201e1f98d18f19941e74f3dfb55d365d9102f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/hypot/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.hypot
\t: require(\"./shim\");
";
        
        $__internal_c2e2b34742db867c108376e2201e1f98d18f19941e74f3dfb55d365d9102f62e->leave($__internal_c2e2b34742db867c108376e2201e1f98d18f19941e74f3dfb55d365d9102f62e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/hypot/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.hypot
\t: require(\"./shim\");
", "node_modules/es5-ext/math/hypot/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/hypot/index.js");
    }
}

<?php

/* node_modules/core-js/library/modules/es6.function.bind.js */
class __TwigTemplate_cdd9c2366fbb58eed75585d36e7198747de3bd4a1ab61659351845d7feaa9f7f extends Twig_Template
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
        $__internal_48dd95f0c15d7ea66e372a1d6c585c564c3c208c748c83220fa9f5e37014d5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dd95f0c15d7ea66e372a1d6c585c564c3c208c748c83220fa9f5e37014d5ca->enter($__internal_48dd95f0c15d7ea66e372a1d6c585c564c3c208c748c83220fa9f5e37014d5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.function.bind.js"));

        // line 1
        echo "// 19.2.3.2 / 15.3.4.5 Function.prototype.bind(thisArg, args...)
var \$export = require('./_export');

\$export(\$export.P, 'Function', { bind: require('./_bind') });
";
        
        $__internal_48dd95f0c15d7ea66e372a1d6c585c564c3c208c748c83220fa9f5e37014d5ca->leave($__internal_48dd95f0c15d7ea66e372a1d6c585c564c3c208c748c83220fa9f5e37014d5ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.function.bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.2.3.2 / 15.3.4.5 Function.prototype.bind(thisArg, args...)
var \$export = require('./_export');

\$export(\$export.P, 'Function', { bind: require('./_bind') });
", "node_modules/core-js/library/modules/es6.function.bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.function.bind.js");
    }
}

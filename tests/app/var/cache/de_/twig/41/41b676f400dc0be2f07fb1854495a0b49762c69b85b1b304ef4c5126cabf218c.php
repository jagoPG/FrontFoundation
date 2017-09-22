<?php

/* node_modules/core-js/modules/es6.object.assign.js */
class __TwigTemplate_92c990e36dd4fa1a00a909f80f5f1867a36a47cc22d93ceeb95ef2b31a30313c extends Twig_Template
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
        $__internal_46cde0a5defbf22debb9a9f9502f479a6afe47c6ad36865bc15c774f0106c772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cde0a5defbf22debb9a9f9502f479a6afe47c6ad36865bc15c774f0106c772->enter($__internal_46cde0a5defbf22debb9a9f9502f479a6afe47c6ad36865bc15c774f0106c772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.assign.js"));

        // line 1
        echo "// 19.1.3.1 Object.assign(target, source)
var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { assign: require('./_object-assign') });
";
        
        $__internal_46cde0a5defbf22debb9a9f9502f479a6afe47c6ad36865bc15c774f0106c772->leave($__internal_46cde0a5defbf22debb9a9f9502f479a6afe47c6ad36865bc15c774f0106c772_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.assign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.3.1 Object.assign(target, source)
var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { assign: require('./_object-assign') });
", "node_modules/core-js/modules/es6.object.assign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.assign.js");
    }
}

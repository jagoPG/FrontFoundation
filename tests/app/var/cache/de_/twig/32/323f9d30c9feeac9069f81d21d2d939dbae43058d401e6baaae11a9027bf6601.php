<?php

/* node_modules/core-js/library/modules/es6.reflect.own-keys.js */
class __TwigTemplate_87745e524e4d7eca9ff2432a7ec8cada639355c07f4b76c219b59c8c3d13fcfc extends Twig_Template
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
        $__internal_f2fe47cfd02bd69c61e3cfcc282560cdfdfc8e4f2d2ebc81c77f7a339e3d9ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fe47cfd02bd69c61e3cfcc282560cdfdfc8e4f2d2ebc81c77f7a339e3d9ffb->enter($__internal_f2fe47cfd02bd69c61e3cfcc282560cdfdfc8e4f2d2ebc81c77f7a339e3d9ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.own-keys.js"));

        // line 1
        echo "// 26.1.11 Reflect.ownKeys(target)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', { ownKeys: require('./_own-keys') });
";
        
        $__internal_f2fe47cfd02bd69c61e3cfcc282560cdfdfc8e4f2d2ebc81c77f7a339e3d9ffb->leave($__internal_f2fe47cfd02bd69c61e3cfcc282560cdfdfc8e4f2d2ebc81c77f7a339e3d9ffb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.own-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.11 Reflect.ownKeys(target)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', { ownKeys: require('./_own-keys') });
", "node_modules/core-js/library/modules/es6.reflect.own-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.own-keys.js");
    }
}

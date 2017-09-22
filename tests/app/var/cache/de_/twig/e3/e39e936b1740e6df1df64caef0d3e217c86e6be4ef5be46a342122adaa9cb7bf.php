<?php

/* node_modules/core-js/modules/es7.map.to-json.js */
class __TwigTemplate_91f5c4dff86b6edabb6c0d1487bb4d689737d63c5488f51cfb70ae48057f3d90 extends Twig_Template
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
        $__internal_0ce1a80b5afe42ba6c72ff16b0f0d4cb3f54f549c45e09abeec03192c6929810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce1a80b5afe42ba6c72ff16b0f0d4cb3f54f549c45e09abeec03192c6929810->enter($__internal_0ce1a80b5afe42ba6c72ff16b0f0d4cb3f54f549c45e09abeec03192c6929810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.map.to-json.js"));

        // line 1
        echo "// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Map', { toJSON: require('./_collection-to-json')('Map') });
";
        
        $__internal_0ce1a80b5afe42ba6c72ff16b0f0d4cb3f54f549c45e09abeec03192c6929810->leave($__internal_0ce1a80b5afe42ba6c72ff16b0f0d4cb3f54f549c45e09abeec03192c6929810_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.map.to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Map', { toJSON: require('./_collection-to-json')('Map') });
", "node_modules/core-js/modules/es7.map.to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.map.to-json.js");
    }
}

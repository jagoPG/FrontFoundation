<?php

/* node_modules/core-js/library/modules/es7.set.to-json.js */
class __TwigTemplate_4507928f6cc198eb302ac641ca8978bdae69728a369250b9d284fabe56dda48b extends Twig_Template
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
        $__internal_a62ed47571c76fbf97597d16abb3c8dd9f1c3654a9103b9ea691207c46dabc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62ed47571c76fbf97597d16abb3c8dd9f1c3654a9103b9ea691207c46dabc2f->enter($__internal_a62ed47571c76fbf97597d16abb3c8dd9f1c3654a9103b9ea691207c46dabc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.set.to-json.js"));

        // line 1
        echo "// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Set', { toJSON: require('./_collection-to-json')('Set') });
";
        
        $__internal_a62ed47571c76fbf97597d16abb3c8dd9f1c3654a9103b9ea691207c46dabc2f->leave($__internal_a62ed47571c76fbf97597d16abb3c8dd9f1c3654a9103b9ea691207c46dabc2f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.set.to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Set', { toJSON: require('./_collection-to-json')('Set') });
", "node_modules/core-js/library/modules/es7.set.to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.set.to-json.js");
    }
}

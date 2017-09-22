<?php

/* node_modules/core-js/modules/es6.number.max-safe-integer.js */
class __TwigTemplate_4d6f9239b08dd1365946f91b19fb178cdf147772cb29b0e6ef0c1dc20dbea05a extends Twig_Template
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
        $__internal_16c4279a30c0c77d8ede5debea4ba5563bc7a90cca00c5e1dba58251512d208e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c4279a30c0c77d8ede5debea4ba5563bc7a90cca00c5e1dba58251512d208e->enter($__internal_16c4279a30c0c77d8ede5debea4ba5563bc7a90cca00c5e1dba58251512d208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.max-safe-integer.js"));

        // line 1
        echo "// 20.1.2.6 Number.MAX_SAFE_INTEGER
var \$export = require('./_export');

\$export(\$export.S, 'Number', { MAX_SAFE_INTEGER: 0x1fffffffffffff });
";
        
        $__internal_16c4279a30c0c77d8ede5debea4ba5563bc7a90cca00c5e1dba58251512d208e->leave($__internal_16c4279a30c0c77d8ede5debea4ba5563bc7a90cca00c5e1dba58251512d208e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.max-safe-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.6 Number.MAX_SAFE_INTEGER
var \$export = require('./_export');

\$export(\$export.S, 'Number', { MAX_SAFE_INTEGER: 0x1fffffffffffff });
", "node_modules/core-js/modules/es6.number.max-safe-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.max-safe-integer.js");
    }
}

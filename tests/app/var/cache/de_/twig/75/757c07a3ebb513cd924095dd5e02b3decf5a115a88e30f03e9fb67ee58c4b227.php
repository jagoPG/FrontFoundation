<?php

/* node_modules/ajv/scripts/prepare-tests */
class __TwigTemplate_d2b2db735acf7eb4bd48ff3061b36ae15ec1d6522d6a3850238c1d02db9fc803 extends Twig_Template
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
        $__internal_20599cd51ddae6550f479366acbd486e8196338ca049db49f0937afcbd5fde00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20599cd51ddae6550f479366acbd486e8196338ca049db49f0937afcbd5fde00->enter($__internal_20599cd51ddae6550f479366acbd486e8196338ca049db49f0937afcbd5fde00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/scripts/prepare-tests"));

        // line 1
        echo "#!/usr/bin/env sh

set -e

mkdir -p .browser

find spec -type f -name '*.spec.js' | \\
xargs -I {} sh -c \\
'export f=\"{}\"; browserify \$f -t require-globify -t brfs -x ajv -u buffer -o \$(echo \$f | sed -e \"s/spec/.browser/\");'
";
        
        $__internal_20599cd51ddae6550f479366acbd486e8196338ca049db49f0937afcbd5fde00->leave($__internal_20599cd51ddae6550f479366acbd486e8196338ca049db49f0937afcbd5fde00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/scripts/prepare-tests";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env sh

set -e

mkdir -p .browser

find spec -type f -name '*.spec.js' | \\
xargs -I {} sh -c \\
'export f=\"{}\"; browserify \$f -t require-globify -t brfs -x ajv -u buffer -o \$(echo \$f | sed -e \"s/spec/.browser/\");'
", "node_modules/ajv/scripts/prepare-tests", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/scripts/prepare-tests");
    }
}

<?php

/* node_modules/har-validator/node_modules/ajv/scripts/prepare-tests */
class __TwigTemplate_9f8869b6e5bf42045aeaf1294ba486df80d7e734946905df5bf0f7d4149ca666 extends Twig_Template
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
        $__internal_85a8226b7cee0458cff3083403f613992e5ff1dfac2cd16cc8fda6b29a4d9221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a8226b7cee0458cff3083403f613992e5ff1dfac2cd16cc8fda6b29a4d9221->enter($__internal_85a8226b7cee0458cff3083403f613992e5ff1dfac2cd16cc8fda6b29a4d9221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/scripts/prepare-tests"));

        // line 1
        echo "#!/usr/bin/env sh

set -e

mkdir -p .browser

find spec -type f -name '*.spec.js' | \\
xargs -I {} sh -c \\
'export f=\"{}\"; browserify \$f -t require-globify -t brfs -x ajv -u buffer -o \$(echo \$f | sed -e \"s/spec/.browser/\");'
";
        
        $__internal_85a8226b7cee0458cff3083403f613992e5ff1dfac2cd16cc8fda6b29a4d9221->leave($__internal_85a8226b7cee0458cff3083403f613992e5ff1dfac2cd16cc8fda6b29a4d9221_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/scripts/prepare-tests";
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
", "node_modules/har-validator/node_modules/ajv/scripts/prepare-tests", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/scripts/prepare-tests");
    }
}

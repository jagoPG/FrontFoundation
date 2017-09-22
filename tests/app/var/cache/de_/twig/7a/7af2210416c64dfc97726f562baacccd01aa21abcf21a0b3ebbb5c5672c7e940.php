<?php

/* node_modules/fsevents/node_modules/ajv/scripts/prepare-tests */
class __TwigTemplate_9bdc378381d65251ad7789da90dd34568d74ad74c4c4375c0b3b37fb6e1faf80 extends Twig_Template
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
        $__internal_1a6e9dd53a24174623c64b423f1e26b61423b10d259825f33ab14d0c03618539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6e9dd53a24174623c64b423f1e26b61423b10d259825f33ab14d0c03618539->enter($__internal_1a6e9dd53a24174623c64b423f1e26b61423b10d259825f33ab14d0c03618539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/scripts/prepare-tests"));

        // line 1
        echo "#!/usr/bin/env sh

set -e

mkdir -p .browser

find spec -type f -name '*.spec.js' | \\
xargs -I {} sh -c \\
'export f=\"{}\"; browserify \$f -t require-globify -t brfs -x ajv -u buffer -o \$(echo \$f | sed -e \"s/spec/.browser/\");'
";
        
        $__internal_1a6e9dd53a24174623c64b423f1e26b61423b10d259825f33ab14d0c03618539->leave($__internal_1a6e9dd53a24174623c64b423f1e26b61423b10d259825f33ab14d0c03618539_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/scripts/prepare-tests";
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
", "node_modules/fsevents/node_modules/ajv/scripts/prepare-tests", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/scripts/prepare-tests");
    }
}

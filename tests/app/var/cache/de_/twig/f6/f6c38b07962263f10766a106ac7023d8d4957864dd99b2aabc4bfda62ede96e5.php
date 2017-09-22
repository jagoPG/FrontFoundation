<?php

/* node_modules/parsleyjs/bower_components/mocha/scripts/ensure-compatible-npm.sh */
class __TwigTemplate_47a7c594efb612e6e11c6552bab01d3413164034bfd33fdc0ce1338b454d8713 extends Twig_Template
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
        $__internal_d7f165e095d90e12907699ad234ed35904ed8267537443897dfe51b5eb4ea450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f165e095d90e12907699ad234ed35904ed8267537443897dfe51b5eb4ea450->enter($__internal_d7f165e095d90e12907699ad234ed35904ed8267537443897dfe51b5eb4ea450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/mocha/scripts/ensure-compatible-npm.sh"));

        // line 1
        echo "#!/usr/bin/env sh

set -o nounset
set -o errexit

npm install semver
if node -e \"process.exit(require('semver').lt(process.argv[1], '1.3.7') ? 0 : 1)\" \$(npm -v); then
  npm install -g npm@2
  npm install -g npm
fi
npm uninstall semver
";
        
        $__internal_d7f165e095d90e12907699ad234ed35904ed8267537443897dfe51b5eb4ea450->leave($__internal_d7f165e095d90e12907699ad234ed35904ed8267537443897dfe51b5eb4ea450_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/mocha/scripts/ensure-compatible-npm.sh";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env sh

set -o nounset
set -o errexit

npm install semver
if node -e \"process.exit(require('semver').lt(process.argv[1], '1.3.7') ? 0 : 1)\" \$(npm -v); then
  npm install -g npm@2
  npm install -g npm
fi
npm uninstall semver
", "node_modules/parsleyjs/bower_components/mocha/scripts/ensure-compatible-npm.sh", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/mocha/scripts/ensure-compatible-npm.sh");
    }
}

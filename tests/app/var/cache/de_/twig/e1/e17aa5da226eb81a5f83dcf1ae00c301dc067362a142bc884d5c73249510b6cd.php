<?php

/* node_modules/es5-ext/circle.yml */
class __TwigTemplate_1fd9ad534c2ccf7cba709b371cd6d74c8131b1d4b287ede671c532cd5c9e81a2 extends Twig_Template
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
        $__internal_f1f325c066598c359ead3a81ae21958b592afa5f06a5d59d11248282fc6f12b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f325c066598c359ead3a81ae21958b592afa5f06a5d59d11248282fc6f12b1->enter($__internal_f1f325c066598c359ead3a81ae21958b592afa5f06a5d59d11248282fc6f12b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/circle.yml"));

        // line 1
        echo "machine:
  node:
    version: 8

test:
  override:
    - npm test
    - nvm use 6; npm test
    - npm run lint
    - nvm use 4; npm test
    - nvm use 0.12; npm test
";
        
        $__internal_f1f325c066598c359ead3a81ae21958b592afa5f06a5d59d11248282fc6f12b1->leave($__internal_f1f325c066598c359ead3a81ae21958b592afa5f06a5d59d11248282fc6f12b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/circle.yml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("machine:
  node:
    version: 8

test:
  override:
    - npm test
    - nvm use 6; npm test
    - npm run lint
    - nvm use 4; npm test
    - nvm use 0.12; npm test
", "node_modules/es5-ext/circle.yml", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/circle.yml");
    }
}

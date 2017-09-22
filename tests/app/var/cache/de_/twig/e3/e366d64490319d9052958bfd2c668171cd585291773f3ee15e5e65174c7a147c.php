<?php

/* node_modules/buffer/bin/zuul-es5.yml */
class __TwigTemplate_16d9becc76f0e8f62844b777834df6eb3d18794efca06b14a4e2edbdeda42356 extends Twig_Template
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
        $__internal_cdf5926d8ae180733c5e972aed9fd4e8793a4e45fc23a0d23a0a99cfd7fa8e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf5926d8ae180733c5e972aed9fd4e8793a4e45fc23a0d23a0a99cfd7fa8e26->enter($__internal_cdf5926d8ae180733c5e972aed9fd4e8793a4e45fc23a0d23a0a99cfd7fa8e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/bin/zuul-es5.yml"));

        // line 1
        echo "ui: tape
scripts:
  - ./test/_polyfill.js
browsers:
  - name: safari
    version: latest
  - name: ie
    version: 8..latest
  - name: microsoftedge
    version: 13..latest
  - name: android
    version: 4.4..latest
  - name: iphone
    version: latest
";
        
        $__internal_cdf5926d8ae180733c5e972aed9fd4e8793a4e45fc23a0d23a0a99cfd7fa8e26->leave($__internal_cdf5926d8ae180733c5e972aed9fd4e8793a4e45fc23a0d23a0a99cfd7fa8e26_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/bin/zuul-es5.yml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("ui: tape
scripts:
  - ./test/_polyfill.js
browsers:
  - name: safari
    version: latest
  - name: ie
    version: 8..latest
  - name: microsoftedge
    version: 13..latest
  - name: android
    version: 4.4..latest
  - name: iphone
    version: latest
", "node_modules/buffer/bin/zuul-es5.yml", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/bin/zuul-es5.yml");
    }
}

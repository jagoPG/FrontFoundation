<?php

/* node_modules/fsevents/node_modules/performance-now/Makefile */
class __TwigTemplate_531dddacba16614c3655b090c5ea532dc55e7e47ded5b6908bb7433348c89fbf extends Twig_Template
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
        $__internal_483974055483037561925da8431b24f019329fcb3b0c1280b10ea662d947af43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483974055483037561925da8431b24f019329fcb3b0c1280b10ea662d947af43->enter($__internal_483974055483037561925da8431b24f019329fcb3b0c1280b10ea662d947af43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/performance-now/Makefile"));

        // line 1
        echo "build:
\tmkdir -p lib
\trm -rf lib/*
\tnode_modules/.bin/coffee --compile --output lib/ src/

watch:
\tnode_modules/.bin/coffee --watch --compile --output lib/ src/
\t
test:
\tnode_modules/.bin/mocha

jumpstart:
\tcurl -u 'meryn' https://api.github.com/user/repos -d '{\"name\":\"performance-now\", \"description\":\"Implements performance.now (based on process.hrtime).\",\"private\":false}'
\tmkdir -p src
\ttouch src/performance-now.coffee
\tmkdir -p test
\ttouch test/performance-now.coffee
\tnpm install
\tgit init
\tgit remote add origin git@github.com:meryn/performance-now
\tgit add .
\tgit commit -m \"jumpstart commit.\"
\tgit push -u origin master

.PHONY: test";
        
        $__internal_483974055483037561925da8431b24f019329fcb3b0c1280b10ea662d947af43->leave($__internal_483974055483037561925da8431b24f019329fcb3b0c1280b10ea662d947af43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/performance-now/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("build:
\tmkdir -p lib
\trm -rf lib/*
\tnode_modules/.bin/coffee --compile --output lib/ src/

watch:
\tnode_modules/.bin/coffee --watch --compile --output lib/ src/
\t
test:
\tnode_modules/.bin/mocha

jumpstart:
\tcurl -u 'meryn' https://api.github.com/user/repos -d '{\"name\":\"performance-now\", \"description\":\"Implements performance.now (based on process.hrtime).\",\"private\":false}'
\tmkdir -p src
\ttouch src/performance-now.coffee
\tmkdir -p test
\ttouch test/performance-now.coffee
\tnpm install
\tgit init
\tgit remote add origin git@github.com:meryn/performance-now
\tgit add .
\tgit commit -m \"jumpstart commit.\"
\tgit push -u origin master

.PHONY: test", "node_modules/fsevents/node_modules/performance-now/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/performance-now/Makefile");
    }
}

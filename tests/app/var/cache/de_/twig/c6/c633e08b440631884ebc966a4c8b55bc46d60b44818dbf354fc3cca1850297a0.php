<?php

/* node_modules/performance-now/Makefile */
class __TwigTemplate_bd9088604a23190a7ad27ec0a11266e058c4c6a98b740d9cf85f3cbbe47793a6 extends Twig_Template
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
        $__internal_b53a88cec814ffa947dc5599f4d15e7b188dd7c428689395b785dd3f5e20b0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53a88cec814ffa947dc5599f4d15e7b188dd7c428689395b785dd3f5e20b0b9->enter($__internal_b53a88cec814ffa947dc5599f4d15e7b188dd7c428689395b785dd3f5e20b0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/performance-now/Makefile"));

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
        
        $__internal_b53a88cec814ffa947dc5599f4d15e7b188dd7c428689395b785dd3f5e20b0b9->leave($__internal_b53a88cec814ffa947dc5599f4d15e7b188dd7c428689395b785dd3f5e20b0b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/performance-now/Makefile";
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

.PHONY: test", "node_modules/performance-now/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/performance-now/Makefile");
    }
}

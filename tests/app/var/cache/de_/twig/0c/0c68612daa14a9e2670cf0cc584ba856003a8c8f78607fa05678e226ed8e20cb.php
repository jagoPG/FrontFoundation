<?php

/* node_modules/debug/Makefile */
class __TwigTemplate_56c1bbed24b2a2ed90ad3a3946eb3531b40b3897f451a4fe04464b87e4cb5f9d extends Twig_Template
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
        $__internal_92a23c6ed84a1df5425799f34b3f7277b2acef111aea320408f2cb3a5d1a2f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a23c6ed84a1df5425799f34b3f7277b2acef111aea320408f2cb3a5d1a2f8d->enter($__internal_92a23c6ed84a1df5425799f34b3f7277b2acef111aea320408f2cb3a5d1a2f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/debug/Makefile"));

        // line 1
        echo "# get Makefile directory name: http://stackoverflow.com/a/5982798/376773
THIS_MAKEFILE_PATH:=\$(word \$(words \$(MAKEFILE_LIST)),\$(MAKEFILE_LIST))
THIS_DIR:=\$(shell cd \$(dir \$(THIS_MAKEFILE_PATH));pwd)

# BIN directory
BIN := \$(THIS_DIR)/node_modules/.bin

# Path
PATH := node_modules/.bin:\$(PATH)
SHELL := /bin/bash

# applications
NODE ?= \$(shell which node)
YARN ?= \$(shell which yarn)
PKG ?= \$(if \$(YARN),\$(YARN),\$(NODE) \$(shell which npm))
BROWSERIFY ?= \$(NODE) \$(BIN)/browserify

.FORCE:

install: node_modules

node_modules: package.json
\t@NODE_ENV= \$(PKG) install
\t@touch node_modules

lint: .FORCE
\teslint browser.js debug.js index.js node.js

test-node: .FORCE
\tistanbul cover node_modules/mocha/bin/_mocha -- test/**.js

test-browser: .FORCE
\tmkdir -p dist

\t@\$(BROWSERIFY) \\
\t\t--standalone debug \\
\t\t. > dist/debug.js

\tkarma start --single-run
\trimraf dist

test: .FORCE
\tconcurrently \\
\t\t\"make test-node\" \\
\t\t\"make test-browser\"

coveralls:
\tcat ./coverage/lcov.info | ./node_modules/coveralls/bin/coveralls.js

.PHONY: all install clean distclean
";
        
        $__internal_92a23c6ed84a1df5425799f34b3f7277b2acef111aea320408f2cb3a5d1a2f8d->leave($__internal_92a23c6ed84a1df5425799f34b3f7277b2acef111aea320408f2cb3a5d1a2f8d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/debug/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# get Makefile directory name: http://stackoverflow.com/a/5982798/376773
THIS_MAKEFILE_PATH:=\$(word \$(words \$(MAKEFILE_LIST)),\$(MAKEFILE_LIST))
THIS_DIR:=\$(shell cd \$(dir \$(THIS_MAKEFILE_PATH));pwd)

# BIN directory
BIN := \$(THIS_DIR)/node_modules/.bin

# Path
PATH := node_modules/.bin:\$(PATH)
SHELL := /bin/bash

# applications
NODE ?= \$(shell which node)
YARN ?= \$(shell which yarn)
PKG ?= \$(if \$(YARN),\$(YARN),\$(NODE) \$(shell which npm))
BROWSERIFY ?= \$(NODE) \$(BIN)/browserify

.FORCE:

install: node_modules

node_modules: package.json
\t@NODE_ENV= \$(PKG) install
\t@touch node_modules

lint: .FORCE
\teslint browser.js debug.js index.js node.js

test-node: .FORCE
\tistanbul cover node_modules/mocha/bin/_mocha -- test/**.js

test-browser: .FORCE
\tmkdir -p dist

\t@\$(BROWSERIFY) \\
\t\t--standalone debug \\
\t\t. > dist/debug.js

\tkarma start --single-run
\trimraf dist

test: .FORCE
\tconcurrently \\
\t\t\"make test-node\" \\
\t\t\"make test-browser\"

coveralls:
\tcat ./coverage/lcov.info | ./node_modules/coveralls/bin/coveralls.js

.PHONY: all install clean distclean
", "node_modules/debug/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/debug/Makefile");
    }
}

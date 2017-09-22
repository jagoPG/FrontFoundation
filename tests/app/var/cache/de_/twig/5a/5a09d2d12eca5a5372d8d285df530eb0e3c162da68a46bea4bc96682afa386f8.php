<?php

/* node_modules/fsevents/node_modules/verror/Makefile */
class __TwigTemplate_bb66598f876169605c6484c7804535be46ac7cafc51c512795b436fd2c2b92f5 extends Twig_Template
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
        $__internal_974c25496422e2326229876fbfa2ae753950931f8f83234e48a15165f0e6a6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974c25496422e2326229876fbfa2ae753950931f8f83234e48a15165f0e6a6ad->enter($__internal_974c25496422e2326229876fbfa2ae753950931f8f83234e48a15165f0e6a6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/Makefile"));

        // line 1
        echo "#
# Copyright (c) 2012, Joyent, Inc. All rights reserved.
#
# Makefile: top-level Makefile
#
# This Makefile contains only repo-specific logic and uses included makefiles
# to supply common targets (javascriptlint, jsstyle, restdown, etc.), which are
# used by other repos as well.
#

#
# Tools
#
NPM\t\t = npm

#
# Files
#
JS_FILES\t:= \$(shell find lib examples tests -name '*.js')
JSL_FILES_NODE   = \$(JS_FILES)
JSSTYLE_FILES\t = \$(JS_FILES)
JSL_CONF_NODE\t = jsl.node.conf

.PHONY: all
all:
\t\$(NPM) install

.PHONY: test
test:
\tnode tests/tst.inherit.js
\tnode tests/tst.verror.js
\tnode tests/tst.werror.js
\t@echo all tests passed

include ./Makefile.targ
";
        
        $__internal_974c25496422e2326229876fbfa2ae753950931f8f83234e48a15165f0e6a6ad->leave($__internal_974c25496422e2326229876fbfa2ae753950931f8f83234e48a15165f0e6a6ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#
# Copyright (c) 2012, Joyent, Inc. All rights reserved.
#
# Makefile: top-level Makefile
#
# This Makefile contains only repo-specific logic and uses included makefiles
# to supply common targets (javascriptlint, jsstyle, restdown, etc.), which are
# used by other repos as well.
#

#
# Tools
#
NPM\t\t = npm

#
# Files
#
JS_FILES\t:= \$(shell find lib examples tests -name '*.js')
JSL_FILES_NODE   = \$(JS_FILES)
JSSTYLE_FILES\t = \$(JS_FILES)
JSL_CONF_NODE\t = jsl.node.conf

.PHONY: all
all:
\t\$(NPM) install

.PHONY: test
test:
\tnode tests/tst.inherit.js
\tnode tests/tst.verror.js
\tnode tests/tst.werror.js
\t@echo all tests passed

include ./Makefile.targ
", "node_modules/fsevents/node_modules/verror/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/Makefile");
    }
}

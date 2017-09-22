<?php

/* node_modules/fsevents/node_modules/extsprintf/Makefile */
class __TwigTemplate_a37a7265370baf33675889a1915bc6e5d5617a101768a0eeeaf025fc76ec8a6d extends Twig_Template
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
        $__internal_4ab18d40176d9af6df363dde5ed66f545b90094409582b25c2ec1e08ce4aa940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab18d40176d9af6df363dde5ed66f545b90094409582b25c2ec1e08ce4aa940->enter($__internal_4ab18d40176d9af6df363dde5ed66f545b90094409582b25c2ec1e08ce4aa940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/extsprintf/Makefile"));

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
# Files
#
JS_FILES\t:= \$(shell find lib -name '*.js')
JSL_FILES_NODE   = \$(JS_FILES)
JSSTYLE_FILES\t = \$(JS_FILES)
JSL_CONF_NODE\t = jsl.node.conf

# Default target is \"check\"
check:

include ./Makefile.deps
include ./Makefile.targ
";
        
        $__internal_4ab18d40176d9af6df363dde5ed66f545b90094409582b25c2ec1e08ce4aa940->leave($__internal_4ab18d40176d9af6df363dde5ed66f545b90094409582b25c2ec1e08ce4aa940_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/extsprintf/Makefile";
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
# Files
#
JS_FILES\t:= \$(shell find lib -name '*.js')
JSL_FILES_NODE   = \$(JS_FILES)
JSSTYLE_FILES\t = \$(JS_FILES)
JSL_CONF_NODE\t = jsl.node.conf

# Default target is \"check\"
check:

include ./Makefile.deps
include ./Makefile.targ
", "node_modules/fsevents/node_modules/extsprintf/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/extsprintf/Makefile");
    }
}

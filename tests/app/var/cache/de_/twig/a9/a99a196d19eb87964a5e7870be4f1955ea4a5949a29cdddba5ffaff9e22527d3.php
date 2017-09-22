<?php

/* node_modules/extsprintf/Makefile */
class __TwigTemplate_09bd18d3108822e7c8ae31bcc15715932fa552ac444a1cf752f62a8b7d4daa2e extends Twig_Template
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
        $__internal_41ddad72205f33551bd9d0e4157e1019d63e7c24fef97ea63829d5b64b8ba1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ddad72205f33551bd9d0e4157e1019d63e7c24fef97ea63829d5b64b8ba1f2->enter($__internal_41ddad72205f33551bd9d0e4157e1019d63e7c24fef97ea63829d5b64b8ba1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/extsprintf/Makefile"));

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
JSL\t\t = jsl
JSSTYLE\t\t = jsstyle
JS_FILES\t:= \$(shell find examples lib -name '*.js')
JSL_FILES_NODE   = \$(JS_FILES)
JSSTYLE_FILES\t = \$(JS_FILES)
JSL_CONF_NODE\t = jsl.node.conf

# Default target is \"check\"
check:

include ./Makefile.targ
";
        
        $__internal_41ddad72205f33551bd9d0e4157e1019d63e7c24fef97ea63829d5b64b8ba1f2->leave($__internal_41ddad72205f33551bd9d0e4157e1019d63e7c24fef97ea63829d5b64b8ba1f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/extsprintf/Makefile";
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
JSL\t\t = jsl
JSSTYLE\t\t = jsstyle
JS_FILES\t:= \$(shell find examples lib -name '*.js')
JSL_FILES_NODE   = \$(JS_FILES)
JSSTYLE_FILES\t = \$(JS_FILES)
JSL_CONF_NODE\t = jsl.node.conf

# Default target is \"check\"
check:

include ./Makefile.targ
", "node_modules/extsprintf/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/extsprintf/Makefile");
    }
}

<?php

/* node_modules/fsevents/node_modules/extsprintf/Makefile.deps */
class __TwigTemplate_35494fc7c3bd6496ab6f2d6dd7e703f322b2469f4ab3724671b2782c51550e68 extends Twig_Template
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
        $__internal_003c158a42344cfb7a2606c8137fb86366e50a51f4fc6b7c082af2cb9c0d4bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003c158a42344cfb7a2606c8137fb86366e50a51f4fc6b7c082af2cb9c0d4bb2->enter($__internal_003c158a42344cfb7a2606c8137fb86366e50a51f4fc6b7c082af2cb9c0d4bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/extsprintf/Makefile.deps"));

        // line 1
        echo "# -*- mode: makefile -*-
#
# Copyright (c) 2012, Joyent, Inc. All rights reserved.
#
# Makefile.deps: Makefile for including common tools as dependencies
#
# NOTE: This makefile comes from the \"eng\" repo. It's designed to be dropped
# into other repos as-is without requiring any modifications. If you find
# yourself changing this file, you should instead update the original copy in
# eng.git and then update your repo to use the new version.
#
# This file is separate from Makefile.targ so that teams can choose
# independently whether to use the common targets in Makefile.targ and the
# common tools here.
#

#
# javascriptlint
#
JSL_EXEC\t?= deps/javascriptlint/build/install/jsl
JSL\t\t?= python2.6 \$(JSL_EXEC)

\$(JSL_EXEC): | deps/javascriptlint/.git
\tcd deps/javascriptlint && make install

#
# jsstyle
#
JSSTYLE_EXEC\t?= deps/jsstyle/jsstyle
JSSTYLE\t\t?= \$(JSSTYLE_EXEC)

\$(JSSTYLE_EXEC): | deps/jsstyle/.git

#
# restdown
#
RESTDOWN_EXEC\t?= deps/restdown/bin/restdown
RESTDOWN\t?= python2.6 \$(RESTDOWN_EXEC)
\$(RESTDOWN_EXEC): | deps/restdown/.git
";
        
        $__internal_003c158a42344cfb7a2606c8137fb86366e50a51f4fc6b7c082af2cb9c0d4bb2->leave($__internal_003c158a42344cfb7a2606c8137fb86366e50a51f4fc6b7c082af2cb9c0d4bb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/extsprintf/Makefile.deps";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# -*- mode: makefile -*-
#
# Copyright (c) 2012, Joyent, Inc. All rights reserved.
#
# Makefile.deps: Makefile for including common tools as dependencies
#
# NOTE: This makefile comes from the \"eng\" repo. It's designed to be dropped
# into other repos as-is without requiring any modifications. If you find
# yourself changing this file, you should instead update the original copy in
# eng.git and then update your repo to use the new version.
#
# This file is separate from Makefile.targ so that teams can choose
# independently whether to use the common targets in Makefile.targ and the
# common tools here.
#

#
# javascriptlint
#
JSL_EXEC\t?= deps/javascriptlint/build/install/jsl
JSL\t\t?= python2.6 \$(JSL_EXEC)

\$(JSL_EXEC): | deps/javascriptlint/.git
\tcd deps/javascriptlint && make install

#
# jsstyle
#
JSSTYLE_EXEC\t?= deps/jsstyle/jsstyle
JSSTYLE\t\t?= \$(JSSTYLE_EXEC)

\$(JSSTYLE_EXEC): | deps/jsstyle/.git

#
# restdown
#
RESTDOWN_EXEC\t?= deps/restdown/bin/restdown
RESTDOWN\t?= python2.6 \$(RESTDOWN_EXEC)
\$(RESTDOWN_EXEC): | deps/restdown/.git
", "node_modules/fsevents/node_modules/extsprintf/Makefile.deps", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/extsprintf/Makefile.deps");
    }
}

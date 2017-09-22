<?php

/* node_modules/fsevents/node_modules/json-stringify-safe/Makefile */
class __TwigTemplate_54188e52d00d27ac1c8aed926306f2af4593f686e9052e3fa6d51abcb6387def extends Twig_Template
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
        $__internal_8d996bb04781f30fecd111ae1a8b16ab2b02590db3dc575870edb8785ec57960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d996bb04781f30fecd111ae1a8b16ab2b02590db3dc575870edb8785ec57960->enter($__internal_8d996bb04781f30fecd111ae1a8b16ab2b02590db3dc575870edb8785ec57960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stringify-safe/Makefile"));

        // line 1
        echo "NODE_OPTS =
TEST_OPTS =

love:
\t@echo \"Feel like makin' love.\"

test:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R dot \$(TEST_OPTS)

spec:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R spec \$(TEST_OPTS)

autotest:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R dot --watch \$(TEST_OPTS)

autospec:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R spec --watch \$(TEST_OPTS)

pack:
\t@file=\$\$(npm pack); echo \"\$\$file\"; tar tf \"\$\$file\"

publish:
\tnpm publish

tag:
\tgit tag \"v\$\$(node -e 'console.log(require(\"./package\").version)')\"

clean:
\trm -f *.tgz
\tnpm prune --production

.PHONY: love
.PHONY: test spec autotest autospec
.PHONY: pack publish tag
.PHONY: clean
";
        
        $__internal_8d996bb04781f30fecd111ae1a8b16ab2b02590db3dc575870edb8785ec57960->leave($__internal_8d996bb04781f30fecd111ae1a8b16ab2b02590db3dc575870edb8785ec57960_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stringify-safe/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("NODE_OPTS =
TEST_OPTS =

love:
\t@echo \"Feel like makin' love.\"

test:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R dot \$(TEST_OPTS)

spec:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R spec \$(TEST_OPTS)

autotest:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R dot --watch \$(TEST_OPTS)

autospec:
\t@node \$(NODE_OPTS) ./node_modules/.bin/_mocha -R spec --watch \$(TEST_OPTS)

pack:
\t@file=\$\$(npm pack); echo \"\$\$file\"; tar tf \"\$\$file\"

publish:
\tnpm publish

tag:
\tgit tag \"v\$\$(node -e 'console.log(require(\"./package\").version)')\"

clean:
\trm -f *.tgz
\tnpm prune --production

.PHONY: love
.PHONY: test spec autotest autospec
.PHONY: pack publish tag
.PHONY: clean
", "node_modules/fsevents/node_modules/json-stringify-safe/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stringify-safe/Makefile");
    }
}

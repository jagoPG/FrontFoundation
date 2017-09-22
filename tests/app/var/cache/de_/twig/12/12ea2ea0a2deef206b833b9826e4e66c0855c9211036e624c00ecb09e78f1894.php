<?php

/* node_modules/readable-stream/doc/wg-meetings/2015-01-30.md */
class __TwigTemplate_2ec0b935b7b094b53a18215d6a205f7de548ac122734e0f33554a7ef89c4d301 extends Twig_Template
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
        $__internal_6bdcd8c6cb9b4faae17c644b5d5680206125da439217a601f2cad583406204c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdcd8c6cb9b4faae17c644b5d5680206125da439217a601f2cad583406204c7->enter($__internal_6bdcd8c6cb9b4faae17c644b5d5680206125da439217a601f2cad583406204c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readable-stream/doc/wg-meetings/2015-01-30.md"));

        // line 1
        echo "# streams WG Meeting 2015-01-30

## Links

* **Google Hangouts Video**: http://www.youtube.com/watch?v=I9nDOSGfwZg
* **GitHub Issue**: https://github.com/iojs/readable-stream/issues/106
* **Original Minutes Google Doc**: https://docs.google.com/document/d/17aTgLnjMXIrfjgNaTUnHQO7m3xgzHR2VXBTmi03Qii4/

## Agenda

Extracted from https://github.com/iojs/readable-stream/labels/wg-agenda prior to meeting.

* adopt a charter [#105](https://github.com/iojs/readable-stream/issues/105)
* release and versioning strategy [#101](https://github.com/iojs/readable-stream/issues/101)
* simpler stream creation [#102](https://github.com/iojs/readable-stream/issues/102)
* proposal: deprecate implicit flowing of streams [#99](https://github.com/iojs/readable-stream/issues/99)

## Minutes

### adopt a charter

* group: +1's all around

### What versioning scheme should be adopted?
* group: +1’s 3.0.0
* domenic+group: pulling in patches from other sources where appropriate
* mikeal: version independently, suggesting versions for io.js
* mikeal+domenic: work with TC to notify in advance of changes
simpler stream creation

### streamline creation of streams
* sam: streamline creation of streams
* domenic: nice simple solution posted
  but, we lose the opportunity to change the model
  may not be backwards incompatible (double check keys)

  **action item:** domenic will check

### remove implicit flowing of streams on(‘data’)
* add isFlowing / isPaused
* mikeal: worrying that we’re documenting polyfill methods – confuses users
* domenic: more reflective API is probably good, with warning labels for users
* new section for mad scientists (reflective stream access)
* calvin: name the “third state”
* mikeal: maybe borrow the name from whatwg?
* domenic: we’re missing the “third state”
* consensus: kind of difficult to name the third state
* mikeal: figure out differences in states / compat
* mathias: always flow on data – eliminates third state
  * explore what it breaks

**action items:**
* ask isaac for ability to list packages by what public io.js APIs they use (esp. Stream)
* ask rod/build for infrastructure
* **chris**: explore the “flow on data” approach
* add isPaused/isFlowing
* add new docs section
* move isPaused to that section


";
        
        $__internal_6bdcd8c6cb9b4faae17c644b5d5680206125da439217a601f2cad583406204c7->leave($__internal_6bdcd8c6cb9b4faae17c644b5d5680206125da439217a601f2cad583406204c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readable-stream/doc/wg-meetings/2015-01-30.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# streams WG Meeting 2015-01-30

## Links

* **Google Hangouts Video**: http://www.youtube.com/watch?v=I9nDOSGfwZg
* **GitHub Issue**: https://github.com/iojs/readable-stream/issues/106
* **Original Minutes Google Doc**: https://docs.google.com/document/d/17aTgLnjMXIrfjgNaTUnHQO7m3xgzHR2VXBTmi03Qii4/

## Agenda

Extracted from https://github.com/iojs/readable-stream/labels/wg-agenda prior to meeting.

* adopt a charter [#105](https://github.com/iojs/readable-stream/issues/105)
* release and versioning strategy [#101](https://github.com/iojs/readable-stream/issues/101)
* simpler stream creation [#102](https://github.com/iojs/readable-stream/issues/102)
* proposal: deprecate implicit flowing of streams [#99](https://github.com/iojs/readable-stream/issues/99)

## Minutes

### adopt a charter

* group: +1's all around

### What versioning scheme should be adopted?
* group: +1’s 3.0.0
* domenic+group: pulling in patches from other sources where appropriate
* mikeal: version independently, suggesting versions for io.js
* mikeal+domenic: work with TC to notify in advance of changes
simpler stream creation

### streamline creation of streams
* sam: streamline creation of streams
* domenic: nice simple solution posted
  but, we lose the opportunity to change the model
  may not be backwards incompatible (double check keys)

  **action item:** domenic will check

### remove implicit flowing of streams on(‘data’)
* add isFlowing / isPaused
* mikeal: worrying that we’re documenting polyfill methods – confuses users
* domenic: more reflective API is probably good, with warning labels for users
* new section for mad scientists (reflective stream access)
* calvin: name the “third state”
* mikeal: maybe borrow the name from whatwg?
* domenic: we’re missing the “third state”
* consensus: kind of difficult to name the third state
* mikeal: figure out differences in states / compat
* mathias: always flow on data – eliminates third state
  * explore what it breaks

**action items:**
* ask isaac for ability to list packages by what public io.js APIs they use (esp. Stream)
* ask rod/build for infrastructure
* **chris**: explore the “flow on data” approach
* add isPaused/isFlowing
* add new docs section
* move isPaused to that section


", "node_modules/readable-stream/doc/wg-meetings/2015-01-30.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readable-stream/doc/wg-meetings/2015-01-30.md");
    }
}

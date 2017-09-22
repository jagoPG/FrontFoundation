<?php

/* node_modules/fsevents/src/storage.cc */
class __TwigTemplate_034df54f9b50b8720fb9e717903da779d1ab6e42458429c25e9c7f7c7c8c5d79 extends Twig_Template
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
        $__internal_a3bde17e194891794f576485c4efd3a05dda19743da6dd791738345b7f1d3a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bde17e194891794f576485c4efd3a05dda19743da6dd791738345b7f1d3a95->enter($__internal_a3bde17e194891794f576485c4efd3a05dda19743da6dd791738345b7f1d3a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/src/storage.cc"));

        // line 1
        echo "/*
 ** © 2014 by Philipp Dunkel <pip@pipobscure.com>
 ** Licensed under MIT License.
 */

struct fse_event {
  UInt64 id;
  UInt32 flags;
  CFStringRef path;
  
  fse_event(CFStringRef eventPath, UInt32 eventFlag, UInt64 eventId) {
    this->path = eventPath;
    this->flags = eventFlag;
    this->id = eventId;
    if (this->path != NULL)
      CFRetain(this->path);
  }
  
  ~fse_event() {
    if (this->path != NULL)
      CFRelease(this->path);
  }

private:
  fse_event(const fse_event&);
  void operator=(const fse_event&);
};
";
        
        $__internal_a3bde17e194891794f576485c4efd3a05dda19743da6dd791738345b7f1d3a95->leave($__internal_a3bde17e194891794f576485c4efd3a05dda19743da6dd791738345b7f1d3a95_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/src/storage.cc";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 ** © 2014 by Philipp Dunkel <pip@pipobscure.com>
 ** Licensed under MIT License.
 */

struct fse_event {
  UInt64 id;
  UInt32 flags;
  CFStringRef path;
  
  fse_event(CFStringRef eventPath, UInt32 eventFlag, UInt64 eventId) {
    this->path = eventPath;
    this->flags = eventFlag;
    this->id = eventId;
    if (this->path != NULL)
      CFRetain(this->path);
  }
  
  ~fse_event() {
    if (this->path != NULL)
      CFRelease(this->path);
  }

private:
  fse_event(const fse_event&);
  void operator=(const fse_event&);
};
", "node_modules/fsevents/src/storage.cc", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/src/storage.cc");
    }
}

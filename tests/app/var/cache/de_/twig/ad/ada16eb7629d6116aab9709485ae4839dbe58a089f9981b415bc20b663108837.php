<?php

/* node_modules/fsevents/src/async.cc */
class __TwigTemplate_be9a3a47d02721409bd917ea4fc2bfdb04880a47b4e88c2ebedadc95f1a4e5e6 extends Twig_Template
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
        $__internal_81c7915a5746e7446c0b32be4a6be32a544c53fd288b40720720261f67d6c592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c7915a5746e7446c0b32be4a6be32a544c53fd288b40720720261f67d6c592->enter($__internal_81c7915a5746e7446c0b32be4a6be32a544c53fd288b40720720261f67d6c592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/src/async.cc"));

        // line 1
        echo "/*
** © 2014 by Philipp Dunkel <pip@pipobscure.com>
** Licensed under MIT License.
*/


void async_propagate(uv_async_t *async) {
  if (!async->data) return;
  FSEvents *fse = (FSEvents *)async->data;
  CFIndex idx, cnt;
  fse_event *event;
  char pathbuf[1024];
  const char *pathptr = NULL;
  fse->lock();
  cnt = fse->events.size();
  for (idx=0; idx<cnt; idx++) {
    event = fse->events.at(idx);
    if (event == NULL) continue;
    pathptr = CFStringGetCStringPtr(event->path, kCFStringEncodingUTF8);
    if (!pathptr) CFStringGetCString(event->path, pathbuf, 1024, kCFStringEncodingUTF8);
    fse->emitEvent(pathptr ? pathptr : pathbuf, event->flags, event->id);
    delete event;
  }
  if (cnt>0) fse->events.clear();
  fse->unlock();
}

void FSEvents::asyncStart() {
  if (async.data == this) return;
  async.data = this;
  uv_async_init(uv_default_loop(), &async, (uv_async_cb) async_propagate);
}

void FSEvents::asyncTrigger() {
  if (async.data != this) return;
  uv_async_send(&async);
}

void FSEvents::asyncStop() {
  if (async.data != this) return;
  async.data = NULL;
  uv_close((uv_handle_t *) &async, NULL);
}
";
        
        $__internal_81c7915a5746e7446c0b32be4a6be32a544c53fd288b40720720261f67d6c592->leave($__internal_81c7915a5746e7446c0b32be4a6be32a544c53fd288b40720720261f67d6c592_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/src/async.cc";
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


void async_propagate(uv_async_t *async) {
  if (!async->data) return;
  FSEvents *fse = (FSEvents *)async->data;
  CFIndex idx, cnt;
  fse_event *event;
  char pathbuf[1024];
  const char *pathptr = NULL;
  fse->lock();
  cnt = fse->events.size();
  for (idx=0; idx<cnt; idx++) {
    event = fse->events.at(idx);
    if (event == NULL) continue;
    pathptr = CFStringGetCStringPtr(event->path, kCFStringEncodingUTF8);
    if (!pathptr) CFStringGetCString(event->path, pathbuf, 1024, kCFStringEncodingUTF8);
    fse->emitEvent(pathptr ? pathptr : pathbuf, event->flags, event->id);
    delete event;
  }
  if (cnt>0) fse->events.clear();
  fse->unlock();
}

void FSEvents::asyncStart() {
  if (async.data == this) return;
  async.data = this;
  uv_async_init(uv_default_loop(), &async, (uv_async_cb) async_propagate);
}

void FSEvents::asyncTrigger() {
  if (async.data != this) return;
  uv_async_send(&async);
}

void FSEvents::asyncStop() {
  if (async.data != this) return;
  async.data = NULL;
  uv_close((uv_handle_t *) &async, NULL);
}
", "node_modules/fsevents/src/async.cc", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/src/async.cc");
    }
}

<?php

/* node_modules/fsevents/src/methods.cc */
class __TwigTemplate_63f21722c070989f859b31241991b9001d7bdb3b96bf5fd5a8f7fb1cf081ab69 extends Twig_Template
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
        $__internal_09acbac0199f56020301fcfb434a9839757eb7b8f5390218b4eedc7944cb9b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09acbac0199f56020301fcfb434a9839757eb7b8f5390218b4eedc7944cb9b9b->enter($__internal_09acbac0199f56020301fcfb434a9839757eb7b8f5390218b4eedc7944cb9b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/src/methods.cc"));

        // line 1
        echo "/*
** © 2014 by Philipp Dunkel <pip@pipobscure.com>
** Licensed under MIT License.
*/

void FSEvents::emitEvent(const char *path, UInt32 flags, UInt64 id) {
  if (!handler) return;
  Nan::HandleScope handle_scope;
  v8::Local<v8::Value> argv[] = {
    Nan::New<v8::String>(path).ToLocalChecked(),
    Nan::New<v8::Number>(flags),
    Nan::New<v8::Number>(id)
  };
  handler->Call(3, argv);
}

NAN_METHOD(FSEvents::New) {
  Nan::Utf8String *path = new Nan::Utf8String(info[0]);
  Nan::Callback *callback = new Nan::Callback(info[1].As<v8::Function>());

  FSEvents *fse = new FSEvents(**path, callback);
  fse->Wrap(info.This());

  info.GetReturnValue().Set(info.This());
}

NAN_METHOD(FSEvents::Stop) {
  FSEvents* fse = node::ObjectWrap::Unwrap<FSEvents>(info.This());

  fse->threadStop();
  fse->asyncStop();

  info.GetReturnValue().Set(info.This());
}

NAN_METHOD(FSEvents::Start) {
  FSEvents* fse = node::ObjectWrap::Unwrap<FSEvents>(info.This());
  fse->asyncStart();
  fse->threadStart();

  info.GetReturnValue().Set(info.This());
}
";
        
        $__internal_09acbac0199f56020301fcfb434a9839757eb7b8f5390218b4eedc7944cb9b9b->leave($__internal_09acbac0199f56020301fcfb434a9839757eb7b8f5390218b4eedc7944cb9b9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/src/methods.cc";
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

void FSEvents::emitEvent(const char *path, UInt32 flags, UInt64 id) {
  if (!handler) return;
  Nan::HandleScope handle_scope;
  v8::Local<v8::Value> argv[] = {
    Nan::New<v8::String>(path).ToLocalChecked(),
    Nan::New<v8::Number>(flags),
    Nan::New<v8::Number>(id)
  };
  handler->Call(3, argv);
}

NAN_METHOD(FSEvents::New) {
  Nan::Utf8String *path = new Nan::Utf8String(info[0]);
  Nan::Callback *callback = new Nan::Callback(info[1].As<v8::Function>());

  FSEvents *fse = new FSEvents(**path, callback);
  fse->Wrap(info.This());

  info.GetReturnValue().Set(info.This());
}

NAN_METHOD(FSEvents::Stop) {
  FSEvents* fse = node::ObjectWrap::Unwrap<FSEvents>(info.This());

  fse->threadStop();
  fse->asyncStop();

  info.GetReturnValue().Set(info.This());
}

NAN_METHOD(FSEvents::Start) {
  FSEvents* fse = node::ObjectWrap::Unwrap<FSEvents>(info.This());
  fse->asyncStart();
  fse->threadStart();

  info.GetReturnValue().Set(info.This());
}
", "node_modules/fsevents/src/methods.cc", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/src/methods.cc");
    }
}

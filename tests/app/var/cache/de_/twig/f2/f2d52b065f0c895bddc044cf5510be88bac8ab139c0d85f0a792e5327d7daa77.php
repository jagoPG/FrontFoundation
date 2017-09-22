<?php

/* node_modules/fsevents/fsevents.cc */
class __TwigTemplate_b885fef0c516a50de910d658410a9833c4471d3fe1047f9bde2f7db6fad67ae6 extends Twig_Template
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
        $__internal_ac051d297a91d212c4f8ec0d65ed789c78d7cbdf04ded9f50f714f8558a20c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac051d297a91d212c4f8ec0d65ed789c78d7cbdf04ded9f50f714f8558a20c5a->enter($__internal_ac051d297a91d212c4f8ec0d65ed789c78d7cbdf04ded9f50f714f8558a20c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/fsevents.cc"));

        // line 1
        echo "/*
** © 2014 by Philipp Dunkel <pip@pipobscure.com>
** Licensed under MIT License.
*/

#include \"nan.h\"
#include \"uv.h\"
#include \"v8.h\"
#include \"pthread.h\"
#include \"CoreFoundation/CoreFoundation.h\"
#include \"CoreServices/CoreServices.h\"
#include <iostream>
#include <vector>

#include \"src/storage.cc\"
namespace fse {
  class FSEvents : public node::ObjectWrap {
  public:
    FSEvents(const char *path, Nan::Callback *handler);
    ~FSEvents();

    // locking.cc
    bool lockStarted;
    pthread_mutex_t lockmutex;
    void lockingStart();
    void lock();
    void unlock();
    void lockingStop();

    // async.cc
    uv_async_t async;
    void asyncStart();
    void asyncTrigger();
    void asyncStop();

    // thread.cc
    pthread_t thread;
    CFRunLoopRef threadloop;
    void threadStart();
    static void *threadRun(void *ctx);
    void threadStop();

    // methods.cc - internal
    Nan::Callback *handler;
    void emitEvent(const char *path, UInt32 flags, UInt64 id);

    // Common
    CFArrayRef paths;
    std::vector<fse_event*> events;
    static void Initialize(v8::Handle<v8::Object> exports);

    // methods.cc - exposed
    static NAN_METHOD(New);
    static NAN_METHOD(Stop);
    static NAN_METHOD(Start);

  };
}

using namespace fse;

FSEvents::FSEvents(const char *path, Nan::Callback *handler): handler(handler) {
  CFStringRef dirs[] = { CFStringCreateWithCString(NULL, path, kCFStringEncodingUTF8) };
  paths = CFArrayCreate(NULL, (const void **)&dirs, 1, NULL);
  threadloop = NULL;
  lockingStart();
}
FSEvents::~FSEvents() {
  std::cout << \"YIKES\" << std::endl;
  lockingStop();
  delete handler;
  handler = NULL;

  CFRelease(paths);
}

#ifndef kFSEventStreamEventFlagItemCreated
#define kFSEventStreamEventFlagItemCreated 0x00000010
#endif

#include \"src/locking.cc\"
#include \"src/async.cc\"
#include \"src/thread.cc\"
#include \"src/constants.cc\"
#include \"src/methods.cc\"

void FSEvents::Initialize(v8::Handle<v8::Object> exports) {
  v8::Local<v8::FunctionTemplate> tpl = Nan::New<v8::FunctionTemplate>(FSEvents::New);
  tpl->SetClassName(Nan::New<v8::String>(\"FSEvents\").ToLocalChecked());
  tpl->InstanceTemplate()->SetInternalFieldCount(1);
  tpl->PrototypeTemplate()->Set(
           Nan::New<v8::String>(\"start\").ToLocalChecked(),
           Nan::New<v8::FunctionTemplate>(FSEvents::Start));
  tpl->PrototypeTemplate()->Set(
           Nan::New<v8::String>(\"stop\").ToLocalChecked(),
           Nan::New<v8::FunctionTemplate>(FSEvents::Stop));
  exports->Set(Nan::New<v8::String>(\"Constants\").ToLocalChecked(), Constants());
  exports->Set(Nan::New<v8::String>(\"FSEvents\").ToLocalChecked(),
               tpl->GetFunction());
}

NODE_MODULE(fse, FSEvents::Initialize)
";
        
        $__internal_ac051d297a91d212c4f8ec0d65ed789c78d7cbdf04ded9f50f714f8558a20c5a->leave($__internal_ac051d297a91d212c4f8ec0d65ed789c78d7cbdf04ded9f50f714f8558a20c5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/fsevents.cc";
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

#include \"nan.h\"
#include \"uv.h\"
#include \"v8.h\"
#include \"pthread.h\"
#include \"CoreFoundation/CoreFoundation.h\"
#include \"CoreServices/CoreServices.h\"
#include <iostream>
#include <vector>

#include \"src/storage.cc\"
namespace fse {
  class FSEvents : public node::ObjectWrap {
  public:
    FSEvents(const char *path, Nan::Callback *handler);
    ~FSEvents();

    // locking.cc
    bool lockStarted;
    pthread_mutex_t lockmutex;
    void lockingStart();
    void lock();
    void unlock();
    void lockingStop();

    // async.cc
    uv_async_t async;
    void asyncStart();
    void asyncTrigger();
    void asyncStop();

    // thread.cc
    pthread_t thread;
    CFRunLoopRef threadloop;
    void threadStart();
    static void *threadRun(void *ctx);
    void threadStop();

    // methods.cc - internal
    Nan::Callback *handler;
    void emitEvent(const char *path, UInt32 flags, UInt64 id);

    // Common
    CFArrayRef paths;
    std::vector<fse_event*> events;
    static void Initialize(v8::Handle<v8::Object> exports);

    // methods.cc - exposed
    static NAN_METHOD(New);
    static NAN_METHOD(Stop);
    static NAN_METHOD(Start);

  };
}

using namespace fse;

FSEvents::FSEvents(const char *path, Nan::Callback *handler): handler(handler) {
  CFStringRef dirs[] = { CFStringCreateWithCString(NULL, path, kCFStringEncodingUTF8) };
  paths = CFArrayCreate(NULL, (const void **)&dirs, 1, NULL);
  threadloop = NULL;
  lockingStart();
}
FSEvents::~FSEvents() {
  std::cout << \"YIKES\" << std::endl;
  lockingStop();
  delete handler;
  handler = NULL;

  CFRelease(paths);
}

#ifndef kFSEventStreamEventFlagItemCreated
#define kFSEventStreamEventFlagItemCreated 0x00000010
#endif

#include \"src/locking.cc\"
#include \"src/async.cc\"
#include \"src/thread.cc\"
#include \"src/constants.cc\"
#include \"src/methods.cc\"

void FSEvents::Initialize(v8::Handle<v8::Object> exports) {
  v8::Local<v8::FunctionTemplate> tpl = Nan::New<v8::FunctionTemplate>(FSEvents::New);
  tpl->SetClassName(Nan::New<v8::String>(\"FSEvents\").ToLocalChecked());
  tpl->InstanceTemplate()->SetInternalFieldCount(1);
  tpl->PrototypeTemplate()->Set(
           Nan::New<v8::String>(\"start\").ToLocalChecked(),
           Nan::New<v8::FunctionTemplate>(FSEvents::Start));
  tpl->PrototypeTemplate()->Set(
           Nan::New<v8::String>(\"stop\").ToLocalChecked(),
           Nan::New<v8::FunctionTemplate>(FSEvents::Stop));
  exports->Set(Nan::New<v8::String>(\"Constants\").ToLocalChecked(), Constants());
  exports->Set(Nan::New<v8::String>(\"FSEvents\").ToLocalChecked(),
               tpl->GetFunction());
}

NODE_MODULE(fse, FSEvents::Initialize)
", "node_modules/fsevents/fsevents.cc", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/fsevents.cc");
    }
}

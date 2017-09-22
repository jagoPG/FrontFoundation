<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/cloudformation/travis.template */
class __TwigTemplate_85e158d081715b939de92d633985b118daeb2f850b145531df1dad4f72629a9c extends Twig_Template
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
        $__internal_9fc80138972d2ce74bdcfbbe573c4b402bd95ad5a486f1564d65792053f43834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc80138972d2ce74bdcfbbe573c4b402bd95ad5a486f1564d65792053f43834->enter($__internal_9fc80138972d2ce74bdcfbbe573c4b402bd95ad5a486f1564d65792053f43834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/cloudformation/travis.template"));

        // line 1
        echo "{
    \"AWSTemplateFormatVersion\": \"2010-09-09\",
    \"Description\": \"node-pre-gyp bucket resources\",
    \"Resources\": {
        \"BuildUser\": {
            \"Type\": \"AWS::IAM::User\",
            \"Properties\": {
                \"Policies\": [
                    {
                        \"PolicyName\": \"list\",
                        \"PolicyDocument\": {
                            \"Statement\": [
                                {
                                    \"Action\": [
                                        \"s3:ListBucket\"
                                    ],
                                    \"Effect\": \"Allow\",
                                    \"Resource\": [
                                        \"arn:aws:s3:::mason-binaries\"
                                    ]
                                }
                            ]
                        }
                    },
                    {
                        \"PolicyName\": \"build\",
                        \"PolicyDocument\": {
                            \"Statement\": [
                                {
                                    \"Action\": [
                                        \"s3:DeleteObject\",
                                        \"s3:GetObject\",
                                        \"s3:GetObjectAcl\",
                                        \"s3:PutObject\",
                                        \"s3:PutObjectAcl\"
                                    ],
                                    \"Effect\": \"Allow\",
                                    \"Resource\": [
                                        \"arn:aws:s3:::mason-binaries/*\"
                                    ]
                                }
                            ]
                        }
                    }
                ]
            }
        },
        \"BuildUserKey\": {
            \"Type\": \"AWS::IAM::AccessKey\",
            \"Properties\": {
                \"UserName\": {
                    \"Ref\": \"BuildUser\"
                }
            }
        }
    },
    \"Outputs\": {
        \"AccessKeyId\": {
            \"Value\": {
                \"Ref\": \"BuildUserKey\"
            }
        },
        \"SecretAccessKey\": {
            \"Value\": {
                \"Fn::GetAtt\": [
                    \"BuildUserKey\",
                    \"SecretAccessKey\"
                ]
            }
        }
    }
}

";
        
        $__internal_9fc80138972d2ce74bdcfbbe573c4b402bd95ad5a486f1564d65792053f43834->leave($__internal_9fc80138972d2ce74bdcfbbe573c4b402bd95ad5a486f1564d65792053f43834_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/cloudformation/travis.template";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"AWSTemplateFormatVersion\": \"2010-09-09\",
    \"Description\": \"node-pre-gyp bucket resources\",
    \"Resources\": {
        \"BuildUser\": {
            \"Type\": \"AWS::IAM::User\",
            \"Properties\": {
                \"Policies\": [
                    {
                        \"PolicyName\": \"list\",
                        \"PolicyDocument\": {
                            \"Statement\": [
                                {
                                    \"Action\": [
                                        \"s3:ListBucket\"
                                    ],
                                    \"Effect\": \"Allow\",
                                    \"Resource\": [
                                        \"arn:aws:s3:::mason-binaries\"
                                    ]
                                }
                            ]
                        }
                    },
                    {
                        \"PolicyName\": \"build\",
                        \"PolicyDocument\": {
                            \"Statement\": [
                                {
                                    \"Action\": [
                                        \"s3:DeleteObject\",
                                        \"s3:GetObject\",
                                        \"s3:GetObjectAcl\",
                                        \"s3:PutObject\",
                                        \"s3:PutObjectAcl\"
                                    ],
                                    \"Effect\": \"Allow\",
                                    \"Resource\": [
                                        \"arn:aws:s3:::mason-binaries/*\"
                                    ]
                                }
                            ]
                        }
                    }
                ]
            }
        },
        \"BuildUserKey\": {
            \"Type\": \"AWS::IAM::AccessKey\",
            \"Properties\": {
                \"UserName\": {
                    \"Ref\": \"BuildUser\"
                }
            }
        }
    },
    \"Outputs\": {
        \"AccessKeyId\": {
            \"Value\": {
                \"Ref\": \"BuildUserKey\"
            }
        },
        \"SecretAccessKey\": {
            \"Value\": {
                \"Fn::GetAtt\": [
                    \"BuildUserKey\",
                    \"SecretAccessKey\"
                ]
            }
        }
    }
}

", "node_modules/fsevents/node_modules/node-pre-gyp/cloudformation/travis.template", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/cloudformation/travis.template");
    }
}

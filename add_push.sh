#!/bin/sh

path=`cd $(dirname $0);pwd`
cd $path

git remote set-url --add --push origin git@github.com:ma3252788/PHPTestMail.git
git remote set-url --add --push origin git@gitee.com:public_sharing/PHPTestMail.git
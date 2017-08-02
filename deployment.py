#!/usr/bin/env python

import os
import json
from fabric.api import env
from fabric.api import run
from fabric.operations import put
from fabric.operations import get
from fabric.operations import sudo
from fabric.contrib.project import rsync_project
from fabric.context_managers import cd
from fabric.context_managers import settings

env.hosts = ['54.205.78.151']
env.user = 'ubuntu'

def deploy():
    # with cd("/var/www/html/starterkit"):
    #     sudo("chown -R ubuntu:ubuntu .")
    rsync_project("/var/www/kirby", "./", exclude=[".git", ".gitignore", "deployment.py"])
    # rsync_project("/var/www/kirby")
    # rsync_project("/var/www/kirby/index.php")
    #
    # rsync_project("/var/www/html/kirby/site/config/", "site/config/")
    # rsync_project("/var/www/html/kirby/site/config/", "site/config/")
    # rsync_project("/var/www/html/kirby/site/config/", "site/config/")
    #
    # rsync_project("/var/www/html/kirby/site/config/", "site/config/")
    # rsync_project("/var/www/html/starterkit/site/plugins/", "site/plugins/")
    # rsync_project("/var/www/html/starterkit/site/templates/", "site/templates/")
    # rsync_project("/var/www/html/starterkit/site/blueprints/", "site/blueprints/")
    # rsync_project("/var/www/html/starterkit/assets/", "assets/")
    # rsync_project("/var/www/html/starterkit/assets/", "assets/")
    # with cd("/var/www/html/starterkit"):
    #     sudo("chown -R root:www-data .")
    #     sudo("find . -type f | xargs chmod 664")
    #     sudo("find . -type d | xargs chmod 775")
    #     sudo("find . -type d | xargs chmod +s")
    #     sudo("umask 0002")
    # put("site/config/config.php", "/var/www/starterkit/site/config/config.php", use_sudo=True)

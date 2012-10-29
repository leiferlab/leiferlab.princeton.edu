LeiferLab.princeton.edu
=======================

This is the repository for the Leifer Lab website. It is based off a template, ["Theme" by Virae](http://themeforest.net/item/plain/2616790) purchased from Themeforest.


Deploy on Server
----------------
The website is hosted on the server at 
	gen200l.princeton.edu

The idea is to use a bare repository on princeton's server with a post recieve hook to automatically deploy the website without exposing the .git folder as described in this post: http://toroid.org/ams/git-website-howto 


There is a bare repository located at:
	/home/leifer/leiferlab.princeton.edu.git
The public html folder is at:
	/Genomics/local/leiferlab/www/

The commands to create the post-hook on the server is:
	$ cat > hooks/post-receive
	#!/bin/sh
	GIT_WORK_TREE=/Genomics/local/leiferlab/www git checkout -f
	
	$ chmod +x hooks/post-recieve

To setup a name for the remote repo, which we will call "deploy" run the following
	$ git remote add deploy ssh://leifer@gen200l.princeton.edu/home/leifer/leiferlab.princeton.edu.git
	$ git push deploy +master:refs/heads/master

Sandbox
-------
I am using PHP for the website because it makes it easy to reuse headers and footers, amongst other things. One downside of using PHP is that I can not test out the full website on a local machine without installing PHP and Apache. So I have created a sandbox area on the same webserver at Princeton that will only be accessible on the princeton network and with my username and password:

	/home/leifer/wiki/www/html/sandbox

This is in the same directory tree as my wiki at leiferwiki.princeton.edu To get to the site go to http://leiferwiki.princeton.edu/sandbox/ 

The bare repo is at
	/home/leifer/leiferlab.sandbox.git

The post-recieve hooks for that repo are:
	$ cat > hooks/post-receive
	#!/bin/sh
	GIT_WORK_TREE=/home/leifer/wiki/www/html/sandbox git checkout -f
	
	$ chmod +x hooks/post-recieve

To add the name for the sandbox repo to the local repository, run:
	$ git remote add sandbox  ssh://leifer@gen200l.princeton.edu/home/leifer/leiferlab.sandbox.git
	$ git push sandbox +master:refs/heads/master




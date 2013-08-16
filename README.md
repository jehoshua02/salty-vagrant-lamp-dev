# salty-vagrant-lamp-dev

Example [Vagrant](http://docs.vagrantup.com/v2/why-vagrant/index.html) setup that uses [SaltStack](http://docs.saltstack.com/) to provision a [LAMP](http://en.wikipedia.org/wiki/LAMP_%28software_bundle%29) box for dev purposes.


## Why?

It's a platform-independent, version-controlled, repeatable, reproducible, shareable, customizeable, authentic 
replacement for all the *AMP packages out there (if you are still wondering why, you are probably 
[stupid and ugly](http://www.youtube.com/watch?feature=player_detailpage&v=4XpnKHJAok8&t=487)).


## Requirements

+ [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
+ [Vagrant](http://downloads.vagrantup.com/)
+ [Salty Vagrant](https://github.com/saltstack/salty-vagrant) (`vagrant plugin install vagrant-salt`)


## Vagrant Up

With just a few commands you'll have a virtual machine up and running ...

```shell
git clone https://github.com/jehoshua02/salty-vagrant-lamp-dev.git
cd salty-vagrant-lamp-dev
vagrant up
```

The first run of `vagrant up` will take some time: the base box must be downloaded, a new vagrant box must be created 
from the base box, salt must be installed in the vagrant box, and salt will then install and configure the LAMP stack. 
The next time `vagrant up` is executed none of these things will need to be performed again.


## Did it Work?

If everything ran smoothly, you should be able to open `http://192.168.200.10` and see *something* other than an error 
page. Ideally, the host name, full path of index file executed, and a list of hosts (which you can add to your hosts 
file if you want).

You should also be able to connect as `root`, password `root`, to `192.168.200.10` with your favorite MySql tool ([MySql Workbench](http://www.mysql.com/products/workbench/), [Sequel Pro](http://www.sequelpro.com/), or just the plain-old [cli client](http://dev.mysql.com/doc/refman/5.5/en/mysql.html))


## Adding Hosts

Adding hosts to the setup is simple, and it doesn't involve modifying any `VirtualHost` definitions or restarting
Apache. It's only two step. For example, if the host being added were `dev.myhost.com`:

1. Add a directory named `dev.myhost.com` in `docroots`.
2. Add `192.168.200.10    dev.myhost.com` to your hosts file.

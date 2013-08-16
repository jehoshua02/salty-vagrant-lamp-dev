# salty-vagrant-lamp-dev

Example [Vagrant](http://docs.vagrantup.com/v2/why-vagrant/index.html) setup that uses [SaltStack](http://docs.saltstack.com/) to provision a [LAMP](http://en.wikipedia.org/wiki/LAMP_%28software_bundle%29) box for dev purposes.


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

MyHosts is a tool to manage your hosts entries.

Installation
------------

    $ composer require hasantayyar/myhosts:dev-master

or add these lines to your composer.json

    
    {
        "require": {
            "hasantayyar/myhosts": "dev-master"
        }
    }
    
then run

    $ composer update

Usage
-----


Add a new hosts entry for hostname as mydev.host and ip address as 127.0.0.1
    
    $ sudo myhosts add mydev.host



Add a new host entry for hostname as mydev.host and a custom ip address

    $ sudo myhosts mydev.host add 193.5.5.1 



Remove a host entry 

    $ sudo myhosts mydev.host delete 193.5.5.1
    


List host entries added by myhosts

    $ sudo myhosts list
	   

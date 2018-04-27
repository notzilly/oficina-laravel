# Tutorial Laravel
Este readme fornece informações de instalação do ambiente de desenvolvimento Laravel Homestead.  
Vamos usar o Vagrant, uma ferramenta para criação e gerenciamento de máquinas virtuais, e o VirtualBox. 

## Ferramentas necessárias
1. [Vagrant](https://www.vagrantup.com/downloads.html)
2. [VirtualBox 5.2](https://www.virtualbox.org/wiki/Downloads)

## Instalação do Ambiente
```
// Instalar a box do Homestead no Vagrant
$ vagrant box add laravel/homestead

// Clonar repo
$ git clone https://github.com/laravel/homestead.git ~/Homestead

// Entrar no diretório
$ cd ~/Homestead

// Dar checkout na versão 7.4
$ git checkout v7.4.0

// Criar o arquivo Homesteal.yaml
$ bash init.sh (Mac/Linux)
$ init.bat (Windows)
```
Caso ocorram problemas relacionados à versão do PowerShell no Windows, baixar a versão 3.0 [aqui](https://www.microsoft.com/en-us/download/details.aspx?id=34595)

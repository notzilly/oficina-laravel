# Tutorial Laravel
Este readme fornece informações de instalação do ambiente de desenvolvimento Laravel Homestead.  
Vamos usar o Vagrant, uma ferramenta para criação e gerenciamento de máquinas virtuais, e o VirtualBox. 

## Ferramentas necessárias
1. [Vagrant](https://www.vagrantup.com/downloads.html)
2. [VirtualBox 5.2](https://www.virtualbox.org/wiki/Downloads)

## Instalação e Configuração do Ambiente
1. Baixar o Homestead (no exemplo o diretório pai é a home)
```
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

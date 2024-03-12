#!/bin/bash

# POLITICAS IPTABLES

iptables -P INPUT DROP
iptables -P OUTPUT DROP
iptables -P FORWARD DROP

# REGLAS IPTABLES

# regla para habilitar el puerto 80 y 443 en la maquina local

# Sentencia para INPUT
iptables -A INPUT -p tcp --dport 443 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A INPUT -p tcp --dport 80 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A INPUT -p tcp --sport 80 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A INPUT -p tcp --sport 443 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT

# Sentencia para OUTPUT
iptables -A OUTPUT -p tcp --dport 443 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A OUTPUT -p tcp --dport 80 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 80 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 443 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT

# Sentencia para acceder al sistema para la red 192.168.0.0/24

# INPUT
iptables -A INPUT -p tcp --sport 80 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT
iptables -A INPUT -p tcp --sport 443 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT
iptables -A INPUT -p tcp --dport 80 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT
iptables -A INPUT -p tcp --dport 443 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT

# OUTPUT
iptables -A OUTPUT -p tcp --dport 80 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT
iptables -A OUTPUT -p tcp --dport 443 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 80 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 443 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT

# Mismas reglas pero para puerto 3128

iptables -A INPUT -p tcp --dport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A INPUT -p tcp --dport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A INPUT -p tcp --sport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A INPUT -p tcp --sport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT

iptables -A OUTPUT -p tcp --dport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A OUTPUT -p tcp --dport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 3128 -d 127.0.0.1 -s 127.0.0.1 -j ACCEPT

iptables -A INPUT -p tcp --sport 3128 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT
iptables -A INPUT -p tcp --sport 3128 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT
iptables -A INPUT -p tcp --dport 3128 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT
iptables -A INPUT -p tcp --dport 3128 -s 192.168.0.0/24 -d 192.168.0.1 -j ACCEPT

iptables -A OUTPUT -p tcp --dport 3128 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT
iptables -A OUTPUT -p tcp --dport 3128 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 3128 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT
iptables -A OUTPUT -p tcp --sport 3128 -s 192.168.0.1 -d 192.168.0.0/24 -j ACCEPT

echo "Script de iptables ejecutado exitosamente"


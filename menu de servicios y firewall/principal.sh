#!/bin/bash

# Scrpt que contiene funciones para manejar diferentes servicios dentro de una red de computadoras
# DHCP para asignar direcciones IP dentro de un rango especificado, ya sea de forma dinamica o fija.
# Proxy Squid para permitir o denegar acceso a ciertos sitios en el puerto 80 y 443 
# Firewall por Iptables para aceptar o denegar cierto trafico, esta funcion llama a otro script donde estan especificadas dichas reglas

# El proposito de este script es brindarle servicios en el ambito de asignaciones ip a equipos de una red
# Tambien es proteger de alguna manera el acceso no autorizado a un sitio web realizaddo en lenguaje PHP

#--------FUNCIONES DHCP

function iniciar_dhcp() {
    echo "Iniciando Servicio DHCP..."
    service isc-dhcp-server start
    echo "Servidor DHCP iniciado"
}

function reiniciar_dhcp(){
    echo "Reiniciando DHCP"
    service isc-dhcp-server restart
    echo "DHCP reiniciado"
}

function detener_dhcp() {
    echo "Deteniendo Servicio DHCP..."
    service isc-dhcp-server stop
    echo "Se detuvo el servicio DHCP"
}

function estado_dhcp() {
    echo "Estado de DHCP"
    service isc-dhcp-server status
}

#--------> FUNCIONES Proxy Squid

function iniciar_proxy() {
    echo "Iniciando Servicio Proxy Squd..."
    service squid start
    echo "Servidor Proxy Squid iniciado"
}

function reiniciar_proxy(){
    echo "Reiniciando Servicio Proxy Squd..."
    service squid restart
    echo "Servidor Proxy Squid Reiniciado"
}

function detener_proxy() {
    echo "Deteniendo Servicio Proxy Squid..."
    service squid stop
    echo "Se detuvo el servicio Squid Proxy"
}

function estado_proxy() {
    echo "Estado de Proxy Squid"
    service squid status
}

#--------> FUNCIONES Firewall por iptables

function iniciar_firewall() {
    echo "Iniciando Firewall..."
    iptables.sh
    echo "Firewall iniciado"
}

function reiniciar_firewall(){
    echo "Reiniciando Firewall..."
    reiniciarfw.sh
    echo "Firewall Reiniciado"
}

function default_firewall() {
    echo "Restableciendo Firewall por defecto..."
    defaulfw.sh
    echo "Se detuvo el servicio Squid Proxy"
}

function estado_firewall() {
    echo "Estado de Firewall"
    sudo iptables -L
}

#-----> MENU DE OPCIONES

while true; do
    echo -e "\n"
    echo "Menú de opciones:"
    echo "1: Iniciar Servicio DHCP"
    echo "2: Detener DHCP"
    echo "3: Reiniciar DHCP"
    echo "4: Ver estado de DHCP"
    echo "5: Iniciar Servicio Proxy"
    echo "6: Detener Proxy"
    echo "7: Reiniciar Proxy"
    echo "8: Ver estado de Proxy"
    echo "9: Iniciar Firewall"
    echo "10: Reiniciar Firewall"
    echo "11: Restablecer valores por defecto de Firewall"
    echo "12: Ver estado de Firewall"
    echo "13: Salir del programa"
    echo -e "\n"

    read -p "Ingrese el número de la opción deseada: " opcion

    case $opcion in
        1) iniciar_dhcp ;;
        2) detener_dhcp ;;
        3) reiniciar_dhcp ;;
        4) estado_dhcp ;;
        5) iniciar_proxy ;;
        6) detener_proxy ;;
        7) reiniciar_proxy ;;
        8) estado_proxy ;;
        9) iniciar_firewall ;;
        10) reiniciar_firewall ;;
        11) default_firewall ;;
        12) estado_firewall ;;
        13) echo "Saliendo del programa..." 
            break ;;
        *) echo "Opción inválida. Por favor, seleccione una opción válida." ;;
    esac
done
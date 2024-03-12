#REINICIAR IPTABLES
iptables -F #borra las tablas

iptables -P INPUT ACCEPT
iptables -P OUTPUT ACCEPT
iptables -P FORWARD ACCEPT

#politica por defecto es aceptar todo el trafico 
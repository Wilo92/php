saludo = 25


def saludar():
    global saludo
    saludo = "hola mundo"


def saludaChanchito():
    saludo = "hola chanchito"
    print(saludo)


resultado1 = saludo+2
print(resultado1)
saludar()
resultado2 = saludo+2
print(resultado2)

n1 = input('ingresa un nuemro')
n2 = input('ingresa numero')

n1 = int(n1)
n2 = int(n2)


print(n1 + n2)

suma = n1+n2
resta = n1-n2
multiplicacion = n1*n2
div = n1/n2

mensaje = f"""
para los numero {n1} y {n2},
el resultado de la suma es {suma}.
el resultado de la resta es {resta}.
el resultado de la multiplicacion es {multiplicacion}.
el resultado de la division es {div}.
"""

print(mensaje)

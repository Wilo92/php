numeros = [2, 12, 122, 123, 145, 334]

# numeros.sort(reverse=True)
numeros2 = sorted(numeros, reverse=True)
print(numeros)
print(numeros2)

usuarios = [["chanchito", 4], ["felipe", 1], ["carlos", 5]]


usuarios.sort(key=lambda el: el[1])
print(usuarios)
